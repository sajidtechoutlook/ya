<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAADQAAAA9YXETLUpe6GgJfGwX9I8YbPaH7QwEpmL5Y8W8wKdSkPTBLsTVIvQbxeBT6hW1OkZ8jPuStZlWE6wAqn5CfHsKBrTNX8uBk0i4Haj50crZTtzD7RfCdT9KWl6Lz9/sTg9r6vGVktBqOsN1LhC0TOMpaqh2aDm6dkVorV1/ufOScRVFggR+e6o5Ri9GwZg0Ns57M9NRQhdZ0wGOTVgYKtaELH5Upc8wvElquHtu6Nj+aKtInQgHnq19luWJzwEJHbKHf2FffHeX6rIlP/UPIiHFTUAAADIAAAA0g6TlEJzUs/isvHtRsjhCJR1zcNLDU94qZI9WO6hc/W3/SJwizcDCV3VsRZKQ+wygzn4smGjJ5mSDLertoLRfxgJf3LVeZGFRVUfe5/X1aZ+P1BROYQPmt+f4KeOjWDLXWLRFieKXv5zwCkAMMj7KXUT6r/s9Cenb5MCqdpoCfxd2M1H44eW9z6B3TSBtQMPev0GJlSr1fT899vFrMQp9MAOmlfJyKqryZEVMsvNGdhVUYChT+a5jyrQVvo5GPwRCa3Tgv6OJ4s2AAAAyAAAANpTsYNs05uNjQm4jnSgeXxuwWSrq6tsa1tt74mNNb7aH52dCzBqevPRn7iU4W9xwXyiHieXKce1hADBwO44PsXtGBtkNkJto6imw/m4B3SJ/c/uxsnEcKOydR1ql1vDVba7kJHuh3IpYgTgLYlzaaJY+3fdPM/i/EST3OJQzUr8Krg3H1iTraTL/Ejcv0JQZin9IX0g8OdhvZxVBQygYLmvkweuT+9+tVCRQyOm6Uj2RJD64pqistnairrlv2USHHXAf/1/UAMfNwAAANgAAACS+IFBMo+cFbzNt7OSBoUNPgsL1mcJYJ26XyEVY21vVCl58O5nAvwQCWgKq2v4ZwSYC8es7pqKdD4HLnHoBge27Yj222DQKi3eCQtWDEruQHvMa47qtbml9lrvTjnHDyYA0sfpaaIF+nf3VJBTv3zPKzrzaCnHBtaejqSWUH3s3D7MXsHyf2KpK4U+9EjOixpxqQKFCjdX/3FiJ4IZNbtRqnpFldoSpA+De+FzrtTm/blWiKDnym6pjusph9c1u7NX5+ZUnP5bmyKjR2CM3xwNcaeW+6T5Gfs4AAAA2AAAAPXKeoivtsfa3osuj9D39tEjEDL+XuQfs0cF5fWdm999R3sEDsjXYrs8hHDp7U43l7hVsYlbzLTJgnbLfTTVPkV/vMZbbvLIM9wF+4hdT2bTttQxF/RZo/zo0U2Jc19y9Wm8GkSOMtoLSK/qx4vh86bGcJpzRVMJBg3zYKliEGvQH8c8PnmXFsk/LGHmW8ts0zvSSz6uoEb9TE4E8TCUAp9a1KcPjZuRSBh4kPIivemg3nkA5SUCLVYZu6zDQQI3k7OwyWKflDY4/RK24Jwj5fM5w0E5IP6KbAAAAAA=');
