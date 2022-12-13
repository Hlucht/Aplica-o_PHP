<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">

    <title>Regiser</title>
</head>
<body>
    <div class="form">
        <h1>Send Message</h1>

        <form method="POST" action="./process.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Type your name">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" placeholder="password">

        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="Type your message" rows="10" cols="60"></textarea>

        <input type="submit" value="Send" class="send">
        </form>
    </div>
</body>
</html>