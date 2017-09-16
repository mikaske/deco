<!DOCTYPE html>
<html lang="en">
<head>
	<title>Decorating for you</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron">
  <h1>Decoration service</h1>
  <p>We're decorating, so you don't have to.</p>
  <a href="orders.php">Link to the order list</a>

</div>
	<div class="container">
	<div class="center-block">
<form class="cmxform" role="form" action="insert.php" method="post">
	 <div class="form-group">
  <label for="name">Name:</label>
  <input type="text" class="form-control" minlength="3" maxlength="20" name="name" required>
	</div>
	<div class="form-group">
  <label for="surname">Surname:</label>
  <input type="text" class="form-control" minlength="3" maxlength="20" name="surname" required>
	</div>
	<div class="form-group">
  <label for="telephone">Phone number (digits only):</label>
  <input type="text"  id="telephone" name="telephone"  class="form-control" minlength="4" maxlength="20" required pattern="^[0-9]*$">
	</div>
	<div class="form-group">
  <label for="date">Date of event (yyyy-mm-dd):</label>
  <input type="text" class="form-control" name="date" required pattern="([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))">
	</div>
	<div class="form-group">
  <label for="place">Place of event:</label>
  <input type="text" class="form-control" name="place" minlength="3" maxlength="100" required>
  <input type='hidden' name="posted" value='true'>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary">Send</button>
	</div>
</form>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>