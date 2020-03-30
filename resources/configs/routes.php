<?php

use alkemann\h2l\{Router, Request, Response };
use alkemann\h2l\util\{Http};
use alkemann\h2l\response\{Text};

use app\models\Morgue;

Router::alias('/', 'home');

Router::add('/submit', function(Request $r): Response {
    $morg = new Morgue($r->getPostData());
    $morg->save();
    return $r->redirect('/thanks');
}, Http::POST);

Router::add('/trim', function(Request $r): Response {
    return new Text("Trim the world!");
});