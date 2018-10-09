<?php include 'dbconfig.php' ?>
<?php
$sql = "SELECT * FROM notestable;";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
      echo '<li class="list-group-item">'.$row["NoteList"]. '<button class="btn btn-danger btn-sm float-right delete" onclick="deleteButton('.$row["ID"].')">X</button></li>';
/*    echo '<li class="list-group-item">'.$row["NoteList"].'<button class="btn btn-danger btn-sm float-right delete">X</button></li>';
 */    }
  } 

?>