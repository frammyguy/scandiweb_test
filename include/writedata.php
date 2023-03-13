<?php

$db = new DB();

$db->setVars($_POST);

$link = $db->connect();

$db->writeQuery($link);