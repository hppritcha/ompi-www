<?php
$topdir = "../../..";
$title = "MPI_Iexscan(3) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: MPI_IEXSCAN(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<p>
<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b><a href="../man3/MPI_Exscan.3.php">MPI_Exscan</a>, MPI_Iexscan</b> - Computes an exclusive scan (partial
reduction)
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int <a href="../man3/MPI_Exscan.3.php">MPI_Exscan</a>(const void *sendbuf, void *recvbuf, int count,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype datatype, MPI_Op op, MPI_Comm comm)
int MPI_Iexscan(const void *sendbuf, void *recvbuf, int count,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype datatype, MPI_Op op, MPI_Comm comm,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
<a href="../man3/MPI_Exscan.3.php">MPI_EXSCAN</a>(SENDBUF, RECVBUF, COUNT, DATATYPE, OP, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, OP, COMM, IERROR
MPI_IEXSCAN(SENDBUF, RECVBUF, COUNT, DATATYPE, OP, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, OP, COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Intracomm::Exscan(const void* sendbuf, void* recvbuf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int count, const MPI::Datatype&amp; datatype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI::Op&amp; op) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Send buffer (choice). </dd>

<dt>count </dt>
<dd>Number of elements in
input buffer (integer). </dd>

<dt>datatype </dt>
<dd>Data type of elements of input buffer (handle).
</dd>

<dt>op </dt>
<dd>Operation (handle). </dd>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>recvbuf
</dt>
<dd>Receive buffer (choice). </dd>

<dt>request </dt>
<dd>Request (handle, non-blocking only). </dd>

<dt>IERROR
</dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
<a href="../man3/MPI_Exscan.3.php">MPI_Exscan</a> is used to
perform an exclusive prefix reduction on data distributed across the calling
processes. The operation returns, in the <i>recvbuf</i> of the process with rank
i, the reduction (calculated according to the function <i>op</i>) of the values
in the <i>sendbuf</i>s of processes with ranks 0, ..., i-1. Compare this with the functionality
of <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>, which calculates over the range 0, ..., i (inclusive). The type
of operations supported, their semantics, and the constraints on send and
receive buffers are as for <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>. <p>
The value in <i>recvbuf</i> on process 0
is undefined and unreliable as <i>recvbuf</i> is not significant for process 0.
The value of <i>recvbuf</i> on process 1 is always the value in <i>sendbuf</i> on process
0. <p>
No MPI_IN_PLACE operation is supported.
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
MPI does not specify which
process computes which operation. In particular, both processes 0 and 1
may participate in the computation even though the results for both processes&rsquo;
<i>recvbuf</i> are degenerate. Therefore, all processes, including 0 and 1, must
provide the same <i>op</i>. <p>
It can be argued, from a mathematical perspective,
that the definition of <a href="../man3/MPI_Exscan.3.php">MPI_Exscan</a> is unsatisfactory because the output
at process 0 is undefined.  The "mathematically correct" output for process
0 would be the unit element of the reduction operation. However, such a
definition of an exclusive scan would not work with user-defined <i>op</i> functions
as there is no way for MPI to "know" the unit value for these custom operations.

<p>
<h2><a name='sect9' href='#toc9'>Notes on Collective Operations</a></h2>
The reduction functions of type MPI_Op do
not return an error value. As a result, if the functions detect an error,
all they can do is either call <a href="../man3/MPI_Abort.3.php">MPI_Abort</a> or silently skip the problem. Thus,
if the error handler is changed from MPI_ERRORS_ARE_FATAL to something
else (e.g., MPI_ERRORS_RETURN), then no error may be indicated. <p>
The reason
for this is the performance problems in ensuring that all collective routines
return the same error value.
<p>
<h2><a name='sect10' href='#toc10'>Errors</a></h2>
Almost all MPI routines return an error
value; C routines as the value of the function and Fortran routines in
the last argument. C++ functions do not return errors. If the default error
handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception
mechanism will be used to throw an MPI::Exception object. <p>
Before the error
value is returned, the current MPI error handler is called. By default,
this error handler aborts the MPI job, except for I/O function errors. The
error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined
error handler MPI_ERRORS_RETURN may be used to cause error values to be
returned. Note that MPI does not guarantee that an MPI program can continue
past an error.  <p>
See the MPI man page for a full list of MPI error codes.

<p>
<h2><a name='sect11' href='#toc11'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a>
<a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>
<a href="../man3/MPI_Scan.3.php">MPI_Scan</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
