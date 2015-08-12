<?php
$topdir = "../../..";
$title = "MPI_Ineighbor_alltoallv(3) man page (version 1.8.8)";
$meta_desc = "Open MPI v1.8.8 man page: MPI_INEIGHBOR_ALLTOALLV(3)";

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
<b><a href="../man3/MPI_Neighbor_alltoallv.3.php">MPI_Neighbor_alltoallv</a>, MPI_Ineighbor_alltoallv</b> - All processes
send different amounts of data to, and receive different amounts of data
from, all neighbors
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int <a href="../man3/MPI_Neighbor_alltoallv.3.php">MPI_Neighbor_alltoallv</a>(const void *sendbuf, const int sendcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int sdispls]P, MPI_Datatype sendtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void *recvbuf, const int recvcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int rdispls[], MPI_Datatype recvtype, MPI_Comm comm)
int MPI_Ineighbor_alltoallv(const void *sendbuf, const int sendcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int sdispls]P, MPI_Datatype sendtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void *recvbuf, const int recvcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int rdispls[], MPI_Datatype recvtype, MPI_Comm comm,
        MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
<a href="../man3/MPI_Neighbor_alltoallv.3.php">MPI_NEIGHBOR_ALLTOALLV</a>(SENDBUF, SENDCOUNTS, SDISPLS, SENDTYPE,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVBUF, RECVCOUNTS, RDISPLS, RECVTYPE, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNTS(*), SDISPLS(*), SENDTYPE
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVCOUNTS(*), RDISPLS(*), RECVTYPE
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, IERROR
MPI_INEIGHBOR_ALLTOALLV(SENDBUF, SENDCOUNTS, SDISPLS, SENDTYPE,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVBUF, RECVCOUNTS, RDISPLS, RECVTYPE, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNTS(*), SDISPLS(*), SENDTYPE
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVCOUNTS(*), RDISPLS(*), RECVTYPE
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Starting address of send buffer. </dd>

<dt>sendcounts </dt>
<dd>Integer
array, where entry i specifies the number of elements to send to neighbor
i. </dd>

<dt>sdispls </dt>
<dd>Integer array, where entry i specifies the displacement (offset
from <i>sendbuf</i>, in units of <i>sendtype</i>) from which to send data to neighbor
i. </dd>

<dt>sendtype </dt>
<dd>Datatype of send buffer elements. </dd>

<dt>recvcounts </dt>
<dd>Integer array, where
entry j specifies the number of elements to receive from neighbor j. </dd>

<dt>rdispls
</dt>
<dd>Integer array, where entry j specifies the displacement (offset from <i>recvbuf</i>,
in units of <i>recvtype</i>) to which data from neighbor j should be written. </dd>

<dt>recvtype
</dt>
<dd>Datatype of receive buffer elements. </dd>

<dt>comm </dt>
<dd>Communicator over which data is
to be exchanged.
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>recvbuf </dt>
<dd>Address of receive buffer. </dd>

<dt>request
</dt>
<dd>Request (handle, non-blocking only). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status.
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
<a href="../man3/MPI_Neighbor_alltoallv.3.php">MPI_Neighbor_alltoallv</a>
is a generalized collective operation in which all processes send data
to and receive data from all neighbors. It adds flexibility to <a href="../man3/MPI_Neighbor_alltoall.3.php">MPI_Neighbor_alltoall</a>
by allowing the user to specify data to send and receive vector-style (via
a displacement and element count). The operation of this routine can be
thought of as follows, where each process performs 2n (n being the number
of neighbors in to topology of communicator <i>comm</i>) independent point-to-point
communications. The neighbors and buffer layout are determined by the topology
of <i>comm</i>. <p>
<br>
<pre>        <a href="../man3/MPI_Cart_get.3.php">MPI_Cart_get</a>(comm, maxdims, dims, periods, coords);
        for (dim = 0, i = 0 ; dim &lt; dims ; ++dim) {
            <a href="../man3/MPI_Cart_shift.3.php">MPI_Cart_shift</a>(comm, dim, 1, &amp;r0, &amp;r1);
            <a href="../man3/MPI_Isend.3.php">MPI_Isend</a>(sendbuf + sdispls[i]  * extent(sendtype),
                      sendcount, sendtype, r0, ..., comm, ...);
            <a href="../man3/MPI_Irecv.3.php">MPI_Irecv</a>(recvbuf + rdispls[i] * extent(recvtype),
                      recvcount, recvtype, r0, ..., comm, ...);
            ++i;
            <a href="../man3/MPI_Isend.3.php">MPI_Isend</a>(sendbuf + sdispls[i] * extent(sendtype),
                      sendcount, sendtype, r1, ..., comm, &amp;req[i]);
            <a href="../man3/MPI_Irecv.3.php">MPI_Irecv</a>(recvbuf + rdispls[i] * extent(recvtype),
                      recvcount, recvtype, r1, ..., comm, ...);
            ++i;
        }
</pre><p>
Process j sends the k-th block of its local <i>sendbuf</i> to neighbor k, which
places the data in the j-th block of its local <i>recvbuf</i>. <p>
When a pair of processes
exchanges data, each may pass different element count and datatype arguments
so long as the sender specifies the same amount of data to send (in bytes)
as the receiver expects to receive. <p>
Note that process i may send a different
amount of data to process j than it receives from process j. Also, a process
may send entirely different amounts of data to different processes in the
communicator.
<p> <p>

<h2><a name='sect7' href='#toc7'>Neighbor Ordering</a></h2>
For a distributed graph topology, created
with <a href="../man3/MPI_Dist_graph_create.3.php">MPI_Dist_graph_create</a>, the sequence of neighbors in the send and receive
buffers at each process is defined as the sequence returned by <a href="../man3/MPI_Dist_graph_neighbors.3.php">MPI_Dist_graph_neighbors</a>
for destinations and sources, respectively. For a general graph topology,
created with <a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>, the order of neighbors in the send and receive
buffers is defined as the sequence of neighbors as returned by <a href="../man3/MPI_Graph_neighbors.3.php">MPI_Graph_neighbors</a>.
Note that general graph topologies should generally be replaced by the
distributed graph topologies.
<p> For a Cartesian topology, created with <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>,
the sequence of neighbors in the send and receive buffers at each process
is defined by order of the dimensions, first the neighbor in the negative
direction and then in the positive direction with displacement 1. The numbers
of sources and destinations in the communication routines are 2*ndims with
ndims defined in <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>. If a neighbor does not exist, i.e., at the
border of a Cartesian topology in the case of a non-periodic virtual grid
dimension (i.e., periods[...]==false), then this neighbor is defined to be MPI_PROC_NULL.

<p> If a neighbor in any of the functions is MPI_PROC_NULL, then the neighborhood
collective communication behaves like a point-to-point communication with
MPI_PROC_NULL in this direction. That is, the buffer is still part of the
sequence of neighbors but it is neither communicated nor updated.
<p> <p>

<h2><a name='sect8' href='#toc8'>Notes</a></h2>
The
MPI_IN_PLACE option for <i>sendbuf</i> is not meaningful for this operation. <p>
The
specification of counts and displacements should not cause any location
to be written more than once. <p>
All arguments on all processes are significant.
The <i>comm</i> argument, in particular, must describe the same communicator on
all processes. <p>
The offsets of <i>sdispls</i> and <i>rdispls</i> are measured in units
of <i>sendtype</i> and <i>recvtype</i>, respectively. Compare this to <a href="../man3/MPI_Neighbor_alltoallw.3.php">MPI_Neighbor_alltoallw</a>,
where these offsets are measured in bytes.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines
return an error value; C routines as the value of the function and Fortran
routines in the last argument. <p>
Before the error value is returned, the current
MPI error handler is called. By default, this error handler aborts the MPI
job, except for I/O function errors. The error handler may be changed with
<a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
may be used to cause error values to be returned. Note that MPI does not
guarantee that an MPI program can continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Neighbor_alltoall.3.php">MPI_Neighbor_alltoall</a>
<a href="../man3/MPI_Neighbor_alltoallw.3.php">MPI_Neighbor_alltoallw</a>
<a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>
<a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>
<a href="../man3/MPI_Dist_graph_create.3.php">MPI_Dist_graph_create</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
