<!DOCTYPE html>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "../includes/database.php"; ?>
<?php
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
   header ("Location: admin.php");
}
?>
<html class="no-js">

<body>
                <div action="" method="post" "modal fade" id="ModalFormLogin" role="dialog" ng-app="myApp" style="padding-left:40%;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title w3-margin-left w3-left w3-text-black">Admin Login</h1>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="includes/login.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="w3-input w3-border w3-round" name="user" id="user" placeholder="username" autofocus required="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="w3-input w3-border w3-round" placeholder="password (password)" name="pass" id="pass" required="" />
                                    </div>
                                    <div class="form-group w3-section">
                                        <button class="btn btn-danger w3-left" type="submit" name="login">Login</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </body>
            </html>
