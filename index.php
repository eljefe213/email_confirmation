<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<body>
    <form action="traitement.php" method="post" align="center">
        <label for="name">Name</label>&ensp;&emsp;
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email</label>&emsp;
        <input type="email" name="email" id="email" required>
        <br>
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
        <br><br>
        <button>Send</button>
    </form>
</body>
</html>