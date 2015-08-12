<?php
$topdir = "../../..";
$title = "MPI_Dist_graph_neighbors(3) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: MPI_DIST_GRAPH_NEIGHBORS(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Dist_graph_neighbors </b> - Returns the neighbors of the calling
process in a distributed graph topology.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Dist_graph_neighbors(MPI_Comm comm, int maxindegree, int sources[],
int sourceweights[],
                             int maxoutdegree, int destinations[], int
destweights[])
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_DIST_GRAPH_NEIGHBORS(COMM, MAXINDEGREE, SOURCES, SOURCEWEIGHTS,
        MAXOUTDEGREE, DESTINATIONS, DESTWEIGHTS, IERROR)
        INTEGER COMM, MAXINDEGREE, SOURCES(*), SOURCEWEIGHTS(*), MAXOUTDEGREE,
                DESTINATIONS(*), DESTWEIGHTS(*), IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>comm </dt>
<dd>Communicator with distributed graph topology (handle).
</dd>

<dt>maxindegree </dt>
<dd>Size of <i>sources</i> and <i>sourceweights</i> arrays (non-negative integer).
</dd>

<dt>maxoutdegree </dt>
<dd>Size of <i>destinations</i> and <i>destweights</i> arrays (non-negative integer).

<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>sources </dt>
<dd>Processes for which the calling process is a
destination (array of non-negative integers). </dd>

<dt>sourceweights </dt>
<dd>Weights of the
edges into the calling process (array of non-negative integers). </dd>

<dt>destinations
</dt>
<dd>Processes for which the calling process is a source (array of non-negative
integers). </dd>

<dt>destweights </dt>
<dd>Weights of the edges out of the calling process (array
of non-negative integers). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
MPI_Dist_graph_neighbors
returns the source and destination ranks in a distributed graph topology
for the calling process. This call will return up to <i>maxindegree</i> source
ranks in the <i>sources</i> array and up to <i>maxoutdegree</i> destination ranks in
the <i>destinations</i> array. If weights were specified at the time of the communicator&rsquo;s
creation then the associated weights are returned in the <i>sourceweights</i>
and <i> destweights</i> arrays. If the communicator was created with <a href="../man3/MPI_Dist_graph_create_adjacent.3.php">MPI_Dist_graph_create_adjacent</a>
then the order of the values in <i>sources</i> and <i>destinations</i> is identical to
the input that was used by the process with the same rank in comm_old in
the creation call.
<p> </pre>
<h2><a name='sect7' href='#toc7'>Errors</a></h2>
Almost all MPI routines return an error value;
C routines as the value of the function and Fortran routines in the last
argument. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<h2><a name='sect8' href='#toc8'>See Also</a></h2>
<p>
<a href="../man3/MPI_Dist_graph_neighbors_count.3.php">MPI_Dist_graph_neighbors_count</a>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameters</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Errors</a></li>
<li><a name='toc8' href='#sect8'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
