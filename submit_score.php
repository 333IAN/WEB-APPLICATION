<?php
require_once '..includes/db_connect.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $judgeId=$_POST['judge_id'];
    $participantId=$_POST['participant_id'];
    $points=$_POST['points']

    $stmt = $pdo->prepare("INSERT INTO scores (judge_id, participant_id, points)VALUES(?, ?, ?)");
    $stmt->execute([$judgeId, $participantId, $points]);

    header("Location: portal.php?success=1");
    exit();
}else{
    header("Location:portal.php");
    exit();
}
?>