<?php
echo "<pre>\n";
echo "display_errors = " . ini_get('display_errors') . "\n";
$file = ini_get('cfg_file_path');
if ( ! $file ) $file = php_ini_loaded_file();
echo "php.ini = " . $file . "\n";
echo "If display_errors is not On, edit your php.ini file and restart your web server.\n";
echo "</pre>\n";
?>
