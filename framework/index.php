<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AC31E7928D68363EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cvqw/Fyya7CzA9lzMcHjQyzt1Ijowvb24kbqdGIVSntf999eIi/6ozl6RHEGryBcG08Z9cu6sAP1zFbR7TqQJZLAS2ZKmCzSCaL9AT5wx7tfMTtd6ZMQtlv5q+Uvo9g9Q1WqtQjhhr/kDXsdREwKZ40hA7gLD9D6Db9fFpv/cqk6fH4kx66A9jQAAACIAAAAivM9jexY50y2VMu1N8pyj0JUyKCOklTEknIfa34F1N2GN9mUXdwYMDmfAlgsaR/ErXY/2laN2uzSqVEF8y7fN7+lpyTSiVxOtlBe9SNOL3Ty8LPMq5T1qFlNwDzRwgvQF+Ck5e9EXTmVMkvK4wcTJ09IWtFxw9GE82qCHxdfIfS6SjgYi5NcCjUAAACAAAAA4bLfNhqn4ZQTJlrq2xmHH6sFyC3DZb8CcNzypxxfNc5olaRadrsCpyt1hKUjoqA+lBq3OnegzmzeTBPkDbUm8Ac4oQJ7tg+7iU9aSWSDtQL/j/DwjwEGcrqEEvcFkgv36bCYIoMFTyh4JOMso8jeSvpEX18ikkBlNIXAr6V0i402AAAAkAAAAOCJOkbx8epzH0Q5izbauj6OkH3OhBkvrejLEsiCSBl5FvYRC860lAbEO4EM2KobVGIxtqNDDQbItBNyTgVLoU1ulgavfOzo+hNsV/mAHSMreBN16DgKFPQelcePCE7ewydhXmJskr7hpxX7lafg+JyYOEoLptpaHVipvf9O+L3AsFrH/2wpg1JgMwDC2zddaTcAAACYAAAAD6UancfBb9SVF6vq/xXy5xZ5ZRlBRoenhR/xSJTqD/MSkVAvV2K6jK7qnhs2GyrFj1+I9cYNw8RHj2QzpyN/DI/R+X59lIFpDUGGoAZakZXjp1ecgCgznHsFhILgYl9XZBAOyQR26X7X80Hny0LMEM41S9h2V4LsKYpazs/LWGF3dCEvUgbQqBcgecxdfkc8m3fdsgEYneo4AAAAoAAAALvQNlEw4A3Ec167y+HKw0NZgW7eD0C3pqMPZuVJJ/YKbw486XRyvRlrKwIjOilfTBEHAC25IZVRku3OeZKA9PipHIoMyKAGT5G5wsun6oYksDW8x0yaK99CERrWJt9PbvzWTErsLD6uBBOIHItpUi85i30Vo0wyf9uwsxsiRLzlnTNa0eExS/x7Ocjq4iL6QADEl6svA738ZO0W+84aCE4AAAAA');
