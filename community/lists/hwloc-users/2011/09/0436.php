<?
$subject_val = "Re: [hwloc-users] Re : hwloc topology check initializing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  3 09:25:48 2011" -->
<!-- isoreceived="20110903132548" -->
<!-- sent="Sat, 3 Sep 2011 15:25:44 +0200" -->
<!-- isosent="20110903132544" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Re : hwloc topology check initializing" -->
<!-- id="CAJNPZUU1y+6PafpNf-XBKX=Gu9y5_d4uTF+iVA6O3q1Cn_+p2g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AEA82C64-0576-4A50-956B-AD892948B5C1_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Re : hwloc topology check initializing<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-03 09:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Brice Goglin: "[hwloc-users] Re :  Re : hwloc topology check initializing"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Brice Goglin: "[hwloc-users] Re :  hwloc topology check initializing"</a>
<li><strong>In reply to:</strong> <a href="0435.php">Brice Goglin: "[hwloc-users] Re :  hwloc topology check initializing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>but it works only if the user  assing NULL to topology.
<br>
<p>hwloc_topology_init() does not check the argument passed ? There are no ways
<br>
to check if topology is initialized or not?
<br>
<p>Thanks.
<br>
<p>2011/9/3 Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assign NULL to the topology when declaring the variable. It will be changed
</span><br>
<span class="quotelev1">&gt; into something else when init() is called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Reply message -----
</span><br>
<span class="quotelev1">&gt; De : &quot;Gabriele Fatigati&quot; &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Pour : &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Objet : [hwloc-users] hwloc topology check initializing
</span><br>
<span class="quotelev1">&gt; Date : sam., sept. 3, 2011 10:56
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear hwloc users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how to check if my hwloc topology is initialized? I have to use
</span><br>
<span class="quotelev1">&gt; hwloc_topology_check? This code not works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_t topology;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if( topology==NULL)
</span><br>
<span class="quotelev1">&gt;  exit(-1);
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Brice Goglin: "[hwloc-users] Re :  Re : hwloc topology check initializing"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Brice Goglin: "[hwloc-users] Re :  hwloc topology check initializing"</a>
<li><strong>In reply to:</strong> <a href="0435.php">Brice Goglin: "[hwloc-users] Re :  hwloc topology check initializing"</a>
<!-- nextthread="start" -->
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
