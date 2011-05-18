<?php include('includes/config.php'); ?>

<html>

<head>
<title>PStatus results</title>
</head>

<body>

<h1>PStatus results</h1>

<?php
$query = "SELECT vote_session, AVG(vote_value) FROM votes GROUP BY vote_session";

$sql = mysql_query($query) or die(mysql_error());
$average = mysql_fetch_array($sql);
$result = grade(round($average[vote_session(time())])); 
echo '<p> Current session\'s vote is: '. $result . '</p>';
?>

</body>
</html>
