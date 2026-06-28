<?php include('nav.php'); ?>

<div class="form-container">
    <h2 style="text-align: center; margin-bottom: 20px;">Add a Book</h2>

    <form action="submit.php" method="POST">
        <label for="title">Book Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>

        <input type="submit" value="Submit">
    </form>
</div>

</body>

</html>