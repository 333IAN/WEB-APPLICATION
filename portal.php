<?php
require_once '../includes/db_connect.php';
require_once '../includes/header.php';
$participants=$pdo->query("SELECT*FROM participants")->fetchAll();
$judges=$pdo->query("SELECT*FROM judges")->fetchAll();
?>
<h2>Judge Portal</h2>
<form action="submit_score.php" method="post">
    <div>
        <label for="judge_id">Select Judge:</label>
        <select id="judge_id" name="judge_id" required>
            <?php foreach ($judges as $judge):?>
                <option value="<?=judge['id']?>"><?=$judge['display_name']?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label for ="participant_id">Select Participant:</label>
        <select id="participant_id" name="participant_id" required>
            <?php foreach($participants as $participant):?>
                <option value="<?=$participant['id']?>"><?=$participant['name']?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label for ="points">Points(1-100):</label>
        <input type="number" id="points" name="points" min="1" max="100" required>
    </div>
    <button type="submit">Submit Score </button>
</form>
<?php require_once '../includes/footer.php';?>
