<?php
include('functions.php');
$tasks = getTasks();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Task Manager</h1>

        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?php echo $task['task']; ?>
                    <a href="edit.php?id=<?php echo $task['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $task['id']; ?>"
                        onclick="return confirm('Are you sure you want to delete this task?')">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <a href="add.php">Add Task</a>
    </div>

</body>

</html>