<!DOCTYPE html>
<head>
    <title>Link Creator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, #e66465, #9198e5);
            color: white;
            text-align: center;
            padding: 53px;
        }
        form {
            background: white;
            color: black;
            padding: 22px;
            border-radius: 12px;
        }
        input[type="text"] {
            width: 95%;
            padding: 15px;
            margin: 15px 0;
        }
        button {
            padding: 15px 25px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
       
		
    </style>
</head>
<body>
    <h1>Link Creation</h1>
    <form method="POST">
        <label for="link_url">Link URL</label><br>
        <input type="text" name="link_url" required><br>
        
        <label for="link_text">Link Text</label><br>
        <input type="text" name="link_text" required><br>
        
        <label for="link_color">Link Color</label><br>
        <input type="text" name="link_color" required><br>
        
        <button type="submit">Create Link</button>
    </form>
	<p>The created link is:
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        $url = htmlspecialchars($_POST['link_url']);
        $link_text = htmlspecialchars($_POST['link_text']);
        $color = htmlspecialchars($_POST['link_color']);

        
        echo "<h2>Link:</h2>";
        echo "<a href=\"$url\" style=\"color: $color;\">$link_text</a>";
    }
    ?>
</body>
</html>

</body>
</html>