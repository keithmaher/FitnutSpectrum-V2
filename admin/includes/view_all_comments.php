<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    View Comments
</h1>


<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Author</th>
<th>Date</th>
<th>Content</th>
<th>In Response To</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

<?php
$comment = $connection->query("SELECT * FROM comments ORDER BY comment_id DESC");

$comments = $comment->fetchAll(PDO::FETCH_OBJ);
foreach($comments as $comment){
$comment_id = $comment->comment_id;
$comment_post_id = $comment->comment_post_id;
$comment_author = $comment->comment_author;
$comment_date = $comment->comment_date;
$comment_content = $comment->comment_content;
$sub = substr($comment_content,0,100);


echo "<tr>";
echo "<td>$comment_id</td>";
echo "<td>$comment_author</td>";
echo "<td>". date("d.m.Y", strtotime($comment_date))."</td>";
echo "<td class='content'>$sub</td>";
    $query = $connection->query("SELECT * FROM blog WHERE blog_id = $comment_post_id");
    $querys = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($querys as $query){
        $blog_id = $query->blog_id;
        $blog_title = $query->blog_title;
        echo "<td><a href='../i_blog.php?b_id=$blog_id'>$blog_title</a></td>";
    }
echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
echo "</tr>";

}
?>

</tbody>
</table>
</div>
<?php
    if(isset($_GET['delete'])){

    $delete_id = $_GET['delete'];
    $query = $connection->query("DELETE FROM comments WHERE comment_id = $delete_id");
    header("Location: comments.php");
    }


?>
