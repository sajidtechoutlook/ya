<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAACQAAAA/3rPK8Es9f8eIIU+2zcVTaHlpJhrgOwFKSuTmcbahjeDPDzreczxXwzS9sEGroN9dlvs2BhmRlYd5q0XNddzTD4t68joRt/QAbuEUqBfWqZypAUvemdJzNFzBeEZM0Fn3hdqH0vWPmZECfrOGPWBgOYof8OHlAtW/heYYWdFp2dbBSINMt5QGLOCRST6jf9sNQAAAIgAAABOaVxmaLXnieV7ki0ixhQfPX0RFzHsRGJ1/cs1mAgrcgvX4qLXQ8L9ccprvUX24ii/hoWVgxbJHwOQcRM5oFNDu+kn3V/tWIioMb0Zvi5h71ydbLXP05Fqytxf/HdyL4Tu1dOs7cTujwLxXLdKtVW0SZjZqZcWmOje3McjqOEIx+EabXU+K92FNgAAAJAAAACo3uw/5vSbtYECGlzKL1YHnooZCjGPcfYdm7GoA9guFkHDYTpzUYofiwVtPvMR/Oktv3t83ZfUWI3ABGrKyOk4MrqCPVexdpua4P7+FZwCNwH5eSqF9lq2fbL8E8zia+aHa8Txnkndx4Ks30mIshTfMYsjCTCeZEYWEO0divODcM0tvcsARifPaY/1QZXJ8F43AAAAmAAAAGs4QyOcbpNK/7wMInWHZqrYYW7mD+TAkWfilIAzEvOYv1tRwrvJwnvkC4P/7dpoHOTRkuirAV2zqSjFOgNapo7u+9+4QYLLz9mZNVQNl1Y2i0Z5KvKAQlanq8iO8UAqALE/Y8LWiiaY80Zae2OfdVWSqD5btsg9au2IN6W1z0/RshLhOP2hhpSUPp9D0Ugf2pdZIdg7DTlkOAAAAKAAAACzo+IeB+zsG79AMWeZ/j/CO91ft9mk18G7difxKHfJmEbaR+JfmmBwQkD6fsh8bbpIf3phl80UehOeG2DsJICBCb07zti0uVPb2qSPVdHo3ujpDcVfyWzWxiqDAgeyCX7dzraC6ZMJVkwbB+H9ffxC4hum3jEmdBlZ/ZHP7Zk/HLxbDioJLAUj5VItgIXJ7rfbAsrj/NiGhH/qo/xA9G8eAAAAAA==');
