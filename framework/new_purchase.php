<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAACoAAAAsfgDxuxokWAU5cgvbE+m7tzrjH/4mpNzCaQuQYEoXaqPe/C0SLt8PD6QtB5aUWVPznpSsv2Kaapzu/GvERK1bwYkCECcuRdLeF+c8jHbi8DXiGMfuGO2d6X/JuJPwFA6GK8uU46KvMH3HsqcfXnUK5pLEqtfBnj6LMeFEvgk4cyn4KF9ubDAP2o55s72vP4VKrkPuDNydV2WO+sTpwPqdyAx1wrHU9iRNQAAAJgAAACjaViLq7um2X7kznXcOjmTUzkHQWeZFVulQbW3pxGHxh49tGaO0AoH5vJ/QdD0Oc3KVuT+I/+VIr1Kzl2P+KOz6PSxRx4ho5M8sePNsrpnQF63TJw4K1Lca03LNMCYw7kJ/EXFWIEcOlITKjCf3+DxadIBb/IRjMRg32F6d4fQ9my+f9HAAgiW7tC0aBNgoRB0IGeEwJljzjYAAACgAAAAAhTBsQteq0In1w7A0kIqlrXl5Jc1xIBGJoFtpO5Ml10PJq0i79R0KvIGdnrK+ijSW9O7LIS07coRLZ95vOh0fAt4rfKri+7PuSDyaCjipQ/hrDhuRIKuF4HO7hIbt56WYezWn1fJih1Y3dHG9QrqpyK5zbxihAjueCwjmVQLOQAIduKojBEZMPonDHwA8cs7bZrl7C2694FvwXToOJc8njcAAACwAAAA0qmP73zg5GwhWjdytsJVpOOu6bETpE03ycd1P/UvZ+KDUvGV4iLwZ7/LSGBnnl4vvl2ZVwfHY57ySfAgufwL1ok/j8zMJ1POtV8uKsmY3MOCU1zY2+iRsaaGM2fD72+nJPh2rlgmiTLxBfcAVOpDVQALZZrqVK7mUrmyqVllvuCAZcRwu6YbgPXeZJdMP+YKRc0Thko84ZAgJyub0EHeCQ1YA5Rjkpw2zWZKHuGw8mE4AAAAuAAAABisQAhWb7VROYNPAFfbLLKwmFwr4Azxd7OePIHWmc2sd9NgjQI/sHJNTImuebZB9n2jkTL66cWTiQ/0VhOISSMrM0Pq/WZ7eWF5I7lHhp5ynqjm87RyMyYps3BUF+5hjpb258tmB1/mhA3v10NUsh4aSPoTKpaNPPmYQfpjSAGcVgKkTirM1aXtaXsiZJ8WEtKpQz030C7hlYOC1L+sZfHg+xkEBJ/wGVC99A27w+OHBMYVgXM5c3kAAAAA');
