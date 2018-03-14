<!DOCTYPE html>
<?php ob_start(); ?>
<?php include "includes/database.php"; ?>
<html class="no-js">

        <!--
        ==================================================
        Head Section Start
        ================================================== -->
        <?php include "includes/head.php"; ?>


        <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <?php include "includes/navigation.php"; ?>

        <?php

        if(isset($_GET['b_id'])){
        $blog_select_id = $_GET['b_id'];
        }

        $blog = $connection->query("SELECT * FROM blog WHERE blog_id = $blog_select_id");

        $blogs = $blog->fetchALL(PDO::FETCH_OBJ);

        foreach ($blogs as $blog) {
          $id = $blog->blog_id;
          $title = $blog->blog_title;
          $author = $blog->blog_author;
          $date = $blog->blog_date;
          $image = $blog->blog_image;
          $content = $blog->blog_content;

        ?>


        <!--
        ==================================================
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2><?php echo $title?></h2>
                            <ol class="breadcrumb" style="color:#333;">
                                <li><?php echo date("d-m-Y", strtotime($date)); ?></li>
                                <li><?php echo $author; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#Page header-->


        <section class="single-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-img">
                            <img class="img-responsive" alt="" src="images/blog/<?php echo $image; ?>">
                        </div>
                        <div class="post-content">
                          <?php echo $content ?>
                        </div>


<? } ?>

<hr>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="comments">

                  <?php
                  if(isset($_POST['create_comment'])){

                  $id = $_GET['b_id'];
                  $author = $_POST['comment_name'];
                  $content = $_POST['comment_content'];

                  $commentInsert = $connection->prepare("INSERT INTO comments (comment_post_id, comment_author, comment_content, comment_date) VALUES (:id, :author, :content, now())");

                  $commentExe = $commentInsert->execute([
                    'id' => $id,
                    'author' => $author,
                    'content' => $content,
                  ]);

                  if(!$commentExe){
                  die("QUERY FAILED");
                  }

                  $update = $connection->prepare("UPDATE blog SET blog_comment_count = blog_comment_count + 1 WHERE blog_id =  $blog_select_id");
                  $update->execute();

                }


                  $comment = $connection->query("SELECT * FROM comments WHERE comment_post_id = $blog_select_id ORDER BY comment_id DESC");

                  $comments = $comment->fetchALL(PDO::FETCH_OBJ);
                  if(!$comment){
                  die("QUERY FAILED");
                }else{
                  foreach ($comments as $comment) {
                    $comment_date = $comment->comment_date;
                    $comment_author = $comment->comment_author;
                    $comment_content  = $comment->comment_content;

                  ?>

                    <div class="media">
                        <a href="" class="pull-left">
                            <img alt="" src="images/blog/no_image.jpg" class="media-object" style="width:75px; height:75px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $comment_author ?></h4>
                            <p class="text-muted"><?php echo date("d-m-Y", strtotime($comment_date)); ?></p>
                            <p><?php echo $comment_content ?></p>
                        </div>
                    </div>
<?php }
} ?>
                </div>


                <div class="post-comment">
                    <h3>Leave a Comment</h3>
                    <form action="" method="post" role="form" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" class="col-lg-12 form-control" placeholder="Name" name="comment_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea class=" form-control" rows="8" placeholder="Message" name="comment_content" required></textarea>
                            </div>
                        </div>
                        <p>
                        </p>
                        <p>
                            <button class="btn btn-send" type="submit" name="create_comment">Comment</button>
                        </p>

                        <p></p>
                    </form>
                </div>

            </div>
        </div>
        </div>
        </section>


        <!--
        ==================================================
        Footer Section Start
        ================================================== -->
        <?php include "includes/footer.php"; ?>


        <!--
        ==================================================
        Scripts Section Start
        ================================================== -->
        <?php include "includes/scripts.php"; ?>

        </body>
        </html>
