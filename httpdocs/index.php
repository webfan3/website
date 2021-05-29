<?php

$code= file_get_contents('https://raw.githubusercontent.com/webfan3/website/main/httpdocs/index_default_stub.php');
if(false===$code || !file_put_contents(__FILE__, $code)){
  throw new \Exception('Could not install initial index, see https://raw.githubusercontent.com/webfan3/website/main/httpdocs/index.php'); 
}else{
  return require __FILE__;
}
