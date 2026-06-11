<?php include('nav.php'); 
require 'db.php';

$sql = $pdo->query('SELECT * FROM books;');
$books = $sql->fetchall(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <table>
            <tr>
                <th>Row</th>
                <th>Book Title</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>1</td>
                <td>HEEHEE</td>
                <td>Billie Jeans</td>
            </tr>
        </table>
    </section>
</body>
</html>

