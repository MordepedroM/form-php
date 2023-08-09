<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>HTML - FORM</title>
</head>
<body>
	<h1>FORM</h1>
	<div class="container">
	<form action="connect.php" method="post">
	<div>
	<label>Name</label>
	<input type="text" name="name" placeholder="Type your 'Name'"></input>
	</div>
	<div>
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Type your 'E-mail'"></input>
        </div>
	<div>
        <label>Phone number</label>
        <input type="tel" name="phone" placeholder="Type your 'Phone Number'"></input>
        </div>
	<div class="btn">
	<button type="submit">Submit Data</button>
	</div>
	</div>
</body>
</html>
