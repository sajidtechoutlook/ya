<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAADQAAAAxn9LVKBuL27NjXaXQGYh1krzdx/SaMOgo4EDdTeDU8VSLdmgEwCDSsQsHsbDZXqTp8r5R/S4AT9VQ4JxZsqFltooawg6FiEW+doUzZdSyDKnc7dTNiQtQHW6jEDvhBEICXwvI8GPyu8ITQmSNWQiOZ0VyGtYrGLFYUZ4sLZOG+uOEwrpgQXJ+9CrrX7wYOsGEhmCPH8yqqoE5Gk/rGcP8aFA5a0mWFtdfkHpeziCE/dAtwWkBnUq47lgIFQUP2bSak7Nn6y17D8npbYslG7PFDUAAAC4AAAAjdNZgcbHcHUdN5y1TNXM4Epl/oC/KunsVw4Y35LefHhKefCU6btxvBKobSW5sbzc70LeDeI9P+0ao2xmHgn/+fD8OlsHTZiWJYNubMjvfWrWhY1hAOre7uLEEns05tYI+m7fk/7m5cHmRw1GwVgw6i9+GR/XF7v61HS8huQHN/PJmlS4EZqCXYYnSFqZuZk+xrlR9hUDkvr3uH0R0nIK33wM7mDTvSGzNxY1KI46sPGR/2ARWiHclTYAAADAAAAAOVx9JOLbNc36EO7ZcMDOJnLQKP1YvOHHaFozwEo6ThqU0UPA29G4mXvpXDy+g0CaInGFwBPxSNjO8dQlkz6VWvhnfPLRSoSJLfhIyYOYkfqqH98Lk4y+yqmEHoKBf9rvcOAP5P3hoetsGa+un3qyc14pcuO1OpbS5h6I81cTlIaxK4Y4gEHwzQLj8j3DM97tl2eSl440m7YZfqqzCJDqfGCqCCNp3XMBdudiVqGiTeRSCSaZfpBTcUSMG+uk1iOMNwAAAMgAAAB5pk7fVdM67fW7gDPUs5EPCIk6rH89UtjFlxebu5DHWmxQTpkFnwafbIu8U+EMVBDh0+a1P+V3a9YHzzcNfkgkdm+za0JAtVxSt6z5+bO7dxGK0BdvSADP68UhMRQHyQuyQ6BlRS3+j+pL4F/J77yKHDNBvCfz8DicN7Xh9BCVFiH+XyfbeSGfkZA7OaT0LMpFSWpejWszXUkCmAJh8UDy2NDHmcWsO28rgmhEiltm3FaxsnlA67zbD2l6sL/NauSIbElaRAzlvTgAAADQAAAA8TuFFKcX3x3V13i3W03ETlh08opg3a4DyLizyoEsPc1NIT8GZ2lDAdkdPFwUJeegOl3/JlfIgbkxuRGxPCML2LCbnjt8jItk6CxtwDm/k10fDeAwYLwJP+AToYYWPTrHvkjn/iyhK143hqweqhhV9uA6+TW55skUEoq5AZL6CO5ORT3wvu/iOFcMZyMzwJ5gbgnWzyO0QYb5R/jCK12tuX4qbcIWUYWd+AQ6ZFajYDMNPRMNLNXi4zJevZIo9tE5IZhJSjSGfKZt8BM/51BjRQAAAAA=');
