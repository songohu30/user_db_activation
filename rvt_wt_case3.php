<?PHP
$response_code = 3;
//insert query in another table
$query = "INSERT INTO `$table2` (`id`, `activation_id`, `pc_uid`, `date_inserted`) VALUES (NULL, '$id', '$pc_uid', '$date_inserted')";
$result = mysqli_query($db, $query);
?>