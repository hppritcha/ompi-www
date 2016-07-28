<?
$subject_val = "Re: [OMPI docs] Open MPI compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 09:44:30 2011" -->
<!-- isoreceived="20111019134430" -->
<!-- sent="Wed, 19 Oct 2011 07:44:09 -0600" -->
<!-- isosent="20111019134409" -->
<!-- name="Richard Pitre" -->
<!-- email="richardpitre_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Open MPI compilation Error" -->
<!-- id="C1F91913-9B6D-4A66-B9DD-5805C3940D4F_at_mac.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E4836E204F953E4F91484E7A23674AB801C4824F_at_ICTSC-W-S206.soliscom.uu.nl" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Open MPI compilation Error<br>
<strong>From:</strong> Richard Pitre (<em>richardpitre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 09:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0157.php">Jed Brown: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="0155.php">Rashid, Z. (Zahid): "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Rashid, Z. (Zahid): "[OMPI docs] Open MPI compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Jed Brown: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Reply:</strong> <a href="0157.php">Jed Brown: "Re: [OMPI docs] Open MPI compilation Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please remove me from this list or give me instructions how to do this.
<br>
Thanks
<br>
- Richard
<br>
<p>On Oct 17, 2011, at 6:02 AM, Rashid, Z. (Zahid) wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile open MPI (release 1.5.4) from the source code on a Macbook Pro (OS X Lion) with Xcode 4.1 installed. I configure the openmpi with the following options;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 --with-wrapper-cflags=-m64 --with-wrapper-cxxflags=-m64
</span><br>
<span class="quotelev1">&gt; in a new/clean directory. When I try make it gives me the following error;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Making all in otfprofile
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-CSVParse.o
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-DataStructure.o
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-Handler.o
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-Prodtex.o
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-Summary.o
</span><br>
<span class="quotelev1">&gt;   CXXLD  otfprofile
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;___builtin_expect&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main.omp_fn.0 in otfprofile-otfprofile.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[9]: *** [otfprofile] Error 1
</span><br>
<span class="quotelev1">&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; I have gcc version 4.2.1 (Based on Apple Inc. build 5658) (LLVM build 2335.15.00), gfortran GNU Fortran (GCC) 4.2.1 (Apple Inc. build 5666) (dot 3) I heard that I can use MacPorts for an easy installation but I want to compile it myself from the source. Can someone suggest me if I need to set some extra flags or what is causing this error? Please let me know if you need any further information. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Zahid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0157.php">Jed Brown: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="0155.php">Rashid, Z. (Zahid): "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Rashid, Z. (Zahid): "[OMPI docs] Open MPI compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Jed Brown: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Reply:</strong> <a href="0157.php">Jed Brown: "Re: [OMPI docs] Open MPI compilation Error"</a>
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
