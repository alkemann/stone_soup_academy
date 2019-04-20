<h2>Submit a Morgue's URL</h2>
<form method="POST">
    <input type="hidden" name="challenge_id" value="<?=$cha->id?>">
    <fieldset>
        <label>
            <span>Player</span><select name="player_id"> 
                <option value="">NEW PLAYER</option>
                <?php $players = Player::list();
                foreach ($players as $id => $name) : ?>
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
