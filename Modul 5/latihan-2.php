<?php
$a = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($a);
echo("(");
for ($i=0 ; $i < 7 ; $i++ ) { 
    echo($a[$i].", ");    
}
echo(")");
?>