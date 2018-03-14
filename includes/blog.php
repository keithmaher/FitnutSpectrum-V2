<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest BLogs</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Expand your mind to help improve the body.
            </p>
        </div>

        <?php
        if(isset($_GET['page'])){
        $page = $_GET['page'];
        }else{
        $page = "";
        }

        if($page == ""){
        $page = 1;
        }

        if($page == "" || $page == 1){
        $page_1 = 0;
        }else{
        $page_1 = ($page * 3) - 3;
        }

        $blog = $connection->query("SELECT * FROM blog ORDER BY blog_id DESC LIMIT $page_1, 3");

        ?>

        <div class="row">

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


          <div class="col-sm-4 col-xs-12">
              <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                  <div class="img-wrapper">
                      <img style="min-height:250px; max-height:250px; width:100%;" src="images/blog/<?php echo $image; ?>" class="img-responsive" alt="this is a title" >
                  </div>
                  <figcaption>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="i_blog.php?b_id=<?php echo $id; ?>"><?php echo $title;?></a>
                        </h2>
                        <div class="blog-meta">
                            <span><?php echo date("d-m-Y", strtotime($date)); ?></span>
                            <span><?php echo $author; ?></span>
                        </div>
                        <p><?php echo $sub ?></p>
                        <a href="i_blog.php?b_id=<?php echo $id; ?>" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>
                  </figcaption>
              </figure>
          </div>
<?php } ?>
        </div>
    </div>
</section>
