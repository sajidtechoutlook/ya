<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAACoAAAAZvBNst0M7gKziYTfZJLPWA9/vmlRAKQuR+GwpajLpJ39yuJfKe0Oe19MpMk1v9uW3N0h93LFoldHcMbPCVy5pxjB6Y67BA9KeWuazCFcybdLCaxxTvrrt1zd7k7ppntfLLjAGcJMgVK98Z+ihBTCZpTChPAJDUmp5CdnvOVDWlN0ouBT8GsY5EW3CJixKh47mX8fGXIpBXHuOJjtIkxcCY6ZDBIhHQ+6NQAAALAAAADVdqhqpNNPwdTc4Lr1cf1ctn4kJRACFrg925em/8wBtW3XOKdIXyOMhgL0F97L6nFduCe4N4TlG3YTU6uCFFdMlStR9TGLqLLVtY1HIR1c7oFwnuXjy4H+1XOaEaqPDXwVz0z7x6TLObmbkUg6xwsPiAJDZRFMhrGsPNOp5CNGfGCtfFbrdU2VoRYeXOpza3L7cKl1P02oNJLMm0Ob85xUughmvg8pqCwcUxVnfPNAuzYAAAC4AAAAzZVxrYoNeKlcUtx+03/Wn2GAMtGT0ijgbAA3Y6YXmK5sqTzpzA6EVItpUCU+PlViJSUlCA0HPpEjCMpsHRNfPCEH6hQqrfo5C0HoCaM4TRzdrk5ot/+iWw9boNbNOGiUlmb2+5yEEKfPNHgEE3N+w+MdRuYBA0OsJToC7p1K9tSEHcj51yO8lGp6039IaZDnZXuMU72mxsEkh71N3bwLuTxV4j6hqIOVMhb/VfF+4wghGf6sdl7zRzcAAACwAAAAZjOnxURVfqw7dk+juomE8JljFi+crYbcDKhls8v89tUxRK23uXkm7Lj5AW3HyJp+7INmrRrG211O8kY/WC52KHMfX72KF/YlZh6+tle5qur/92Dbg88XriWehisT4+qmU4Gbo9b/GzBbl/q+PZpax5U8zQ0pV1PWhwlIYiCHgfnvIAqDujNQICjt8nTKB/s/fk7I5RsHUa759HBSTyRiQv+hHPnPzfN2pMI8gjEJQ504AAAAuAAAAN630BDoUM/emfBoXS/JZJ4BreT9wwJH/T3PrriW7NV0JGOkVN3kO3ewLfX4nDlpUNnb1ERCNSP3so9+8K6+PGt3XX9Z9CDHdQovjcw5GFw1kfD2fzYXE1ZVd/TAz5uf7n4pUPFtAtP2EXz86U4siMtwmeYM+In1qRxft1iVALhsRnR9nwPZVuigTs3P4p3jvyAPrzw89OXIZTiM3chBjOxESHnV5WiU2eTavaVxmzPpD+ezo+5d96UAAAAA');
