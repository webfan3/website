<?php
/**
* continue with webfat...
*/
register_shutdown_function(function(){
$code= file_get_contents('https://raw.githubusercontent.com/frdlweb/webfat/main/public/index.php?cache-bust='.time());
if(false===$code || !file_put_contents(__FILE__, $code)){
  throw new \Exception('Could not install initial index, see https://raw.githubusercontent.com/frdlweb/webfat/main/public/index.php'); 
}else{
  
}
});

ignore_user_abort(true);
header("Refresh:5; url=?start=1");
header('Connection: close') ;
echo '<h1>Setup</h1><p class="btn-warning" style="color:red;background:url(https://io4.xyz.webfan3.de/assets/ajax-loader_2.gif) no-repeat;">Updating</p><p>Page will reload soon, please wait...!<br />Downloading Webfan Webfat Starter...</p>';
flush();
exit;
	
