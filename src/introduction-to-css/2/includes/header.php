<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/introduction-to-css/2/">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>

                <li><a href="/introduction-to-css/2/admin/">Admin</a></li>
                <li><a href="/introduction-to-css/2/logout.php">Log out</a></li>

            <?php else : ?>

                <li><a href="/introduction-to-css/2/login.php">Log in</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <main>
