<?php
$topdir = "../../..";
$title = "MPI_Get_address(3) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: MPI_GET_ADDRESS(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Get_address</b> - Gets the address of a location in memory.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C
Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Get_address(const void *location, MPI_Aint *address)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_GET_ADDRESS(LOCATION, ADDRESS, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt; LOCATION(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;ADDRESS, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
MPI::Aint MPI::Get_address(void* location)
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>location </dt>
<dd>Location in caller memory (choice).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>address
</dt>
<dd>Address of location (integer). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).

<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Get_address returns the byte address of a location in
memory. <p>
Example: Using MPI_Get_address for an array.  <p>
<br>
<pre>EAL A(100,100)
</pre><br>
   INTEGER I1, I2, DIFF <br>
 <br>
   CALL MPI_GET_ADDRESS(A(1,1), I1, IERROR) <br>
 <br>
   CALL MPI_GET_ADDRESS(A(10,10), I2, IERROR) <br>
 <br>
   DIFF = I2 - I1 <br>
 <br>
! The value of DIFF is 909*sizeofreal; the values of I1 and I2 are  <br>
! implementation dependent.  </pre>
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
Current Fortran MPI codes will run unmodified
and will port to any system. However, they may fail if addresses larger
than 2^32 - 1 are used in the program. New codes should be written so that
they use the new functions. This provides compatibility with C/C++ and avoids
errors on 64-bit architectures. However, such newly written codes may need
to be (slightly) rewritten to port to old Fortran 77 environments that
do not support KIND declarations.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI::Exception object.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
