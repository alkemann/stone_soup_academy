<?php

use app\models\Challenge;
// $player_list = Player::list(); // not implemented yet as we have no db
// $player_list = [1 => 'Rogga', 11 => 'Alkemann', 21 => 'Ace'];
$challenges = Challenge::list();
?>
<h2>Submit a Morgue's URL</h2>
<form method="POST">
    <fieldset>
        <label>
            <span>Challenge</span><br />
            <select name="challenge_id">
                <?php foreach ($challenges as $key => $value) : ?>
                    <option value="<?=$key; ?>"><?=$value?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <br /><br />
        <label>
            <span>Player</span><br />
            <input name="player" type="text" />
        </label>
        <br /><br />
        <label>
            <span>Morgue Title</span><br />
            <input name="title" type="text" />
        </label>
        <br /><br />
        <label>
            <span>Morgue URL</span><br />
            <input type="text" name="url" placeholder="http://example.com" required="required" />
        </label>
        <br />
        <br />
        <input type="submit" name="Save">
    </fieldset>
    <br />
</form>
