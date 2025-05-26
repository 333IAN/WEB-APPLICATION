<?php
require_once '../includes/db_connect.php';
require_once '../includes/header.php';
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $username=$_POST['display_name'];
    $displayName=$_POST['display_name'];
    $stmt=$pdo->prepare("INSERT INTO judges (username, display_name) VALUES(?,?)");
    $stmt->execute([username, $displayNmae]);
    echo "<p>Judge added successfully!</p>";
}
?>
<h2>ADD NEW JUDGE</h2>
<form method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="display_name">Display Name:</label>
        <input type="text" id="display_name" name="display_name" required>
    </div>
    <button type="submit">Add Judge</button>
</form>
<?php require_once '../includes/footer.php';?>
