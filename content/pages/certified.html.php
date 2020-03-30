<?php

use app\models\{Morgue, Challenge};

// grab all morgues that are certified
$certified = Morgue::find(['certified' => 1]);

// create a function to convert 'challenge_id' to the Challenge title
function cha($id) {
    $challenges = Challenge::list();
    return $challenges[$id];
}

?>
<h2>Certified morgues</h2>
<ol>
    <?php foreach ($certified as $morg): ?>
    <li><b><?=$morg->player?></b> did <i><?=cha($morg->challenge_id)?></i> like this : <a href="<?=$morg->url?>"><?=$morg->title?></a></li>
    <?php endforeach; ?>
</ol>
