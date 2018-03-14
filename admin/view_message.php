<?php include "includes/header.php" ?>

<div id="wrapper">

<!-- Navigation -->
<?php include "includes/nav.php" ?>

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
Messages
</h1>
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Delete</th>
</tr>
</thead>
<tbodt>
<?php
$message = $connection->query("SELECT * FROM message ORDER BY message_id DESC");

$row = $message->fetchAll(PDO::FETCH_OBJ);
foreach($row as $message){
$message_id = $message->message_id;
$name = $message->name;
$email = $message->email;
$message = $message->message;
$reply = $message->reply;


echo "<tr>";
echo "<td>$name</td>";
echo "<td><a href='#'>$email</a></td>";
echo "<td>$message</td>";
echo "<td><a href='view_message.php?delete=$message_id'>Delete</a></td>";
echo "</tr>";

}

if(isset($_GET['delete'])){

    $delete_id = $_GET['delete'];
    $delete = $connection->query("DELETE FROM message WHERE message_id = $delete_id");
    header ("Location: view_message.php");

}

?>
</tbodt>
</table>
</div>



</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>


<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
