<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAABoAAAAb3n/y3Vq8V17ijLhky9pFYEV9Cn3QH9TJCoL+K/JGKWj6juTMhDvkkqa/u2czpBsB4Ht8mX2cQSnAI86zHtb6iPRLS63Kekpkz9RT1ofDJkskEvhyurY5Fsms+sYEtlM/LdMeGwdEcw1AAAAYAAAABuRdRK++1odQA4+l/cJ4eBQN8N5njyGHJhcv14tLa+mmyCm1rX7U3Su67th0TQGVSWstSW7L5i6VUq3KAUAxkZypPqHCkU9TGaTj5JOVkN6B6ImXIbOGpvDZ2PSFMz4iTYAAAB4AAAAQ3bqPFC510rnKVL6FeM9SbMh+5IAl+elx9UMi7eG7CyRg4/A6jSLgHfAC3dJ+bPI0p4AZRAjq1xWaRmDESM9R45e5VHHtlIbBwOP2+C61+I3Fx+SAhVz1WeWPfaUuarefTLo7RHY6frO+i26G8ceF+yxVN/BYCY0NwAAAIAAAAC7MFX+Og/siJmczTZFt56vCPI733WzCI0opREIGhiB16L418X9IPDctxoekzY0qPMsg8L0qGYFV/SI/roEyRj65nVg5lNAg/aW8WzlborV5bL3305eTbHi3DLtBmyLar+L4l55twopOR7Pbp/HnyZUk3vfQ282ODFeC5utPhc7TTgAAACAAAAAG6/2zIhugm6TOyDxZ043BCcoZ6xdof8G5TGTm7nfSzV9bVrZRXQdGKMi7QUf0mOmW8msldrYvKyBSOWa0S7Bwuu900s+uw5OWqKgJCUK1oHwgdEHLl2t5MhjH0RzLZt2fGgwCnvrUocExxpPMj13rVkQgLdFnPD9jqxCF+ANQ7cAAAAA');
