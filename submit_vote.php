<html>
<head>
<meta http-equiv="refresh" content="2; http://pstatus.remanber.com/results.php" />
<title>Vote Submitted</title>
</head>

<body>
<h1>

<?php
include('includes/config.php');

$vote_time = time();
$vote_session = ($vote_time);

if ($vote_session < 5) {  // Check to see if there is a current valid voting session
	
	$vote_value = mysql_real_escape_string($_POST['vote_value']);

	mysql_query("INSERT INTO votes (vote_value, vote_date, vote_time, vote_ip, vote_session) VALUES ( '$vote_value', CURRENT_DATE, CURRENT_TIME, '$user_ip', '$vote_session')") or die (mysql_error()); echo "Vote cast. </h1>";


} else {

	echo '</h1><p>Polls are not currently open. Voting times are:<br />
				session 1: may 27 7:30 am - may 28 1:00 pm<br />
				session 2: may 29 7:30 am - may 30 1:00 pm<br />
				session 3: june 3 7:30 am - june 4 1:00 pm<br />
				session 4: june 5 7:30 am - june 6 1:00 pm<br /></p>';
}

?>

<p> You will be taken to results page in a second.</p>
</body>
</html>
