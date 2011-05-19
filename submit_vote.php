<?php 
// Checks if last vote was cast in the last 30 seconds

if (!isset($_COOKIE['lastVote'])) {
	setcookie('lastVote', time()+30, time()+30);
	$valid_vote = true;
} else {
	$valid_vote = false;
}

?>
<html>
<head>
<meta http-equiv="refresh" content="2; http://pstatus.remanber.com/results.php" />
<title>Vote Submitted</title>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>

<?php
include('includes/config.php');

$vote_session = vote_session(time()); // Finds which session the school is in with vote_session()

if ( ($vote_session < 6) && ($valid_vote) ) {  // Check to see if there is a current valid voting session

	if (isset($_POST['vote_value'])) {

		$vote_value = mysql_real_escape_string($_POST['vote_value']); // FFFUUUU SQL INJECTION

	} else if (isset($_GET['vote_value'])) {

		$vote_value = mysql_real_escape_string($_GET['vote_value']);  // FFUUUUU SQL INJECTION

	}

	// Submit Query
	mysql_query("INSERT INTO votes (vote_value, vote_date, vote_time, vote_ip, vote_session) VALUES ( '$vote_value', CURRENT_DATE, CURRENT_TIME, '$user_ip', '$vote_session')") or die (mysql_error()); echo "Vote cast. </h1>";

} else if (!$valid_vote) {

	echo '</h1><p>You\'ve voted too recently! Please wait!</p>';

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
