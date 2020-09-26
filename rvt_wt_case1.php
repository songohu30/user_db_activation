<?PHP
$response_code = 1;

$query = "UPDATE `$table1` SET `date_inserted` = '$date_inserted', `pc_uid` = '$pc_uid', `version` = '$version' WHERE `$table1`.`id` = $id";
$result = mysqli_query($db, $query);

$activated = (bool)$row['activated'];
$date_trial_end = date_parse_from_format( 'Y-m-d',  $row['date_trial_end']);
$info = (bool)$row['info'];
?>