<?php
if ( isset( $_POST['formate_date_btn'] ) ) 
	{
      $date = $_POST['date'];
      $format = $_POST['format'];
		
		if ( ( $date && $format ) ) 
		{
			
         $dateTime = new DateTime($date);
         $formattedDate = $dateTime->format($format);
         //$msg = $web_app->showAlertMsg( 'sucess', "Formatted Date: $formattedDate" );
         echo "Formatted Date: $formattedDate";
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Date Formatter</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="format.php" method="post">
		<label for="date">Select a Date:</label>
		<input type="date" id="date" name="date"><br><br>
		<label for="format">Select Output Format:</label>
		<select id="format" name="format">
			<option value="Y-m-d">YYYY-MM-DD</option>
			<option value="d-m-Y">DD-MM-YYYY</option>
			<option value="m-d-Y">MM-DD-YYYY</option>
		</select><br><br>
		
      <button type="submit" name="formate_date_btn" id="formate_date_btn" class="btn btn-primary">Formate Date</button>
	</form>
   
</body>
</html>