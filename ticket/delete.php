<?php
 include "../connection.php";
 $id = $_GET['id'];
 $result= mysqli_query($con, "DELETE FROM ticket WHERE id=$id");
 echo "<meta http-equiv='refresh' content='0; url=? page=ticket-show'>";