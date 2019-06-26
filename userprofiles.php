<?php
   include('config.php');
   $sql = "SELECT * FROM userdetail";
   $sqldata = mysqli_query($con,$sql) or die('error');
   if (mysqli_num_rows($sqldata) > 0) {
    $row = mysqli_fetch_assoc($sqldata);
?>
 <table>
  <tr>
    <th>Name <td><?php  echo $row["name"];?></td></th></tr>
   <tr> <th>Email<td><?php  echo $row["email"];?></td></th></tr>
   <tr> <th><button>Edit Profile</button></th>
  </tr>
  
</table>
<?php
}


?>