<?php
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    addTask($task);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Add Task</h1>

    <form action="add.php" method="post">
        <label for="task">Task:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Add Task</button>
    </form>

    <a href="index.php">Back to Task List</a>
</div>

</body>
</html>
