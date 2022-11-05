<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">

    <header>
        <h1>My blog</h1>
    </header>

    <nav>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/introduction-to-css/3/">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>

                <li class="nav-item"><a class="nav-link" href="/introduction-to-css/3/admin/">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="/introduction-to-css/3/logout.php">Log out</a></li>

            <?php else : ?>

                <li class="nav-item"><a class="nav-link" href="/introduction-to-css/3/login.php">Log in</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <main>
