<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAAD4AAAAwGWhLhGHtvre3kx+f0FVLRh9ys/Wj1AwpEEfiVjR9Z7kA827K0p1qSNGoybd6qWnxRqPcBWL6HyssXC+8ueAkK3n2/Z1ImqlPgKZTpk222WOgveKB7dYpDVkjoAXcwC8VcMfZ1QJRi6XQzziMQcZj9t1JtRfWQNcqta1bwlDv88dc3C1ipxR0ABT4ya7KZm041JSKyRSQfZ/+gFGTmYwkKTRZOn9LYCzi00QcrlMmEhPNqApy0HY+EwKZAlJCa122et+91vMtNvVnF9OSltf96yJnwmoJPEbvb8F5OaRUfFfXH6IHCh/suJI+N3MpWC625ZLZucRHKQ1AAAA2AAAAGNXc7nipTBIgKFElMlh4E2UYisgOd1rqBJf8vMdpwoFtLwFBKTRlP/gw9URpF01hQdes63NwCArh1b1cM/HllCZjWGJizis2UOybLDL5dGuM9ORpI4XsWPS217ypVFetQ0FCQX3EgoJjtXDJf0r8aX3NKw2ERHr0u8JqDysT9G1NhyUxGvstXIxLqAc/cpfOEBaaVwkCVFpwZs+kN8DfWTgCB75l5cEPyjxhJk9Ot1ex+d2QYqM5eKrQt89dR3LlMwHkVMmh5RAPyTCBRSj0lR/2Eu/ubaONDYAAADgAAAAsPRzZInThe0YZ51um1JhsbqvUXWj8WXVgdAajVg9yIub5hGeRkO6P2iD30Fg3nY2cY8T29MLZTre2fgOz8rJfV56JU3WDn/xoY4tLgfM5R/35vDbBMSAxnrjU6GhKiHiBgVOGFTF17q57+uuBBFdDWuGciYfIFU3dDuWjIixwTxCDKMUNLG3DL4lqzShHyBlKjhm6XJmfJS2GZ6jW03rJpGwY6d97EFwKV/XnpYvJ5sr+ogX9KQoWZ9KdJBlCYAevKegw2eZCwKvw0ziz9YJAdaIdF9KacaMJ2nDlbzCYWs3AAAA6AAAAP7nanNYmMCwCdvmeLoBVWZBXz1OPKQmeK3V0x3QT4zZJeqqit+UkriNVLx73kWGN1RGC74QSprrwsnlAdTwPCAlWmyO4kV3Sn5hipsJs27BA3rN8URCOctNsbLHRDdaARVk4vZhLEK+RxZ5odSJ7FqPx1i5TYRLcUHkK5JK6u42btVBpqWcfkaCnRgH76BmoatAntenCOC1H78Oe/1WPjQf5M2Pv4HT1x9Ub13c7OkYBRAPe6dhOFu7HC7wYaY+8I6WjCsjy0OD+gxT22cUXmJs+V1I6oTWQ3Hty8SK1avKGaIAP9Jz5KA4AAAA6AAAAB4Qsd9M5WB1eFJC9PbPOK5+48n/XnYiGeFHqlkr8SEGWprjIiLjRL0sClYdm+5lTevjoNA2MsjdTu6wJuZr2i01zjsZMB3ToRwoi0YgTBfm5X9OHlBM6nYu+maAveN8+NOPABJGXrkpOK7X6QY/yV0u+iPvPoUeJUu9PRZwXYPs+ChUA22L1kz/NNh2bju7TUeU8cH/YkrrK9JfSzGaGaJ6CGuAe0b43mJNSK3trwUZSPpYwconUHHaAA/ZKHfWWeKz8xRKulVJFYR8IQ+KfvYEx3hzlQ83dCk+gR6ldWTJtpVjyYYEH78AAAAA');
