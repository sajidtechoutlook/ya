<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('341860788D681FFAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/G+Sar6SvyGRNn1gwExfhair33gt8oNKiXWIxxQVeCx7U2Xc1AklztbYyHOSYYRG6n6FGG2ZJ44fm9Nqw2KzBftyY612uLghUy1jy2AAe6an0X5T9NrQuqdtXkr7smsNUFoFDtSJNblmBewvS8nt56MseCnjNghj1E1MwLZzXSCLrAHStL+jx1TQAAADIAAAARSySJvqvNKScYAGkSXNQR37nJn1m3f0MmzzxWcGjGp8lHEliUQKpuHulNyHZ1lTpT+6BfDYzSMHPF/hR3Cp5opWZkYlzmBH11M10SmYi+DKAnlMoiVG+qvRhMzEWGtIr5VHSbd95MlwBd8vNZGRLTgZb+gRydOovhgZwgYpqyHN49eR1Pci48IYf+tNa0sAz1vT82ni7GXCCIbfWONQrc3poas4+0Zn5x5zqcJ8Qo3Yhq9Y6N152O407Aa0keCH3e9SGHQIxBQ41AAAAwAAAAA9mfXlEknM1+s9Mm0ACcR3MYVjHbxXPrKdmWazIvDI0gH9oL4J9yDny5RTxYBHMLOrns01HILyWuPbXdm7r2mqccQTzxoMPED6gu+53miy//5ogLfSf32lC+Tc5UlbvSukVslmwFfv8uXz1Lmq0nUnnZAwYlDqv9WOmuqpS/onB0VY2OizD5NWc58wHoeEeZdFLPONexiIhhrHzllljkIbC2p8yo68+sb6MDXn8h7OmVkUS4Hei/D8ZL/ONTfZ+dDYAAADIAAAAUUlyGWM235OCjLh2/vbPN5vcX76+G0kwJwq+pVlbWUbC/CNypUyb4fG/U4QBHy+5Om2FroOTxJT5x9BKVNk59Kyeac6Owxxz0n3BPlEc2IvHLixp3iYrXGsTUO+11xHBbwM1X6ar9SHmgjCkzeXDDq/qKZZKYLz9/SGEL+e//WYuneE2xr4f2ShTdlfR/gszgQUb2JOYdpaAmODHs8R9icFKddfZZUoTuV3Y42nc28apxAaszvfnsf93CyxzwpazlyAtMevCpG03AAAA0AAAABGOmODvXkoyLG1RHTmHJKnHgQTXVlGomfXWYfB7ojS8N50FAVyv4IWAzU7OE2owovYHK4XCMkmK6fnlL7RkSF0XnwLR2N+Mq/6RKZ1eEyrkR45jeiSbCMzR5jIBVAUzLA590ZoLGg26dA9QII++oMr2Q4CDMtAE+wfiZzi7L7ElVXdQOqfZrRuwsQPXI/Vp6Av+OrFr3K+qPTPql/QeIjKSqlpBBBqRts3t/l8ZC4yxq1n4HHmmPU1R5SqrleYrbKYn29O/UMiMPOyErexLIrw4AAAA2AAAADoG+OMwLFWr4T95dtlbWBOBRpC5m+2lLC45wbrcaTtqMS8uCsQ+LTu8N4dI63d0tXbrL8Y4i8CpphGpMgu2++opMe1GpSqDbIDRKZpKpPz1okxIQ9E3emW/ICCnkrNXeApkRwbpazMJoJ+2Cm/bYtvJcX+3PWSs/VAKv2+kHJjWNNjUVkaqcoVZJwMMJ2aHV6QhpwqNLNqdYigVNhwu1XFww+EEFkm4U4P/ek3QpQOPMyRoa4yl8leW+HtBr1RcxGwMcFtmyOwerWf8cxO4huXQPRxqB1x1VwAAAAA=');
