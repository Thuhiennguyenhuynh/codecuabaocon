
<?php
$_servername="localhost";
$_ursername="root";
$password="";
$dbname="Nguyenhuynhthuhien_2123110408";
//create connection
$conn= new mysqli($_servername,$_ursername,$password,$dbname);
//check connection
if($conn ->connect_error){
  die("connection failed:".$conn->connect_error);
}
else{
  echo"Ket noi thanh cong!";
}

$sql="SELECT id,category_name,slug FROM category";
$result=$conn ->query($sql);
echo "<br>";
var_dump($result);
if($result ->num_rows>0){
  //output data of each now
  while($row=$result ->fetch_assoc()){
    echo "id:".$row["id"]."Name".$row["category_name"]." ".$row["slug"]." ";
  }
}
  else{
    echo "0 results";
  }
?>

<?php
require("config/route.php");
require("config/path.php");
?>
<?php
require("lib/coreFunction.php");
$f=new CoreFunction();
require("partial/header.php");
?>


<?php
require("partial/nav.php");

?>
<br>
<!-- content -->
<?php

if (!isset($_GET['page'])) {
  $page = "";
} else {
  $page = $_GET['page'];
}
foreach ($route as $r => $val) {
  if ($r == $page) {
    require($val);
  }
}
?>

<!-- footer -->
<?php
require("partial/footer.php");
?>