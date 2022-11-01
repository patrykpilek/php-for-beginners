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
            <li><a href="/javascript-and-php/3/index.php">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>
                
                <li><a href="/javascript-and-php/3/admin/index.php">Admin</a></li>
                <li><a href="/javascript-and-php/3/logout.php">Log out</a></li>

            <?php else : ?>
                
                <li><a href="/javascript-and-php/3/login.php">Log in</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <main>
