<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    Add Blog
</h1>


<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">Blog Title</label>
<input type="text" class="form-control" name="title">
</div>

<div class="form-group">
<label for="author">Blog Author</label>
<input type="text" class="form-control" name="author">
</div>

<div class="form-group">
<label for="image">Post image</label>
<input type="file" name="image">
</div>

<div class="form-group">
<label for="content">Post Content</label>
<textarea class="form-control" name="content" cols="30" rows="10"></textarea>
</div>

<div class="form-group">
<label for="tags">Post Tags</label>
<input type="text" name="tags" class="form-control"></input>
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="create_blog" value="Publish">
</div>
</form>



<?php
if(isset($_POST['create_blog'])){

    $blog_title = $_POST['title'];
    $blog_author = $_POST['author'];
    $blog_date = $_POST['date'];
    $blog_image = $_FILES['image']['name'];
    $blog_image_tmp = $_FILES['image']['tmp_name'];
    $blog_content = ($_POST['content']);
    $blog_tags = $_POST['tags'];

    move_uploaded_file($blog_image_tmp, "../images/blog/$blog_image");

    $add = $connection->prepare("INSERT INTO blog(blog_title, blog_author, blog_date, blog_image, blog_content, blog_tags) VALUES (:title, :author, now(), :image, :content, :tags)");

    $addExe = $add->execute([
      'title'=> $blog_title,
      'author'=> $blog_author,
      'image'=> $blog_image,
      'content'=> $blog_content,
      'tags'=> $blog_tags,
    ]);

    if(!$addExe){
        die("QUERY FAILED");
    }else{
        header ("Location: blog.php");
    }

}

?>
