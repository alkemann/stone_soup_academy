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
    /*
     3 Weakling
     6  Amateur
     9  Novice
    12  Journeyman
    15  Adept
    18  Veteran
    21  Master
    24+ Legendary
    */
    static $titles = [
        'Weakling' => 'Weakling',
        'Amateur' => 'Amateur',
        'Novice' => 'Novice',
        'Journeyman' => 'Journeyman',
        'Adept' => 'Adept',
        'Veteran' => 'Veteran',
        'Master' => 'Master',
        'Legendary' => 'Legendary',
    ];

    static $connection = "default";
    static $table = "morgues";
    static $fields = [
        'id', 'challenge_id', 'player', 'certified',
        'url', 'title', 'created'
    ];
    static $relations = [];

    public static function players()
    {
        $query = "SELECT DISTINCT `player` FROM `morgues`;";
        $result = static::db()->query($query);
        $list = [];
        foreach ($result as $row) {
            $p = $row['player'];
            $list[$p] = $p;
        }
        return $list;
    }
}
