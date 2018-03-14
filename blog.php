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
        if(isset($_GET['page'])){
        $page = $_GET['page'];
        }else{
        $page = "";
        }

        if($page == ""){
        $page = 1;
        }?>


        <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>FitNut Blog</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="ion-ios-home"></i>Home</a></li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php

        if($page == "" || $page == 1){
        $page_1 = 0;
        }else{
        $page_1 = ($page * 3) - 3;
        }

        $find_count = $connection->query("SELECT * FROM blog");
        $count = $find_count->rowCount();

        $count = ceil($count/ 3);

        // $find_count = ($find_count/ 3);

        $blog = $connection->query("SELECT * FROM blog ORDER BY blog_id DESC LIMIT $page_1, 3");
        ?>

        <section id="blog-full-width">
        <div class="container">
          <div class="row">
              <div class="col-md-8">

        <?php
        $blogs = $blog->fetchALL(PDO::FETCH_OBJ);

        foreach ($blogs as $blog) {
          $id = $blog->blog_id;
          $title = $blog->blog_title;
          $author = $blog->blog_author;
          $date = $blog->blog_date;
          $image = $blog->blog_image;
          $content = $blog->blog_content;
          $sub = substr($content,0,200);

        ?>


        <!--=============================================
        =            Blog With Right Sidebar            =
        ==============================================-->
        <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
            <div class="blog-post-image">
                <a href="i_blog.php?b_id=<?php echo $id; ?>"><img class="img-responsive" src="images/blog/<?php echo $image; ?>" alt="Blog image" /></a>
            </div>
            <div class="blog-content">
                <h2 class="blogpost-title">
                <a href="i_blog.php?b_id=<?php echo $id; ?>"><?php echo $title?></a>
                </h2>
                <div class="blog-meta">
                    <span><?php echo date("d-m-Y", strtotime($date)); ?></span>
                    <span>by <a href=""><?php echo $author; ?></a></span>
                </div>
                <p><?php echo $sub ?></p>
                <a href="i_blog.php?b_id=<?php echo $id; ?>" class="btn btn-dafault btn-details">Continue Reading</a>
            </div>
        </article>
        <?php  } ?>
        </div>


        <!--=============================================
        =           Search                             =
        ==============================================-->
        <?php include "includes/sideSearch.php"; ?>


        <!--=============================================
        =           Sidebar                             =
        ==============================================-->
        <?php include "includes/sidebar.php"; ?>


        <!--=============================================
        =           Recent Post                             =
        ==============================================-->
        <?php include "includes/recentPost.php"; ?>


        </div>
        </div>
        </div>
        </div>
        </section>

        <div class="page">
          <ul class="pagination">
          <?php
          for($i =1; $i<=$count; $i++){
          if($i == $page){
          echo "<li><a class='active' href='blog.php?page={$i}'>$i</a></li>";
        }else{
          echo "<li><a href='blog.php?page={$i}'>$i</a></li>";
        }
          }
          ?>
          </ul>
        </div>


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
