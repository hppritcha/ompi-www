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
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2012/03/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2012/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">4 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2006-02-11 10:54:01</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[MTT users] Request for database access</strong>
<ul><li><a href="0756.php">Jeff Squyres</a> <a name="756"><em>(2012-08-16 18:57:40)</em></a></li></ul>
<ul><li><a href="0755.php">Ralph Castain</a> <a name="755"><em>(2012-08-16 18:20:11)</em></a></li></ul>
<ul><li><a href="0754.php">Jeff Squyres</a> <a name="754"><em>(2012-08-16 18:10:57)</em></a></li></ul>
<ul><li><a href="0753.php">Ralph Castain</a> <a name="753"><em>(2012-08-16 17:57:47)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:36</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:01:41 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2012/03/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2012/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
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
