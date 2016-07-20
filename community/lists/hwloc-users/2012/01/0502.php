<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 12:02:35 2012" -->
<!-- isoreceived="20120112170235" -->
<!-- sent="Thu, 12 Jan 2012 18:02:30 +0100" -->
<!-- isosent="20120112170230" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="20120112170230.GA9306_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1551481460.337638.1326330718531.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 12:02:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0503.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0505.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Reply:</strong> <a href="0505.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Andrew Helwer, le Thu 12 Jan 2012 02:11:58 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; If I run the command manually, it can't find the libhwloc.def file. Which is reasonable, as it does not appear to exist in the .lib directory. Am I missing something?
</span><br>
<p>In principle the .def file is generated by the linker. Could you run
<br>
<p>make V=1
<br>
<p>to get the command lines, and check that HWLOC_HAVE_WINDOWS is 1 in
<br>
<p>./include/hwloc/autogen/config.h
<br>
<p>? At worse, I believe you can just copy the libhwloc.def contained
<br>
in the 32bit build of the exact same version of hwloc, it should be
<br>
compatible.
<br>
<p>Thanks,
<br>
Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0503.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0501.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0505.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Reply:</strong> <a href="0505.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
