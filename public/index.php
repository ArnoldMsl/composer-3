<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$bessie->setTongue('U');
$output = $bessie->say();
echo $output;

?>