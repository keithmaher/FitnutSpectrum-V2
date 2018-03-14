<?php
if(isset($_GET['b_id'])){
  $edit_blog_id = $_GET['b_id'];
}

$blog = $connection->query("SELECT * FROM blog WHERE blog_id = $edit_blog_id");

$blogs = $blog->fetchALL(PDO::FETCH_OBJ);

foreach ($blogs as $blog){
$blog_id = $blog->blog_id;
$blog_title = $blog->blog_title;
$blog_author = $blog->blog_author;
$blog_date = $blog->blog_date;
$blog_image = $blog->blog_image;
$blog_content = $blog->blog_content;
$blog_tags = $blog->blog_tags;
$blog_comment_count = $blog->blog_comment_count;
$blog_status = $blog->blog_status;


}

if(isset($_POST['edit_blog'])){
    $blog_title = $_POST['title'];
    $blog_author = $_POST['author'];
    $blog_date = date('d-m-Y');
    $blog_image = $_FILES['image']['name'];
    $blog_image_tmp = $_FILES['image']['tmp_name'];
    $blog_content = ($_POST['content']);
    $blog_tags = $_POST['tags'];
    move_uploaded_file($blog_image_tmp, "../images/blog/$blog_image");

    if(empty($blog_image)){
        $select_image = $connection->query("SELECT * FROM blog WHERE blog_id = $edit_blog_id");
        $images = $select_image->fetchAll(PDO::FETCH_OBJ);
        foreach($images as $select_image){
            $blog_image = $select_image->blog_image;
        }
    }

    $query = $connection->prepare("UPDATE blog SET blog_title = :title, blog_author = :author, blog_image = :image, blog_content = :content, blog_tags = :tags WHERE blog_id = $edit_blog_id");
    $query->execute([
      'title' => $blog_title,
      'author' => $blog_author,
      'image' => $blog_image,
      'content' => $blog_content,
      'tags' =>   $blog_tags,
    ]);

    if(!$query){
        die("QUERY FAILED");
    }else{
        header ("Location: blog.php");
    }

}

?>




<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    Edit Blog
</h1>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">Blog Title</label>
<input value="<?php echo $blog_title; ?>" type="text" class="form-control" name="title">
</div>

<div class="form-group">
<label for="author">Blog Author</label>
<input value="<?php echo $blog_author; ?>" type="text" class="form-control" name="author">
</div>

<div class="form-group">
<label for="image">Post image</label>
<input type="file" name="image"> <br><img class="img-responsive" width="200" src="../images/blog/<?php echo $blog_image; ?>"
    </input>

</div>

<div class="form-group">
<label for="content">Post Content</label>
<textarea class="form-control" name="content" cols="30" rows="10"><?php echo $blog_content; ?>"</textarea>
</div>

<div class="form-group">
<label for="tags">Post Tags</label>
<input value="<?php echo $blog_tags; ?>" type="text" name="tags" class="form-control"></input>
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="edit_blog" value="Edit Blog">
</div>
</form>
