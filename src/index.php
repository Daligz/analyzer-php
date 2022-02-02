<?php
include '../vendor/autoload.php';
use StrScan\StringScanner;
$s = new StringScanner("This is a test");
$asd = $s->scan("/\w+/");             # => "This"
$s->scan("/\w+/");             # => null
$s->scan("/\s+/");             # => " "
$s->scan("/\s+/");             # => null
$s->scan("/\w+/");             # => "is"
$s->hasTerminated();           # => false
$s->scan("/\s+/");             # => " "
$s->scan("/(\w+)\s+(\w+)/");   # => "a test"
$s->getMatch();                # => "a test"
$s->getCapture(0);             # => "a"
$s->getCapture(1);             # => "test"
$s->hasTerminated();           # => true

print($asd);