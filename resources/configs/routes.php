<?php

use alkemann\h2l\{Router, Request, Response };
use alkemann\h2l\util\{Http};

use app\models\Morgue;

Router::alias('/', 'home');

Router::add('/submit', function(Request $r): Response {
    // dd($_POST);

    $morg = new Morgue($r->getPostData());
    $morg->save();
    dd($morg);

}, Http::POST);
