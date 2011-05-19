<?php include('includes/config.php'); ?>

<html>

<head>
<title>PStatus results</title>
<link href="includes/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<h1>PStatus results</h1>

<?php
$query = "SELECT vote_session, AVG(vote_value) AS vote_value FROM votes GROUP BY vote_session";

$sql = mysql_query($query) or die(mysql_error());

while($results = mysql_fetch_array($sql)) {
	echo '<div class="session">Session '. $results['vote_session']. '</div> <div class="' . grade(round($results['vote_value'])) . '">'. grade(round($results['vote_value'])).'</div></p>';
}

$result = grade(round($average[vote_session(time())])); 
?>

</body>
</html>
