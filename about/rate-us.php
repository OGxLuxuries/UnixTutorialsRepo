<?php 
	include("/home/iste240t89/Sites/dbconfig.php");

	if (!empty($_GET["from"]) && !empty($_GET["message"]) && !empty($_GET["rating"]))  {
		$from = $_GET["from"];
		$message = $_GET["message"];
        $rating = $_GET["rating"];
		var_dump($message);
		$sql = "INSERT INTO `comments` (`from`, `message`, `rating`, `date` ) VALUES (?, ?, ?, now());";
		// Prepared statement
		$stmt = $conn->prepare($sql);
		var_dump($stmt);
		$stmt->bind_param('ssd', $from, $message, $rating);
		$stmt->execute();
		$stmt->close();

		header("Location: rate-us.php");

	}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>WFS - Step 5</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>  
    <body>

        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">Our Ratings</h1>
            
		<hr/>
		<h3>Add Your Rating Here</h3>
		<form id="rate-form" action="rate-us.php" method="get">		
			<p class="margined">Name: <input type="text" id="from" name="from" /></p>
            <p>Comment: <input type="text" id="msg" name="message"/></p>
			<p>Rating <input type="range" id="rate" name="rating" min="0" max="5"></p>
            
            
            
			<input class="submit-button" style="width: 70vw;" type="submit" value="Submit"/>
		</form>
		
		<h3>Recent Comments</h3>
		<div id="list">
			<ul>
				<?php
					// fetch rows
					$sql = "SELECT * FROM comments ORDER BY `date` DESC";

					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
						echo "<li><span>" . $row['from'] . ":</span> " . $row['message'] . "<br>Rating: ". $row['rating']. "<div>" . $row['date'] . "</div></li><br>";
					}

					$conn->close();
							
					?>
			</ul>
		</div>
        </main>

		
		
	</body>
</html>
