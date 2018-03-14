<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    View Blogs
</h1>


<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Date</th>
<th>Image</th>
<th>Content</th>
<th>Tags</th>
<th>Comments</th>
<th>Edit</th>
<th>Delete</th>
<th>View</th>
</tr>
</thead>
<tbody>

<?php
$blog = $connection->query("SELECT * FROM blog ORDER BY blog_id DESC");

$blogs = $blog->fetchALL(PDO::FETCH_OBJ);

foreach ($blogs as $blog){
  $id = $blog->blog_id;
  $title = $blog->blog_title;
  $author = $blog->blog_author;
  $date = $blog->blog_date;
  $image = $blog->blog_image;
  $content = $blog->blog_content;
  $sub = substr($content,0,200);
  $tags = $blog->blog_tags;
  $comment_count = $blog->blog_comment_count;


echo "<tr>";
echo "<td>$id</td>";
echo "<td>$title</td>";
echo "<td>$author</td>";
echo "<td>". date("d.m.Y", strtotime($date))."</td>";
echo "<td><img src='../images/blog/$image' width='100'></td>";
echo "<td class='content'>$sub</td>";
echo "<td>$tags</td>";
echo "<td>$comment_count</td>";
echo "<td><a href='blog.php?source=edit_blog&b_id=$id'>Edit</a></td>";
echo "<td><a href='blog.php?delete=$id'>Delete</a></td>";
echo "<td><a href='../i_blog.php?b_id=$id'>View</a></td>";
echo "</tr>";

}
?>

</tbody>
</table>
</div>
<?php
if(isset($_GET['delete'])){

    $delete_id = $_GET['delete'];
    $delete = $connection->query("DELETE FROM blog WHERE blog_id = $delete_id");
    header ("Location: blog.php");

}











?>
