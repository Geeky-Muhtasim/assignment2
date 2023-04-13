<?php
session_start();
include("connect.php");
$db= $conn;
$tableName="contact_details";
$columns= ['Full_Name', 'Email', 'Messages'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>Contact Details</th>
         <th>Full Name</th>
         <th>Email</th>
         <th>Messages</th>
            </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['Full_Name']??''; ?></td>
      <td><?php echo $data['Email']??''; ?></td>
      <td><?php echo $data['Messages']??''; ?></td>
      </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="3">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
<form method="post">
<input type="submit" name="logout" value="Logout">
</form>
<?php
    
    if(isset($_POST['logout']))
    {        
         header("location: http://localhost/contact%20form/adminlogin.php");
        }
    
        ?>

</body>
</html>