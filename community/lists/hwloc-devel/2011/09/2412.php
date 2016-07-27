<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 09:54:50 2011" -->
<!-- isoreceived="20110913135450" -->
<!-- sent="Tue, 13 Sep 2011 21:54:37 +0800" -->
<!-- isosent="20110913135437" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E6F609D.8060004_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E6F5FF7.7030101_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPU Model and type<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 09:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/09/2011 21:51, TERRY DONTJE a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/13/2011 9:23 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 12/09/2011 21:01, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 09/09/2011 13:25, TERRY DONTJE a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 9/8/2011 3:10 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Indeed there's nothing like this as of today. We talked about it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the past but it's not very easy to implement on Linux (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; below) so we forgot about it until somebody complained.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Adding infos would certainly be fine. I think it should rather be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;CPUType&quot; and &quot;CPUModel&quot; since existing infos have no underscore
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in their name if I remember correctly. You could also set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; object-&gt;name to a combination of type and model. Socket looks like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the right object to put this. Maybe even use &quot;Model&quot; and &quot;Type&quot; as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the info names then?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The reason it's not easy on Linux is that we usually take infos
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from either sysfs, or /proc/cpuinfo if sysfs isn't available, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not from both. Processor names are only in /proc/cpuinfo IIRC. So
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we'd need to mix sysfs and /proc/cpuinfo. Not easy with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; current code, especially if you can't assume that all sockets are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; similar. But definitely something that I will do at some point.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The way info objects would be attached to a Socket object I assume
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it would be ok to just attach such an object under Solaris but not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not for the other OSes.  Since one can look for the named object
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and it is either going to be there or not :-).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyway, I'll play around with this for Solaris.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at the code, you might want to drop hwloc_setup_level() and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy it back into the caller. It will make the addition of info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attributes much easier. I am looking at the Linux side.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just pushed some code that will make this much easier on Linux (I
</span><br>
<span class="quotelev2">&gt;&gt; may change the Solaris code similarly when I'll take time to test on
</span><br>
<span class="quotelev2">&gt;&gt; a real solaris machine).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I have a patch that reads the CPU vendor and model in
</span><br>
<span class="quotelev2">&gt;&gt; /proc/cpuinfo (x86 only for now) and use them to set Socket info
</span><br>
<span class="quotelev2">&gt;&gt; attributes (CPUVendor and CPUModel) and name (CPUVendor+CPUModel).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before I push this, we need to clarify what we want. You were talking
</span><br>
<span class="quotelev2">&gt;&gt; about &quot;CPUType&quot; and &quot;CPUModel&quot;. Can you give some example of what it
</span><br>
<span class="quotelev2">&gt;&gt; would look like under Solaris? I want to compare to what I can get on
</span><br>
<span class="quotelev2">&gt;&gt; Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Both type and model are character strings.  An example of what I
</span><br>
<span class="quotelev1">&gt; currently store in the sysinfo structures are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; type = &quot;SPARC&quot;
</span><br>
<span class="quotelev1">&gt; model = &quot;SPARC64_VI&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other values for model are &quot;T1&quot;, &quot;T2&quot;, &quot;SPARC64_VII&quot;...
</span><br>
<p>What about Solaris on non-sparc machines ?
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
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
