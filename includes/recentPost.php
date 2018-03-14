<div class="recent-post widget">
    <h3>Recent Posts</h3>

<?php
$blog = $connection->query("SELECT * FROM blog ORDER BY blog_id DESC LIMIT $page_1, 7");

$blogs = $blog->fetchALL(PDO::FETCH_OBJ);

foreach ($blogs as $blog) {
  $id = $blog->blog_id;
  $title = $blog->blog_title;
  $date = $blog->blog_date;

?>

    <ul class="none">
        <li class="none">
            <a href="i_blog.php?b_id=<?php echo $id; ?>"><?php echo $title?></a><br>
            <time><?php echo date("d-m-Y", strtotime($date)); ?></time>
        </li>
    </ul>

  <?php } ?>

</div>
