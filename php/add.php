<?php include 'dbconfig.php' ?>
<?php
$result = mysqli_query($conn, "select count(*) FROM notestable");
$row= mysqli_fetch_array($result);
$total = $row[0];
$total=$total+1;


if(isset($_POST['add'])){
   echo "sd";
   $sql= "INSERT INTO notestable (ID, NoteList) VALUES (".$total.",'".$_POST["note"]."')";
   
   $result = $conn->query($sql);
}

header("Location: {$_SERVER['HTTP_REFERER']}");

?>