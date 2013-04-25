<?php

$l = @exec("/usr/games/fortune", $o, $r);
$fortune = @implode("\n", $o);

$tpl = array();
$tpl['quote'] = preg_replace('/\s--\s?/', ' - ', $fortune);
$tpl['quote'] = str_replace("\n",' ', $tpl['quote']);
$tpl['quote'] = preg_replace('/\s+/', ' ', $tpl['quote']);

require 'tpl.xml.php';
