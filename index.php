<?php
require_once 'core/init.php';

$user = DB::getInstance()->insert('users', array(
  'password' => ' password',
  'name' => 'Dole Arret',
  'salt' => 'aaaa'
));
