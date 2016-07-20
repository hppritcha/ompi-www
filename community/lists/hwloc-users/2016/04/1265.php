<?
$subject_val = "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 01:16:14 2016" -->
<!-- isoreceived="20160425051614" -->
<!-- sent="Mon, 25 Apr 2016 07:16:10 +0200" -->
<!-- isosent="20160425051610" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated" -->
<!-- id="571DA81A.7010101_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAOQ1qzvDOUF621YRhOFQT6mQ9rN5YjYKnonB_uR3rp-8CnipQg_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 01:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1264.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1264.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
**Please replace err with errno in that line:
<br>
printf(&quot;Error Occured, and error no:= %d \n&quot;, err);
<br>
<p>You may need to #include &lt;errno.h&gt; in the header.
<br>
<p>Brice
<br>
<p>*
<br>
<p>*
<br>
Le 25/04/2016 00:27, Rezaul Karim Raju a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Please find the attached, system Layout. 
</span><br>
<span class="quotelev1">&gt; *uname -a*
</span><br>
<span class="quotelev1">&gt; Linux crill-010 3.11.10-21-desktop #1 SMP PREEMPT Mon Jul 21 15:28:46
</span><br>
<span class="quotelev1">&gt; UTC 2014 (9a9565d) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and below is the code snippet where I am getting error: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Find Location of a: 3rd QUARTER */
</span><br>
<span class="quotelev1">&gt; *err = hwloc_get_area_membind_nodeset(topology, array+ size/2, size/4,
</span><br>
<span class="quotelev1">&gt; nodeset_c, &amp;policy, HWLOC_MEMBIND_THREAD ); *
</span><br>
<span class="quotelev1">&gt; *if (err &lt; 0) {*
</span><br>
<span class="quotelev1">&gt; *printf(&quot;Error Occured, and error no:= %d \n&quot;, err);*
</span><br>
<span class="quotelev1">&gt; fprintf(stderr, &quot;failed to retrieve the buffer binding and policy\n&quot;);
</span><br>
<span class="quotelev1">&gt; hwloc_topology_destroy(topology);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(nodeset_c);
</span><br>
<span class="quotelev1">&gt; //return EXIT_FAILURE;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Please ignore the segfault, here it gives the error no: = -1*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *My question is allocate an array to a NUMA node and bind it over
</span><br>
<span class="quotelev1">&gt; nodes partially is OK with hwloc API..?*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; Thank you again.
</span><br>
<span class="quotelev1">&gt; - Raju
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 24, 2016 at 4:58 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please find out which line is actually causing the segfault.
</span><br>
<span class="quotelev1">&gt;     Run your program under gdb. Once it crashes, type &quot;bt full&quot; and
</span><br>
<span class="quotelev1">&gt;     report the output here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     By the way, what kind of machine are you using? (lstopo + uname -a)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 24/04/2016 23:46, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you very much for your prompt care. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am retrieving as below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     nodeset_c = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     */* Find Location of a: 3rd QUARTER */*
</span><br>
<span class="quotelev2">&gt;&gt;     err = *hwloc_get_area_membind_nodeset(*topology, *array+ size/2,
</span><br>
<span class="quotelev2">&gt;&gt;     size/4,* nodeset_c, &amp;policy, HWLOC_MEMBIND_THREAD ); 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* print the corresponding NUMA nodes */
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_bitmap_asprintf(&amp;s, nodeset_c);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Address:= %p  Variable:= &lt;array [A]- 3rd quarter&gt; bound
</span><br>
<span class="quotelev2">&gt;&gt;     to*nodeset %s with contains:*\n&quot;, (array+size/2), s);
</span><br>
<span class="quotelev2">&gt;&gt;     free(s);
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_bitmap_foreach_begin(hw_i, nodeset_c) {
</span><br>
<span class="quotelev2">&gt;&gt;     *obj_c = hwloc_get_numanode_obj_by_os_index(topology, hw_i);*
</span><br>
<span class="quotelev2">&gt;&gt;     *printf(&quot;[3rd Q]  node #%u (OS index %u) with %lld bytes of
</span><br>
<span class="quotelev2">&gt;&gt;     memory\n&quot;, obj_c-&gt;logical_index, hw_i, (unsigned long long)
</span><br>
<span class="quotelev2">&gt;&gt;     obj_c-&gt;memory.local_memory)*;
</span><br>
<span class="quotelev2">&gt;&gt;     } hwloc_bitmap_foreach_end();
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_bitmap_free(nodeset_c);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *It prints as below:*
</span><br>
<span class="quotelev2">&gt;&gt;     *
</span><br>
<span class="quotelev2">&gt;&gt;     *
</span><br>
<span class="quotelev2">&gt;&gt;     *error no:= -1 and segmentation fault 
</span><br>
<span class="quotelev2">&gt;&gt;     *
</span><br>
<span class="quotelev2">&gt;&gt;     *my array size is =  262144 {data type long} and each Quarter =
</span><br>
<span class="quotelev2">&gt;&gt;     size/4 =65536*
</span><br>
<span class="quotelev2">&gt;&gt;     Address of array:= 0x7f350e515000, tmp:= 0x7f34fe515000,
</span><br>
<span class="quotelev2">&gt;&gt;     tst_array:= 0x7f34ee515000
</span><br>
<span class="quotelev2">&gt;&gt;     Address of array:= 0x7f350e515000, array+size/4:= 0x7f352e515000,
</span><br>
<span class="quotelev2">&gt;&gt;     array+size/2:= 0x7f354e515000, array+3*size/4:= 0x7f356e515000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Address:= 0x7f350e515000  Variable:= &lt;array [A] - 1st quarter&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     bound to nodeset 0x00000001 with contains:
</span><br>
<span class="quotelev2">&gt;&gt;      [1st Q]  node #0 (OS index 0) with 8387047424 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;     Address:= 0x7f352e515000  Variable:= &lt;array [A]- 2nd quarter&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     bound to nodeset 0x00000004 with contains:
</span><br>
<span class="quotelev2">&gt;&gt;     [2nd Q]  node #2 (OS index 2) with 8471621632 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     in case of [3rd Q]
</span><br>
<span class="quotelev2">&gt;&gt;     Error Occured, and error no:= -1 and segmentation fault happened.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks.!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sun, Apr 24, 2016 at 4:08 PM, Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello,
</span><br>
<span class="quotelev2">&gt;&gt;         What do you mean with &quot; it can not bind the specified memory
</span><br>
<span class="quotelev2">&gt;&gt;         section (addr, len) to the desired NUMA node&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;         Did it fail? If so, what does errno contain?
</span><br>
<span class="quotelev2">&gt;&gt;         If it didn't fail, what did it do instead?
</span><br>
<span class="quotelev2">&gt;&gt;         thanks
</span><br>
<span class="quotelev2">&gt;&gt;         Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 24/04/2016 23:02, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I was trying to bind each quarter of an array to 4 different
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         NUMA nodes, and doing as below: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *//ALLOCATION *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *obj_a = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, 0);*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *array =* hwloc_alloc_membind_nodeset( topology, size,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         obj_a-&gt;nodeset, HWLOC_MEMBIND_BIND, 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *tmp *= hwloc_alloc_membind_nodeset( topology, size,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         obj_a-&gt;nodeset, HWLOC_MEMBIND_BIND, 1); 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *// DISTRIBUTED BINDING  [my system has 8 NUMA nodes (0-7)]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;Address of array:= %p, array+size/4:= %p,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         array+size/2:= %p, array+3*size/4:= %p \n&quot;, array,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         array+size/4, array+size/2, array+3*size/4);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // bind 1st quarter to node (n-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, (array), size/4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         obj_a-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, (tmp), size/4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         obj_a-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // bind 2nd quarter to node (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *obj_b = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE,  2);*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, (array+size/4),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         size/4, obj_b-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, (tmp +size/4),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         size/4, obj_b-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // bind 3rd quarter to node (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *obj_c = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, 4);*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, array+size/2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         size/4, obj_c-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, tmp+size/2, size/4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         obj_c-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // bind 4th quarter to node (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *obj_d = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, 6);*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, array+3*size/4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         size/4, obj_d-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc_set_area_membind_nodeset(topology, tmp+3*size/4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         size/4, obj_d-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         My intention here is to distribute 'array' (which is - long
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         type element:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         array = (ELM *) malloc(bots_arg_size * sizeof(ELM));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         tmp = (ELM *) malloc(bots_arg_size * sizeof(ELM));) over
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         nodes through hwloc memory binding. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         1). But except only *obj_a, it can not bind the specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         memory section (addr, len) to the desired NUMA node. *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         2). I did tried with  MEMBIND_INTERLEAVE policy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         array = hwloc_alloc_membind_nodeset(topology, size,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         cset_available, HWLOC_MEMBIND_INTERLEAVE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         tmp = hwloc_alloc_membind_nodeset(topology, size,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         cset_available, HWLOC_MEMBIND_INTERLEAVE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         but I did get it working here as well. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *Can you please comment on this..?  *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thank you very much in advance..!! 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - Raju
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Mon, Mar 21, 2016 at 11:25 AM, Rezaul Karim Raju
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;raju.cse.buet_at_[hidden] &lt;mailto:raju.cse.buet_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thanks, Brice.!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On Mon, Mar 21, 2016 at 11:22 AM, Brice Goglin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 For testing, you can use this tarball:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="https://ci.inria.fr/hwloc/job/zcustombranch-0-tarball/lastSuccessfulBuild/artifact/hwloc-getmemlocation-20160320.2208.gitd2f6537.tar.gz">https://ci.inria.fr/hwloc/job/zcustombranch-0-tarball/lastSuccessfulBuild/artifact/hwloc-getmemlocation-20160320.2208.gitd2f6537.tar.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Le 21/03/2016 17:21, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Hi Brice,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Thanks for your email. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 I believe it is definitely helpful. Getting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 memory range within the current process will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 very good information to drill down. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Let me use this and I will get back if any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 clarification/comment I have.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Regards-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Raju 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 On Sun, Mar 20, 2016 at 4:26 PM, Brice Goglin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     I just pushed a proposal, see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     <a href="https://github.com/open-mpi/hwloc/issues/97">https://github.com/open-mpi/hwloc/issues/97</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Le 18/12/2015 20:45, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Yes, we're &quot;thinking&quot; about it. But there are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     open questions as mentioned in the github issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     By the way, we wouldn't return NULL in case of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     non-physically-allocated buffer, but rather
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     set the output nodeset to 0.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     You should comment on the issue directly,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     instead of replying here, otherwise your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     comments may get lost.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Brice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Le 18/12/2015 18:57, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Hi Brice, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Thanks for your time and nice explanation. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     I have looked at the issue with location
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     return (the page proportion across multiple
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     node &amp; physical allocation). Are you thinking
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     to add this function..? Like if we think list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     of node or nodes where the array is allocated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     (only if physically allocated otherwise NULL)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     is it possible..? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     I am looking for getting the physical
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     location of data allocated by OS default
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     policy. Appreciate any better idea and please
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     share with me. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     - Raju    
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     On Tue, Dec 15, 2015 at 3:28 AM, Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Le 15/12/2015 07:21, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Le 15/12/2015 05:57, Rezaul Karim Raju a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *OUTPUT: *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *Policy--&gt;* buffer(Array: A) *membind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [default OS binding] Policy is:= 1 [1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         refers to *HWLOC_MEMBIND_FIRSTTOUCH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0</a>&gt;*]*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *Nodeset --&gt; *buffer(Array: A) bound to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         nodeset*0x000000ff *with contains*:*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         * *node #0 (OS index 0) with 8387047424
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          node #1 (OS index 1) with 8471617536
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          node #2 (OS index 2) with 8471621632
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          node #3 (OS index 3) with 8471617536
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          node #4 (OS index 4) with 8471621632
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          node #5 (OS index 5) with 8471617536
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          node #6 (OS index 6) with 8471621632
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          node #7 (OS index 7) with 8471564288
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *why it shows allocated memory is bound
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         to all available nodeset..? should it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         not be allocated to a specific nodeset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         one ..?*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         You are confusing the &quot;binding&quot; and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         &quot;actual location&quot;. Your memory buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         isn't bound to a specific location by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         default. But Linux has to allocate it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         somewhere. So your buffer is &quot;located&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         in some node after the allocation, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         it is not &quot;bound&quot; there (what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         get_area_membind returns) which means
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Linux could have allocated it somewhere
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         hwloc cannot currently return the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         &quot;location&quot; of a memory buffer. I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         been thinking about adding this feature
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         in the past, but it looks like you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         the first actual user requesting this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         We could add something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         hwloc_get_last_memory_location(topology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         input buffer, outputnodeset)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         At least on Linux that's possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         For clarity, this is similar to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         difference between hwloc_get_cpubind()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         and hwloc_get_last_cpu_location(): A
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         task always runs on a specific PU, even
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         if it is not bound to anything specific PU.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         By the way, there is already an issue for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         <a href="https://github.com/open-mpi/hwloc/issues/97">https://github.com/open-mpi/hwloc/issues/97</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Feel to comment there.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Brice
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     ------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     RaJu, Rezaul Karim
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Graduate Student (PhD) | Computer Science |
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     University of Houston
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Research in High Performance Computing Tools  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Houston, Texas-77004
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 ------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 RaJu, Rezaul Karim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Graduate Student (PhD) | Computer Science |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 University of Houston
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Research in High Performance Computing Tools  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Houston, Texas-77004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             RaJu, Rezaul Karim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Graduate Student (PhD) | Computer Science | University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Research in High Performance Computing Tools  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Houston, Texas-77004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RaJu, Rezaul Karim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Graduate Student (PhD) | Computer Science | University of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Research in High Performance Computing Tools  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Houston, Texas-77004
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     ------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     RaJu, Rezaul Karim
</span><br>
<span class="quotelev2">&gt;&gt;     Graduate Student (PhD) | Computer Science | University of Houston
</span><br>
<span class="quotelev2">&gt;&gt;     Research in High Performance Computing Tools  
</span><br>
<span class="quotelev2">&gt;&gt;     Houston, Texas-77004
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt; RaJu, Rezaul Karim
</span><br>
<span class="quotelev1">&gt; Graduate Student (PhD) | Computer Science | University of Houston
</span><br>
<span class="quotelev1">&gt; Research in High Performance Computing Tools  
</span><br>
<span class="quotelev1">&gt; Houston, Texas-77004
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1264.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1264.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
