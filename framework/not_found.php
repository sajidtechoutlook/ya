<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAADwAAAAy8I/JzkZfZM+omWcYMJCj1nevbjzqZFK90D09wsszVDYpKouMpmhauJWJcJvIKVlhGlJZA2dRJwcKcQEkRlkIAfqeoy1GCY/zl7TUCqXyVxSGPge61CGtO2nwDe4lgHtCWrlDW7jw04c+Umq1FInqB97G32hDTsGZUaGEri3SN6F+Z2jB5NC1+V5rSOcbHzqTHYAcPaoBvk8fwg7sjtbedLTYqKO8GqWoskd1QVUpUMI6QsWX4wUjbMQKhTR3zMwADBepnXKgSsS/a1fFH8J1fCYQftRlARSg7X0w5TgSvD+r83E7iOoW0vQVE5+KXM6NQAAAOgAAADVNU/WDTQ2R4OeK1uz5Y5BQz7PkXGSFYiKR+tMC6AATeFcN3N+u5cf3jtJjSOxWI7+XTD0addhEuWsL8MzAT4Iyx02oliGUrqv8jO6tVjznVD48baSIXDkiBLfipy//VddOlaZQpQ0/MN7F91EpLPt8hM3yhU/+EuA5So0eU2SUfkT89VuQa4qb7x5BImLyiNCt2Q2P8EoheuBDf1ozkkhOMquZDzufG6NA7UU+pYU7tDqoaf0B9bAqazxa+xYo2LhDPXUB2s/xzZ0JWyN69Hgbey/pTOGzGursEaHbj1dnHnJ/u/saW5+NgAAAPgAAAB9rGV6u8oVOh1N5RHhdkNUw4UJJoZzFopM19fiaYYNtQdBEha9CaOoEHTMll4VxrQ6mQek6yxivFf3+a6FnPydV6D7d4tCXSGoSmcLcE14A7jZf1yo1ionKEI0P+83DLXuDITkyD/ISid8gg/hb0avraff5/s+auv3v5giVRAfsbi7bTA7yhcVnlYxplcWSDa4EqQzJa2URId4zleDLvXNrUSAJEQRosiM/NiS+RheuYGONP7AkxRauMvPloESeSJye8+5X3zrBakg5gqUkWFuREEmwRoanYOGfppKxHSVr5Py7zg9BQwan1hCePuN9HuPUZyKXwjDGTcAAAAAAQAA8+00pzeHPlWcA8E+/1PYhOKORNrsMPO6ninidUMO9xnp04AJUgd0CG/d0uvP5+YpKMgLpfXhGBCGhF7cKt03LZTc00jjv+/Fle1MUmVzaJS2VX8B6WpJjQyeBHXPh4LUvEtC+eVQyHXVbeE9nqaJX0YL+96yf3Tdon+OeIN0naomXqDp4IH/74rTD77I0ITVqQ+1grKCSuMv28lfuq0oVd8tVLTPaEg3YZVGLjsbO5/69qw1Bm4/n6d/3Cg8XiDrIgrv2/U8gHtL9NBh3AqzdWh30M83Eliy/Z0iDLa/aewPW4H+ydAbSEvnP009hvsKIXVjr920n5nG5N63S8zxtjgAAAAIAQAAYlkLLSV8zkVpKMrAxsqZn8CxeeJaM3HCEa8fBst1KSBhuew8IYByKDJ4yqbl/R+lZvqRbDWIlROsmIkE4XAqhyzDLLZR/oS/KhGOeGq7Dn+AshFIMctPDzQARhFyf7vamNOLxZiYUPQiF7mmCO0mj2wXcfsMiFsoU5ky6uxeNLXQMUMUHRmyNXgQZ5BZx6j5/qK0z499hpI5GX5xJyWCLqXTfD+ZM+F4d18/SuDQ2Lg654nIzxCwikI+7uUHOK5XKeeOqI+c31W3OeqiMPSe7WASzPFKeoHbFJOm8blpGX14NzpdZdTNwpjrRsF7IxV1LhJSf86O+SMqnbIAR+43opGcDYd1l1loAAAAAA==');
