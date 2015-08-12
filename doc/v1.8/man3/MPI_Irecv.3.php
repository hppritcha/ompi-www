<?php
$topdir = "../../..";
$title = "MPI_Irecv(3) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: MPI_IRECV(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Irecv</b> - Starts a standard-mode, nonblocking receive.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C
Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Irecv(void *buf, int count, MPI_Datatype datatype,
        int source, int tag, MPI_Comm comm, MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_IRECV(BUF, COUNT, DATATYPE, SOURCE, TAG, COMM, REQUEST,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;BUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, SOURCE, TAG, COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
Request Comm::Irecv(void* buf, int count, const Datatype&amp;
<tt> </tt>&nbsp;<tt> </tt>&nbsp;datatype, int source, int tag) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>buf </dt>
<dd>Initial address of receive buffer (choice). </dd>

<dt>count </dt>
<dd>Number
of elements in receive buffer (integer). </dd>

<dt>datatype </dt>
<dd>Datatype of each receive
buffer element (handle). </dd>

<dt>source </dt>
<dd>Rank of source (integer). </dd>

<dt>tag </dt>
<dd>Message tag
(integer). </dd>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>request </dt>
<dd>Communication
request (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
Nonblocking
calls allocate a communication request object and associate it with the
request handle (the argument request). The request can be used later to
query the status of the communication or wait for its completion.  <p>
A nonblocking
receive call indicates that the system may start writing data into the
receive buffer. The receiver should not access any part of the receive buffer
after a nonblocking receive operation is called, until the receive completes.
<p>
A receive request can be determined being completed by calling the <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>,
<a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>, <a href="../man3/MPI_Test.3.php">MPI_Test</a>, or <a href="../man3/MPI_Testany.3.php">MPI_Testany</a> with request returned by this function.

<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. C++ functions
do not return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<a href="../man3/MPI_Recv.3.php">MPI_Recv</a> <a href="../man3/MPI_Probe.3.php">MPI_Probe</a> <a href="../man3/MPI_Test.3.php">MPI_Test</a> <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
<a href="../man3/MPI_Wait.3.php">MPI_Wait</a> <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a> <br>

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
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
