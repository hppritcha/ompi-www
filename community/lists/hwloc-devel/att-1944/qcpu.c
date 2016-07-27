/*----------------------------------------------------------------*/
/* NOTE: this version times a simple integer-intensive loop to    */
/* "measure" the clock frequency. This works on power-2, power-pc,*/
/* and power-3 architectures; but the code MUST be compiled with  */
/* "cc qcpu.c -o qcpu -lxlf90" without optimization or debugging. */
/* Use of any other compiler flags might give wrong answers for   */
/* the apparent clock frequency, and the apparent frequency might */
/* be wrong for other chip architectures.                         */
/*----------------------------------------------------------------*/

#include <sys/types.h>
#include <fcntl.h>
#include <sys/systemcfg.h>
#include <stdio.h>
#include <nlist.h>
 struct nlist info;
 double rtc(void);

 void main()

 {
   int fd;
   int nprocs, imp;
   int i, isum;
   int iter, maxiter;
   double freq, maxfreq;
   double time1, time2;

   info.n_name = "_system_configuration";

   fd = open("/dev/kmem",O_RDONLY);
   knlist(&info,1,sizeof(struct nlist));
   lseek(fd,info.n_value,0);
   read(fd,&_system_configuration,sizeof(_system_configuration));
   nprocs = _system_configuration.ncpus;
   printf("number of cpus: %d\n", nprocs);
   imp = _system_configuration.implementation;
   if (imp == POWER_RS1)
      printf("processor class: POWER_RS1\n");
   else if (imp == POWER_RSC)
      printf("processor class: POWER_RSC\n");
   else if (imp == POWER_RS2)
      printf("processor class: POWER_RS2\n");
   else if (imp == POWER_601)
      printf("processor class: POWER_601\n");
   else if (imp == POWER_603)
      printf("processor class: POWER_603\n");
   else if (imp == POWER_604)
      printf("processor class: POWER_604\n");
   else if (imp == POWER_630)
      printf("processor class: POWER_630\n");
   else if (imp == POWER_4)
      printf("processor class: POWER_4\n");
   else if (imp == POWER_5)
      printf("processor class: POWER_5\n");
   else if (imp == POWER_6)
      printf("processor class: POWER_6\n");
   else if (imp == POWER_7)
      printf("processor class: POWER_7\n");
   else printf("processor class: %d unknown\n");

   printf("L1 Inst Cache Size  in KB: %d\n",_system_configuration.icache_size / 1024);
   printf("L1 Data Cache Size  in KB: %d\n",_system_configuration.dcache_size / 1024);
   printf("L1 Data Cache Line Sz (B): %d\n",_system_configuration.dcache_line );
   printf("L2 Cache Size       in KB: %d\n",_system_configuration.L2_cache_size / 1024);
   printf("L2 Cache Associativity   : %d\n",_system_configuration.L2_cache_asc);


   maxiter = 10;

   maxfreq = 0.0;
   for (iter=0; iter<maxiter; iter++)
   {
      time1 = rtc();
      isum = 0;
      for (i=0; i<100000; i++) isum += 1;
      time2 = rtc();
      freq = 0.9/(time2-time1);
      if (freq > maxfreq) maxfreq = freq;
   }

   printf("apparent freq = %.1f MHz\n", maxfreq );

}

