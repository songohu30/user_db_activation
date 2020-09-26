<?PHP
$ip = $_SERVER['REMOTE_ADDR'];
$ip_hash = md5($ip);
$date = date("Y-m-d");

$ip_query = "SELECT * FROM `rvt_wt_ipqueries` WHERE `ip_address` = '$ip_hash' AND `date_query` = '$date'";
$ip_result = mysqli_query($db, $ip_query);
if(mysqli_num_rows($ip_result) > 10)
{
	echo "you are banned";
	exit();
}
else
{
	$ip_query = "INSERT INTO `rvt_wt_ipqueries` (`id`, `ip_address`, `date_query`, `serial`) VALUES ('', '$ip_hash', '$date', '$serial')";
	$ip_result = mysqli_query($db, $ip_query);
}
?>