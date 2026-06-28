<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav>
        <a class="nostyle" id="books" href="index.php">Books</a>
        <a class="nostyle" id="add-Books" href="add.php">Add </a>
    </nav>

    <?php session_start(); ?>

    <h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo htmlspecialchars($_SESSION['message']);
            unset($_SESSION['message']);
        }
        ?>
    </h3>