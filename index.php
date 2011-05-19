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

<div class="A" onclick="location.href='submit_vote.php?vote_value=A';" style="cursor:pointer">A</div><br />
<div class="B" onclick="location.href='submit_vote.php?vote_value=B';" style="cursor:pointer">B</div><br />
<div class="C" onclick="location.href='submit_vote.php?vote_value=C';" style="cursor:pointer">C</div><br />
<div class="F" onclick="location.href='submit_vote.php?vote_value=F';" style="cursor:pointer">F</div><br />

</body>
</html>
