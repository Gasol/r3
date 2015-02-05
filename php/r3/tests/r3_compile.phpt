--TEST--
Test function r3_compile() should return resource
--FILE--
<?php
$routes = array();
$id = null;

$r3 = r3_compile($routes, $id);
var_dump(is_resource($r3));
?>
--EXPECT--
bool(true)
