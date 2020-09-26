<?PHP
$response_code = 2;
$query = "UPDATE `$table1` SET `date_updated` = '$date_updated', `version` = '$version' WHERE `$table1`.`id` = $id";
$result = mysqli_query($db, $query);

$activated = (bool)$row['activated'];
$date_trial_end = date_parse_from_format( 'Y-m-d',  $row['date_trial_end']);
$info = (bool)$row['info'];
?>