<?php

require('actions/database.php');

$getAllMyQuestions = $bdd->prepare('SELECT role description FROM users ');
$getAllMyQuestions->execute(array($_SESSION['id']));