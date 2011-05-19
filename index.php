<?php include('includes/config.php'); ?>
<html>

<head>
<title>PStatus voting</title>
<link href="includes/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h2>So How's The</h2><br />
<h1>P Status</h1><br />
<h2>This Session?</h2>

<form action="submit_vote.php" method=POST>
<div class="A">A<br /><input type="radio" name="vote_value" value="4" /></div><br />
<div class="B">B<br /><input type="radio" name="vote_value" value="3" /></div><br />
<div class="C">C<br /><input type="radio" name="vote_value" value="2" /></div><br />
<div class="F">F<br /><input type="radio" name="vote_value" value="1" /></div><br />
<p>
<input type="submit" value="vote">
</p>
</form>

</body>
</html>
