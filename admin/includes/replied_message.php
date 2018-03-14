<?php include "../../includes/db.php" ?>
<?php
if(isset($_GET['Replied'])){
$reply_id = $_GET['Replied'];

$query = $connection->query("SELECT * FROM message WHERE blog_id = $reply_id");
$row = $query->fetchAll(PDO::FETCH_OBJ);
foreach($row as $query){
$query = $query->reply;
}


$query = $connection->query("UPDATE message SET reply = 'YES' WHERE message_id = $reply_id");

if(!$query){
        die("QUERY FAILED");
    }else{
        header ("Location: ../view_message.php");
    }
}
?>
