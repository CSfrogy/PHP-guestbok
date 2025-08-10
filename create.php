<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Guestbook</title>
</head>
<body>
<header>
    <nav class="menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/messages.php">Messages</a></li>
            <li><a href="/create.php">Create</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="form">
        <h2>Message Form</h2>
        <form action="/form-handler.php" method="POST">
            <label for="user_name">Name</label>
                <input type="text" id="user_name" name="name"
            placeholder="Your name..">
            <p class="error"></p>
            <label for="message_area">Message</label>
                <textarea name="message" id="message_area" cols="30" rows="10" placeholder="Write your message"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</main>
</body>
</html>
