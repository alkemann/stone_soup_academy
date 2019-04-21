<?php

use app\models\Player;

 // $player_list = Player::list(); // not implemented yet as we have no db
$player_list = [1 => 'Rogga', 11 => 'Alkemann', 21 => 'Ace'];

?>
<h2>Submit a Morgue's URL</h2>
<form method="POST">
    <input type="hidden" name="challenge_id" value="<?=$cha->id?>">
    <fieldset>
        <label>
            <span>Player</span><select name="player_id"> 
                <option value="">NEW PLAYER</option>
                <?php
                foreach ($player_list as $id => $name) : ?>
                <option value="<?=$e($id)?>"><?=$e($name)?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <br />
        <br />
        <label>
            <span>Morgue URL</span><br />
            <input type="text" name="morgue_url" placeholder="http://example.com" required="required" />
        </label>
        <br />
        
        <br />
        <input type="submit" name="Save">
    </fieldset>
    <br />
</form>
