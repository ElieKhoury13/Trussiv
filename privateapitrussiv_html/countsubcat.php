<?php
header('Content-Type: application/json');
include "db.php";

 $category=$_POST['category'];
 $subcategory=$_POST['subcategory'];
  $country=$_POST['country'];
       $date= $_POST['date'];
      $date = date("Y-m-d",strtotime($date));
  
  
   $tarama=$_POST['tarama'];
if($tarama == '5f49e9f6-f286-4170-a149-6cb7299adbc7')
{
$stmt = $db->prepare("SELECT COUNT(*) FROM storeItems 
WHERE  
category like'%".$category."%'
AND image1 >=  '$date'
AND country like'%".$country."%'
 AND subcategory like'%".$subcategory."%'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
}