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


        <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Search Results</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="ion-ios-home"></i>Home</a></li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog-full-width">
        <div class="container">
        <div class="row">
        <div class="col-md-8">

          <?php

        if(isset($_POST['submit'])){

        $search = $_POST['search'];

        $search_query = $connection->query("SELECT * FROM blog WHERE blog_tags LIKE '%$search%' ");
        if(!$search_query){
            die("QUERY FAILED" . mysqli_error($connection));
        }
        }

        $count = $search_query->rowCount();
        if($count == 0){
            echo "<h2>Sorry No result for '$search'</h2><br>Click <a href='blog.php'>here</a> to retutn";
        }else{

        $blogs = $search_query->fetchALL(PDO::FETCH_OBJ);

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
<?php }} ?>
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
