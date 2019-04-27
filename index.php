<?php

$redis = new Redis ();
$redis->connect ( '127.0.0.1',6379 );
$redis->auth ( 'shamo0130' );
$redis->set('aa',22);