<?php

register_shutdown_function(function(){
$code= file_get_contents('https://raw.githubusercontent.com/frdlweb/webfat/main/public/index.php?cache-bust='.time());
if(false===$code || !file_put_contents(__FILE__, $code)){
  throw new \Exception('Could not install initial index, see https://raw.githubusercontent.com/frdlweb/webfat/main/public/index.php'); 
}else{
  
}
});

ignore_user_abort(true);
header("Refresh:60; url=?start=1");
header('Connection: close') ;
echo 'Updating, page will reload soon, please wait...';
flush();
