<?PHP
$response_code = 4;
$query = "INSERT INTO `$table3` (`id`, `serial`, `pc_uid`, `date_inserted`) VALUES (NULL, '$serial', '$pc_uid', '$date_inserted')";
$result = mysqli_query($db, $query);
?>