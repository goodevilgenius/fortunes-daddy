<?php

$l = @exec("/usr/games/fortune", $o, $r);
$fortune = @implode("\n", $o);

$tpl = array();
$tpl['quote'] = preg_replace('/\s--\s?/', ' - ', $fortune);

require 'tpl.xml.php';
