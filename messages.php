    <?php
    require_once "fetch.php";
    require_once "pagination.php";
    ?>
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

    <main class="messages-page">
        <div class="messages-container">
            <h1>Guestbook Messages</h1>
            <?php if(empty($messages)) : ?>
                <p class="no-messages">No messages yet. Be the First to post!</p>
                <div class="btn">
                    <a href="create.php"><button>Write a message</button> </a>
                </div>
            <?php else: ?>
            <?php foreach($messages as $message) : ?>
                <div class="message">
                    <div class="message-name">
                        <?= htmlspecialchars($message['name']) ?>
                    </div>
                    <div class="message-text">
                        <?= htmlspecialchars($message['message']) ?>
                    </div>
                    <div class="message-date">
                        <?= htmlspecialchars($message['created_at']) ?>
                    </div>
                </div>

        <?php endforeach; ?>
        <?php endif; ?>
        </div>
        <div class="pagination">
            <?php if($total_pages > 1): ?>
                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                    <a class="<?= ($i === $page) ? 'active' : '' ?>" href="?page=<?= $i ?>"><?= $i ?></a>
                <?php endfor; ?>
            <?php endif; ?>
    </main>
    </body>
    </html>
