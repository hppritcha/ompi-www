<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2013/10/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2014/04/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">1 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>Kelly Black</strong>
<ul><li><a href="0207.php">Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun</a>&nbsp;<a name="207"><em>(2014-02-04 16:39:22)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-03-29 09:20:51</em></td>
<th>Archived on: </th><td><em>2016-03-29 09:20:52 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2013/10/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2014/04/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<!-- trailer="footer" -->
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>
