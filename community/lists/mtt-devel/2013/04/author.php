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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/03/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/08/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-08-23 12:36:03</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>Jeff Squyres (jsquyres)</strong>
<ul><li><a href="0610.php">Re: [MTT devel] MTT feature request</a>&nbsp;<a name="610"><em>(2013-04-11 06:05:50)</em></a></li></ul>
<li><strong>Thomas Naughton</strong>
<ul><li><a href="0611.php">Re: [MTT devel] MTT feature request</a>&nbsp;<a name="611"><em>(2013-04-11 09:36:03)</em></a></li></ul>
<ul><li><a href="0609.php">Re: [MTT devel] MTT feature request</a>&nbsp;<a name="609"><em>(2013-04-10 11:18:39)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:36</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:01:40 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/03/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/08/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
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
