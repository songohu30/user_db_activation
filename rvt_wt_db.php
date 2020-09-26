<?PHP
$db = mysqli_connect('localhost', 'username', 'password', 'database_name');
$table1 = "database_table_name1";
$table2 = "database_table_name2";
$table3 = "database_table_name3";

if(mysqli_connect_errno())
{
	echo "Failed to connect to database";
}

$query = "SELECT * FROM `$table1` WHERE serial = '$serial'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$db_pc_uid = $row['pc_uid'];
$id = $row['id'];
if($skip_pcuid_check == true)
{
	$pc_uid = $db_pc_uid;
}

?>