<?php
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $task = $_POST['task'];
    updateTask($id, $task);
    header("Location: index.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $task = getTaskById($id);

    if ($task === null) {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Edit Task</h1>

    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <label for="task">Task:</label>
        <input type="text" id="task" name="task" value="<?php echo $task['task']; ?>" required>
        <button type="submit">Update Task</button>
    </form>

    <a href="index.php">Back to Task List</a>
</div>

</body>
</html>
    