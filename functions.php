<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getTasks() {
    global $conn;
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);
    $tasks = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
    }

    return $tasks;
}

function addTask($task) {
    global $conn;
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    $conn->query($sql);
}

function getTaskById($id) {
    global $conn;
    $sql = "SELECT * FROM tasks WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function updateTask($id, $task) {
    global $conn;
    $sql = "UPDATE tasks SET task='$task', updated_at=NOW() WHERE id=$id";
    $conn->query($sql);
}

function deleteTask($id) {
    global $conn;
    $sql = "DELETE FROM tasks WHERE id=$id";
    $conn->query($sql);
}
?>
