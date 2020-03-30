<?php

use app\models\{ Morgue, Challenge };

$players = Morgue::players();
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
            <select name="player" onchange="play_selected();">
                    <option>New Player</option>
                <?php foreach ($players as $key => $value) : ?>
                    <option value="<?=$key; ?>"><?=$value?></option>
                <?php endforeach; ?>
            </select>
            <input id="player_name" name="player" type="text" />

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
<script type="text/javascript">
    function play_selected() {
        const el = document.getElementById("player_name");
        el.disabled = true;
        el.parentNode. removeChild(el);
    }
</script>