<?>
<?php
$db = new mysqli("localhost", "root", "");
$db->query("CREATE DATABASE IF NOT EXISTS task_db");
$db->select_db("task_db");
$db->query("CREATE TABLE IF NOT EXISTS tasks (id INT AUTO_INCREMENT PRIMARY KEY, task_name VARCHAR(255))");

if(isset($_POST['t']) && !empty(trim($_POST['t']))){ 
    $db->query("INSERT INTO tasks (task_name) VALUES ('".$db->real_escape_string($_POST['t'])."')"); 
    header("Location: index.php"); exit; 
}
if(isset($_GET['d'])){ 
    $db->query("DELETE FROM tasks WHERE id=".(int)$_GET['d']); 
    header("Location: index.php"); exit; 
}
$tasks = $db->query("SELECT * FROM tasks ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mini Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container py-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">Task Manager</h2>
        <form method="POST" class="input-group mb-3">
            <input type="text" name="t" id="t" class="form-control" placeholder="New task..." required>
            <button class="btn btn-success">Add</button>
        </form>
        <ul class="list-group">
            <?php while($row = $tasks->fetch_assoc()): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= htmlspecialchars($row['task_name']) ?>
                    <a href="?d=<?= $row['id'] ?>" class="btn btn-sm btn-danger">&times;</a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>