<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('919359AA8D68264CAAQAAAAWAAAABIgAAACABAAAAAAAAAD/v6j1pUddTO12liHXljg4vfXdXJh+ETeqCY4i0W7iPSsm+bWLddAztMmmDGHusaTOu+gtOhkbixldt60enTrrDcuYXlP/acHDPA1Ngq5bxz5J11qggQnr8z8NLQp1jsmHx/o9MBujYNY2XA6K7pDd35PpKsmmTd7+wjqBarFwtrb/reDy9LWDHjQAAABoAAAA4MXNrWfPVHTjFlBCPmFqXjjICGbhd1bU+fY56YGG7D2dfeLDPdQmINXXSXy4H2bve49jliVJDSGaaPfTZLACNfh0SS1I2mbDpmmokYhao9cM+blgn5yrSmGWqldlML6NXCAwLurwJ3c1AAAAaAAAAOXChpS0YdZhyp0avmhGEkiKGWoRjkMgtNhz9PuoWYNS2EvI0eSOxJ9EqIZrqXRjDqlrOxT1iKGefBRoTjNF9vOklsVri+9QNKdVTZq7aWbVWacizH35Nw6/ofodV7HnS7hs/AgpZr9gNgAAAHAAAABzypTX52a4nxoCX1lolggPXFGG3tm8oXzgOKz3WkgXQry7c4THXUsH8dG9w+ga3GbDV2ognif86zvi8xtE5FJBGQSlANVde8yvnS0Mund4SzMWIV+6m8eu1W8pdJa0ip+vwqrhdoP2Afh05B4RJU2KNwAAAHgAAAC0WJmgecBAz7QJk58xjdaOd5/I5elC9yutJ2WRXRdIEAf/vG6nKY/86AN58S2CZ4XD0w1XOM2/vRYk4npYA8VCU0/nrSECH+EqNXyDLbicTCDep4HdJyhrLLx9on1GAfcZ2xhv8H7VXrP9Ehd+CXUc8DgqdaoWl944AAAAeAAAAEi2PUksMJSCzvytjisTvom9zL5sfYuQtGZzxN3aqJgqVLfHG0SVhH7/VaiUfjIciqRG+aiksM52glCFBJ9pg0RAs5Yqp/46V4WQj0Nvsm7eSG8Gdm8VRsXAnKGuhygqNMp8jSRfQRHjRIjrQKS+3NfeMqDq00oKuAAAAAA=');
