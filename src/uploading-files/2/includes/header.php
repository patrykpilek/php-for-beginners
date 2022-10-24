<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/uploading-files/2/">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>

                <li><a href="/uploading-files/2/admin/">Admin</a></li>
                <li><a href="/uploading-files/2/logout.php">Log out</a></li>

            <?php else : ?>

                <li><a href="/uploading-files/2/login.php">Log in</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <main>
