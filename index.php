<?php
include('nav.php');
require 'db.php';

// Fetch all records from the books table
$sql = $pdo->query('SELECT * FROM books;');
$books = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-4 d-flex flex-column justify-content-center align-items-center">
    <h2>Book Records</h2>

    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th># Counter</th>
                <th>Book Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= htmlspecialchars($book['id']); ?></td>
                    <td><?= htmlspecialchars($book['title']); ?></td>
                    <td><?= htmlspecialchars($book['description']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>

</html>