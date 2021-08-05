<?php
if(extension_loaded('gd')&& function_exists('gd_info')){
echo 'installed';
}
else{
echo 'not installed';
}
echo phpinfo();
?>