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
        <form action="/action_page.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"
            placeholder="Your name..">
            <label for="Message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"></textarea>
            <button type="submit">Submit Message</button>
        </form>
    </div>
</main>
</body>
</html>
