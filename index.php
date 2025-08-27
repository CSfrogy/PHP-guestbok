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
        <div class="main-container">
            <h1>Leave your message and have fun! </h1>
            <div class="btn">
                <a href="create.php"><button>Write a message</button> </a>
            </div>
        </div>
        <div class="contact_form">
            <h1>Contact Me</h1>
            <form action="contactform.php" method="post">
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <input type="textarea" name="message" placeholder="Your Message">
                <button type="submit"class="button_contact_form">Send</button>
            </form>
        </div>
    </main>
</body>
</html>
