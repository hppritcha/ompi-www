<?php
$topdir = "../../..";
$title = "MPI_Get_elements(3) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: MPI_GET_ELEMENTS(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Get_elements, <a href="../man3/MPI_Get_elements_x.3.php">MPI_Get_elements_x</a></b> - Returns the number of basic
elements in a data type.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Get_elements(const MPI_Status *status, MPI_Datatype datatype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int *count)
int <a href="../man3/MPI_Get_elements_x.3.php">MPI_Get_elements_x</a>(const MPI_Status *status, MPI_Datatype datatype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Count *count)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_GET_ELEMENTS(STATUS, DATATYPE, COUNT, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;STATUS(MPI_STATUS_SIZE), DATATYPE, COUNT, IERROR
<a href="../man3/MPI_Get_elements_x.3.php">MPI_GET_ELEMENTS_X</a>(STATUS, DATATYPE, COUNT, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;STATUS(MPI_STATUS_SIZE), DATATYPE
        INTEGER(KIND=MPI_COUNT_KIND) COUNT
        INTEGER IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int Status::Get_elements(const Datatype&amp; datatype) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>status </dt>
<dd>Return status of receive operation (status). </dd>

<dt>datatype
</dt>
<dd>Datatype used by receive operation (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>
count
 Number of received basic elements (integer).
<dl>

<dt>IERROR </dt>
<dd>Fortran only: Error
status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Get_elements and <a href="../man3/MPI_Get_elements_x.3.php">MPI_Get_elements_x</a> behave
different from <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>, which returns the number of "top-level entries"
received, i.e., the number of "copies" of type datatype. <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> may
return any integer value k, where 0 =&lt; k =&lt; count. If <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> returns
k, then the number of basic elements received (and the value returned by
MPI_Get_elements and <a href="../man3/MPI_Get_elements_x.3.php">MPI_Get_elements_x</a>) is n * k, where n is the number
of basic elements in the type map of datatype. If the number of basic elements
received is not a multiple of n, that is, if the receive operation has
not received an integral number of datatype "copies," then <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>
returns the value MPI_UNDEFINED. For both functions, if the <i>count</i> parameter
cannot express the value to be returned (e.g., if the parameter is too small
to hold the output value), it is set to MPI_UNDEFINED. <p>
<b>Example:</b> Usage of
<a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> and MPI_Get_element:   <p>
<br>
<pre>  ...
  CALL <a href="../man3/MPI_Type_contiguous.3.php">MPI_TYPE_CONTIGUOUS</a>(2, MPI_REAL, Type2, ierr)
  CALL <a href="../man3/MPI_Type_commit.3.php">MPI_TYPE_COMMIT</a>(Type2, ierr)
  ...
  CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr)
  IF(rank.EQ.0) THEN
        CALL <a href="../man3/MPI_Send.3.php">MPI_SEND</a>(a, 2, MPI_REAL, 1, 0, comm, ierr)
        CALL <a href="../man3/MPI_Send.3.php">MPI_SEND</a>(a, 3, MPI_REAL, 1, 0, comm, ierr)
  ELSE
        CALL <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(a, 2, Type2, 0, 0, comm, stat, ierr)
        CALL <a href="../man3/MPI_Get_count.3.php">MPI_GET_COUNT</a>(stat, Type2, i, ierr)     ! returns i=1
        CALL MPI_GET_ELEMENTS(stat, Type2, i, ierr)  ! returns i=2
        CALL <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(a, 2, Type2, 0, 0, comm, stat, ierr)
        CALL <a href="../man3/MPI_Get_count.3.php">MPI_GET_COUNT</a>(stat, Type2, i, ierr) ! returns i=MPI_UNDEFINED
        CALL MPI_GET_ELEMENTS(stat, Type2, i, ierr)  ! returns i=3
  END IF
</pre><p>
The function MPI_Get_elements can also be used after a probe to find the
number of elements in the probed message. Note that the two functions <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>
and MPI_Get_elements return the same values when they are used with primitive
data types.    <br>

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
<h2><a name='sect9' href='#toc9'>Fortran 77 Notes</a></h2>
The MPI standard prescribes
portable Fortran syntax for the <i>COUNT</i> argument of <a href="../man3/MPI_Get_elements_x.3.php">MPI_Get_elements_x</a> only
for Fortran 90. FORTRAN 77 users may use the non-portable syntax <p>
<br>
<pre>     INTEGER*MPI_COUNT_KIND COUNT
</pre><p>
where MPI_COUNT_KIND is a constant defined in mpif.h and gives the length
of the declared integer in bytes.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>
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
<li><a name='toc9' href='#sect9'>Fortran 77 Notes</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
