<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "eproject";
$con = mysqli_connect($server,$user,$password,$db);
if($con){
    ?><script>alert("Connection succ")</script>
    <?php
}else{
    ?><script>alert("Connection unsucc")</script>
    <?php
}

?>