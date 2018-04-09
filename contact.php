<<!DOCTYPE html>
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
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--
==================================================
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact Me</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Feel free to contact me either here or on any of my social media accounts listed below. <br>I will get back to as soon as I can.
                    </p>
                    <div class="contact-form">
                        <form id="contact-form" method="post" enctype="multipart/form-data" action="" role="form">

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="9" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                            </div>

                            <?php
                if(isset($_POST["contact"])){
                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];

                $query = $connection->prepare("INSERT INTO message (name, email, message) VALUES (:name, :email, :message)");

                $create_message_query = $query->execute([
                  'name' => $name,
                  'email' => $email,
                  'message' => $message,
                ]);

                if(!$create_message_query){
                   echo "Sorry, don't know what happened. Try later.";
                }else{
                  echo "Thank you. I will be in touch soon";
                }
                }
                ?>

                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" name="contact" class="btn btn-default btn-send" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Me</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                      I can be found in the Clonmel, South Tipperary region or your nearest coffee shop!
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed/v1/view?zoom=12&center=52.3558,-7.6903&key=AIzaSyA64wXlu4k65BirI6HEshyN8f6CoCF0p2w" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-3">
              <a href="https://www.facebook.com/elynchfitnut/" target="_blank" style="color:black;">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-social-facebook-outline"></i>
                    <h5>elynchfitnut</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="https://www.instagram.com/elynchfitnut/?hl=en" target="_blank" style="color:black;">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-social-instagram-outline"></i>
                    <h5>@elynchfitnut</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="mailto:fitnutspectrumfitness@gmail.com?Subject=General%20Enquiry" target="_top" style="color:black;">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <h5>fitnutspectrumfitness@gmail.com</h5>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="https://www.youtube.com/channel/UCqpyA5QPTWDiqbLUZAqjCYg" target="_blank" style="color:black;">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-social-youtube-outline"></i>
                    <h5>Fitnut Fitness</h5>
                </div>
              </a>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
Scripts Section Start
================================================== -->
<?php include "includes/scripts.php"; ?>

</body>
</html>
