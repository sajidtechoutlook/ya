<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAADIAAAA2b3XO/b8RjA7Xe45905L4GsJhlhOsIFQTOykHa0vO+F9FBl4IItB3SirH3VmqASoB33TsAmSM+/KbhMfZmydesprDYZhllfk2c6wZjropQn0fXPIkHaXUNi3A7oY8jBYKGxlLHWNATxNl+aYx5s4C37S3WY0B3ftMeIZgPJ2UnikuWRirbSUB2mHHgZ/fYAxfaTJMCxFIj8oFVKbw0rBWEjReZHfAMfjKF7ZUYXIaClerghTdGoUsJOY5GnsDC9OeKw29hHNjFc1AAAAwAAAAAiGUQ6DbXkKXZ1FQzpUFbMABnQTWMJQjNA3rezFbGqwju1eNPx7OOAO0DelOIpu2JiWdbxmw2agDmvG35XHuxAiOGsytKpxWTLpzVdv/MJfWxy/xTiUkAt1XENlQiS8JX41uNLYh9SB3BlseFv4R5DiLTlh5MEi5uGMwxpSm74KU7N4TgKlcOgAgRNiY9lOopQFs6R92wAHBzIwZmBWD/3VgDiYgSp18p7cdV7o9K0XEyROoPV4uZ2kKCz4lP4foDYAAADIAAAAEVS5wiMnkHHi9V8ho90JCsDHFlhcjby3EYvKJq7AG9FNFA26aqe4lt6nhc5gi3n35JPyKekqIJkeY/BxR65Mii8zuZOw7t+1i7qsTrOi1w/IfidF9b52LQM5rpOSEJ6nfTrm51Q+s4gb6IAjPyHuKvmCfUIdYlA07w00EmbCCN0L9cHZH91z95qeJrKughJuBB0blM6bz3a1X6f50qYV5ft1fmKDEtR56Jz/rsrjqPtkQCILXUG0P3Wbr6befr6Lde5f4CjY2UM3AAAA0AAAALHQPvW3ec34I5TJliPFZUZ8xrfiK+EUAt3n1rtbPa00wLq94zHeaX4C8OoeWS7Fvy5LNtqJY1QRierRAitKOY/g1lZ3v0MKad48ICIonO1n2W1LJTuvao5QJJkMtEeOJeKWCuDi7QcdxPkooxNs5V1gqtl4VscrlmgUv5WwTkK4lpuIk2osIPln0gX1YknX6sLErBtlIMcmLu4wYxsegAAYXLzmFARXWcaWEv88dOiZJ3U5WPzAcHxJq1C8ickY+9mRG/ZPlHKGfFUwKRa0OTI4AAAA0AAAAMAn5FMxVG53s72QfgJCnP538GPzUCKDSjiRUNvzt4hoo1ZJiXRl0G4/JTv4YvW6Rl/AQOVaL264iBdheoPeAf7FT5mlu8gcdPpnq4qNOtT5YXxlXhizXoMxs2tBc6AF6ypdKhtm0TtJ78eAbA8Omq6hU2c9kaccaj0dLS+qyYl3v387IBvzxGdLTeci0rxB1NoDngHGiHP8dZ9P0x62pEs52qAOMzhh/3wl1tCc577zp9D426KeXJlYNSYabmBLJEcNaXE3MHkDj9R+K5wJhUQAAAAA');
