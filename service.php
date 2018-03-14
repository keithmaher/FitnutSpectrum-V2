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
                            <h2>Service</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="ion-ios-home"></i>Home</a></li>
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--
        ==================================================
            Service Page Section  Start
        ================================================== -->
        <section id="service-page" class="pages service-page" style="text-align:center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">What We Do</h2>
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">We are fully invested in the ethos that fitness is not just doing some calisthenics, or going on specific strategic diet. <br>We believe fitness is a mix of training, diet, lifestyle and psychology and our clients come to learn how these all link together and effect one another. We aim for sound mind, sound body and sustainable awesomeness.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--
        ==================================================
            Service Card Section Start
        ================================================== -->
        <?php include "includes/ServiceCards.php"; ?>


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
