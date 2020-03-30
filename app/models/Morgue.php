<?php

namespace app\models;

class Morgue extends BaseModel
{

    /*
    CREATE TABLE `morgues` (
      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
      `player` varchar(256) NOT NULL DEFAULT '',
      `url` varchar(256) NOT NULL DEFAULT '',
      `title` varchar(256) DEFAULT NULL,
      `certified` tinyint(1) NOT NULL DEFAULT '0',
      `challenge_id` int(11) NOT NULL,
      `created` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`id`),
      KEY `challenge_id` (`challenge_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    */

    static $connection = "default";
    static $table = "morgues";
    static $fields = [
        'id', 'challenge_id', 'player', 'certified',
        'url', 'title', 'created'
    ];
    static $relations = [];

}
