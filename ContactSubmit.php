<?php

namespace Arden;

include_once __DIR__ . '/DB.php';

$DB = new DB('contact_submissions');

$data = array();

/**
 * Fetch our inputs from POST
 */
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['message'] = $_POST['message'];

$DB->save($data);

/**
 * Redirect to homescreen.
 */
header('Location: index.php');