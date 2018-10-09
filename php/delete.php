<?php include 'dbconfig.php' ?>
<?php
   if(isset($_POST["dele"])){
   $sql= "DELETE FROM notestable where ID =" .$_POST["dele"];
   
   $result = $conn->query($sql);
    echo "true";
   } else {
       echo "false";
   }
?>