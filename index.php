<?php

include('includes/config.php');

?>

<html>

<head>
<title>PStatus voting</title>
<link href="includes/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<h1>PStatus Voting</h1>

<form action="submit_vote.php" method=POST>
<p>
<input type="radio" name="vote_value" value="4" />A
<input type="radio" name="vote_value" value="3" />B
<input type="radio" name="vote_value" value="2" />C
<input type="radio" name="vote_value" value="1" />F
</p>
<p>
<input type="submit" value="vote">
</p>
</form>

</body>
</html>
