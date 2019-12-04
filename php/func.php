#!/usr/bin/env php
<?php
	$functions = array_merge(get_extension_funcs("Core"), get_extension_funcs("standard"), get_extension_funcs("SPL"));
	sort($functions);
	print_r($functions);
?>
