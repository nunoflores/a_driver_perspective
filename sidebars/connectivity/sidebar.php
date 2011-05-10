<?php
require_once(DOKU_PLUGIN.'directions/syntax/localdirections.php');
require_once(DOKU_PLUGIN.'directions/syntax/common.php');

global $conf;

$filename = DOKU_INC.$conf['plugin']['directions']['hitslog'];			
$data = dir_parseHitsFile($filename);

// header
print '<table class=driver_dbox_table style="border-bottom: 0px"><tr><td class=driver_dbox_table_title_column>Directions</td></tr></table>';

//incoming
// $info can go unset (Used only by graph generator -> check graph.php).
print dir_generateDirections($info,$data,true,false,false);

//outgoing
// $info can go unset (Used only by graph generator -> check graph.php).
print dir_generateDirections($info,$data,false,true,false);

?>