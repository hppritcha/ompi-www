<?php
$topdir = "../../..";
$title = "orte_sstore(7) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: orte_sstore(7)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
        <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
 Open RTE MCA File Management (SStore) Framework - Overview
of Open RTE&rsquo;s SStore  framework, and selected modules.  Open MPI 1.8.8

<h2><a name='sect1' href='#toc1'>Description</a></h2>
 <p>
SStore is a utility framework used by OpenRTE for a variety
of purposes, including the transport of checkpoint files, preloading user
binaries, and preloading of user files.
<h2><a name='sect2' href='#toc2'>Available Components</a></h2>
<p>
The following
MCA parameters apply to all components:
<dl>

<dt>sstore_base_verbose </dt>
<dd>Set the verbosity
level for all components. Default is 0, or silent except on error.     </dd>
</dl>

<h3><a name='sect3' href='#toc3'>central
SStore Component</a></h3>
<p>
The <i>central</i> component implements a fully centralized stable
storage mechanism that requires a shared storage medium (e.g., NFS).  <p>
The
<i>central</i> component has the following MCA parameters:
<dl>

<dt>sstore_central_priority
</dt>
<dd>The component&rsquo;s priority to use when selecting the most appropriate component
for a run.  </dd>

<dt>sstore_central_verbose </dt>
<dd>Set the verbosity level for this component.
Default is 0, or silent except on error.      </dd>
</dl>

<h2><a name='sect4' href='#toc4'>See Also</a></h2>
  <i>orte-checkpoint(1)</i>,
<i>orte-restart(1)</i>, <i>opal-checkpoint(1)</i>, <i>opal-restart(1)</i>, <i>orte_snapc(7)</i>, <i>opal_crs(7)</i><br>
  <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Description</a></li>
<li><a name='toc2' href='#sect2'>Available Components</a></li>
<ul>
<li><a name='toc3' href='#sect3'>central SStore Component</a></li>
</ul>
<li><a name='toc4' href='#sect4'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
