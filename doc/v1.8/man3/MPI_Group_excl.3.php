<?php
$topdir = "../../..";
$title = "MPI_Group_excl(3) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: MPI_GROUP_EXCL(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Group_excl</b> - Produces a group by reordering an existing group
and taking only unlisted members.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Group_excl(MPI_Group group, int n, const int ranks[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Group *newgroup)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_GROUP_EXCL(GROUP, N, RANKS, NEWGROUP, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;GROUP, N, RANKS(*), NEWGROUP, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
Group Group::Excl(int n, const int ranks[]) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>group </dt>
<dd>Group (handle). </dd>

<dt>n </dt>
<dd>Number of elements in array ranks
(integer). </dd>

<dt>ranks </dt>
<dd>Array of integer ranks in group not to appear in newgroup.

<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newgroup </dt>
<dd>New group derived from above, preserving the
order defined by group (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).

<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
The function MPI_Group_excl creates a group of processes newgroup
that is obtained by deleting from group those processes with ranks ranks[0],
... ranks[n-1]. The ordering of processes in newgroup is identical to the ordering
in group. Each of the n elements of ranks must be a valid rank in group
and all elements must be distinct; otherwise, the call is erroneous. If
n = 0, then newgroup is identical to group.
<p>
<h2><a name='sect8' href='#toc8'>Note</a></h2>
Currently, each of the
ranks to exclude must be a valid rank in the group and all elements must
be distinct or the function is erroneous. This restriction is per the draft.

<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
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
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Group_range_excl.3.php">MPI_Group_range_excl</a> <br>

<p><a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>
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
<li><a name='toc8' href='#sect8'>Note</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
