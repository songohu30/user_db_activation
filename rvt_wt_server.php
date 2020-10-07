<?PHP
// the script requires to be called by HTTP request post method
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
//post method sends variables and here they are received
$pc_uid= md5($_POST["pc_uid"]);
$serial = $_POST["serial"];
$version = $_POST["version"];
$date_inserted = date("Y-m-d");
$date_updated = date("Y-m-d");
$skip_pcuid_check = false;
//serial number has a specific lenght that is checked
//if http request did not send pc_uid or version it is also recognised as invalid and returns with 0
if (strlen($serial) != 13 or $pc_uid == null or $version == null)  exit (0);

require 'rvt_wt_db.php';

require 'rvt_wt_ipquery.php';

//if the user serial is found in the database there are 3 possibilities
if(mysqli_num_rows($result) == 1)
{
	switch ($db_pc_uid)
		{
			//the serial has no pc_uid assigned and is free to use
			case null:
				require 'rvt_wt_case1.php';
				break;
			//the serial has pc_uid assigned and it is equal to calling pc_uid
			case $pc_uid:
				require 'rvt_wt_case2.php';
				break;
			//the serial has pc_uid assigned and it is different than calling pc_uid
			default:
				require 'rvt_wt_case3.php';
		}
}
else
{
	//the serial is not found in database
	require 'rvt_wt_case4.php';
}
mysqli_close($db);
$response_array = array($response_code, $activated, $date_trial_end, $info);
echo json_encode($response_array);
}


?>
