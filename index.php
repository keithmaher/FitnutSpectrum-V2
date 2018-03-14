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
        Slider Section Start
        ================================================== -->
        <?php include "includes/slider.php"; ?>


        <!--
        ==================================================
        About Section Start
        ================================================== -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                            <h2>
                            ABOUT FITNUT
                            </h2>
                            <p>This is premium online coaching, backed by education.</p>
                            <p>If you are looking for the answer, you may have found it. If you are an athlete, trying to get fit or someone that just wants to change the dynamic of their lives for the better, then keep scrolling, I can help you.</p>
                            <p>Fitnut was based on the ethos that there lies disconnects between what science, what people know and what people do. I decided to do something about this a few years ago. At Fitnut, I endeavour to provide my clients and members of my Fitnut brainbox community with evidence based advice that works. What is done here changes lives, physically, mentally and emotionally, and long term change is the aim of the game here.</p>
                            <!-- <p>I work together with my clients to break down barriers, identify obstacles and build the framework for you to go ahead and do all the small and the big things that you need to do, but don’t, to get to where they want to go. Success for me working with a client is you becoming successful with your own goals.</p> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                            <img src="images/about/about2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--
        ==================================================
        Blog Section Start
        ================================================== -->
        <?php include "includes/blog.php"; ?>


        <!--
        ==================================================
        Portfolio Section Start
        ================================================== -->
        <section id="feature">
            <div class="container">
                <div class="section-heading">
                    <h1 class="title wow fadeInDown" data-wow-delay=".3s">Services</h1>
                    <p class="wow fadeInDown" data-wow-delay=".5s">
                        Fitnut was based on the ethos that knowledge is power, and that knowledge is key.<br>I believe in the bigger picture and long term orientated goal setting set about through practical application and actionable steps. <br>Progress is our passion, and we want you to share our passion with us.<br><br>
                    We like to work together with our clients, eliminating barriers and decreasing limiting factors, to ensure that they get the most out of their plan, and themselves.
                  </p>

                <div class="blog-content">
                  <a href="service.php" class="btn btn-dafault btn-details">Show Me More</a>
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
