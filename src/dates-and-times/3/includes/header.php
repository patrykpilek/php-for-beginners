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
            <li><a href="/dates-and-times/3/">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>
                
                <li><a href="/dates-and-times/3/admin/">Admin</a></li>
                <li><a href="/dates-and-times/3/logout.php">Log out</a></li>

            <?php else : ?>
                
                <li><a href="/dates-and-times/3/login.php">Log in</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <main>
