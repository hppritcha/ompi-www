<?
$subject_val = "Re: [hwloc-users] Fwd: Make fails on MacosX 10.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 08:30:23 2009" -->
<!-- isoreceived="20091117133023" -->
<!-- sent="Tue, 17 Nov 2009 14:30:18 +0100" -->
<!-- isosent="20091117133018" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Fwd: Make fails on MacosX 10.6.2" -->
<!-- id="20091117133018.GL12736_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[hwloc-users] Fwd: Make fails on MacosX 10.6.2" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Fwd: Make fails on MacosX 10.6.2<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 08:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0002.php">Sanket: "[hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/09/0000.php">Jeff Squyres: "[hwloc-users] libtopology tarballs posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I discussed directly with Emmanuel, here is the result.
<br>
<p>Emmanuel Jeannot, le Mon 16 Nov 2009 14:57:32 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; 	This is probably a fink bug but maybe the configure script should detect it: 
</span><br>
<p><span class="quotelev1">&gt; checking for XML... yes
</span><br>
<p>Here ./configure asked pkg-config which libxml2 to use, and it answered
<br>
the one from /sw/lib
<br>
<p><span class="quotelev1">&gt; ld: warning: in /sw/lib/libxml2.dylib, file is not of required architecture
</span><br>
<p>But that's not something that can be used for compilations...
<br>
<p>Apparently fink happily installs a mixture of 32 and 64bit libraries,
<br>
including their .pc files...
<br>
<p>That means that after PKG_CHECK_MODULES() we'd have to check whether gcc
<br>
can really use the result, to fix fink's bug...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0002.php">Sanket: "[hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/09/0000.php">Jeff Squyres: "[hwloc-users] libtopology tarballs posted"</a>
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
