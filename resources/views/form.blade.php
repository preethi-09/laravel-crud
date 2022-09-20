<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<center>
<form method="POST" action="{{url('check') }}">
	@csrf
	<h3>Form</h3>
	<label>Name</label>
	<input type="text" name="name">
	<br><br>

	<label>Class</label>
	<input type="text" name="class">
	<br><br>

	<input type="submit" name="submit">

</form>
</center>
</body>
</html>