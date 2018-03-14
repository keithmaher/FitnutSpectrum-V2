<?php include "includes/header.php" ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/nav.php" ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <?php

if(isset($_GET['source'])){
    $source = $_GET['source'];
}else{
    $source = "";
}

switch($source){
        
        
    default:
        include "includes/view_all_comments.php";
    break;
        
        
        
}
                          
?>
        </div>
    </div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>

</html>