<?php

  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'webfree';

  $connect = new mysqli($server, $username, $password, $dbname);
  $connect->set_charset('utf8');

?>