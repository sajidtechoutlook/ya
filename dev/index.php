<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAACgAQAAM7N9NT/oIGtIhNJzO7hYdAYo8rB7exooAaw06NU7SqdWaNA4DTArw63DPswVBlL5k1MFVtSEYGk4kQ+IAr2QCzsOMFTE5kLZAlMlYebK1iPe6qeKnGY9s/V4aXSjiKQiymo5zJb4mnDRw/G810jzBwpZump9kScznDxy86OJW7IfcYs/PTnQGE6WaQJtwrlItdkdILqyb9DiebQnpFSAh8GrPYEfIBDlnnQJC/gaX+WPV2sLIFSraJoFxnt1E9qDrNDuKR8+3W2U3sRCMomBEcz76rAriHS5fAJik9sQ3W051rdPcmhyT+o1hR/Z6aL0rQHrL5EV0laS3/7cwTZjVtxRuUNEhLckC7ZrZ2ehB0kPbOQ+letnFzIOF9Jh+9Dqd62S4pyOUb79rOb3DFzOuF7HPUgApDykIQji4weQzP9ry3A77MmhD+vbwB2/I9XoM9aj4qxw6x9LzB2T5B42a03rYCuF2Q12umDLt2fBe+LdQQoYsUTyFiud2kKMpkWf+Y/J7OtuzfhBpc5lgE8S10H82tkh1+72HznjHMnIggo1AAAAoAEAAL+JNK8LhDfoVp6mzPBNGOo4xSbNhOrK/t+aul7lVo25ZxGAP0R8D4ISwOKIdOQ9ORUjXeit4zLpkrPgNZQJb9C6TFR8OftqX6bRjrlGW0bhydy0jgH0kwS0WQSr/rRUBsbGXPFIqzIf9Aw3eu6fqcGLZfxxDM73a0AKIxHIxIi3yM3NIbUI8lj5t0I5QGUj9NCqXudAHoanTyLm8TxGZ8Pb82NI8/bgrW8NSg2grcAWUB0HkCWOMNghBhfETKQfHZFfLi3xPlgv5A8+iKs08RdbWbyWk420TpT/Rt8ChvLvLjEOi9IDnFtPKQuWgoqzN6GE7GSBy+lADeSYwruaoKVQaZ7whOhZ3hOZiXycGNa3LP9iBtYGPEQgE7w11oe0KqegMdb5laCFi/AeHKqUbu78TWW9TFuiiJ9Xgob01wAHVjRbo3d172MItiZCgMR4jdJ0Ej9NrUrCEDVpT59Exgrjbp1YzjGzwLbgCPsP7SIiRabE4LqLEsejdRmuxU9NBROOoxo5WzZcUVl0CuXl1n7f0HHKoQSMImdxecf4fPY5NgAAALgBAACNgOMG5ohqs/EPjEfhhXVnu7jEhqbo2llSLlkh5MYp+c58uovvi9r1Zte4MI3r2lHaOjZoOUW7nPCxj2SE76Eaekkjg/622ul1B+jc+ZBBWnYsJTJNOxh6Z5AreniKKg7RhI0Oe3hGJZeF/s++uIEk0lh9tPzL9kGDpWwPTJxfzjJD747jDihrX28gfOtlv4C5FcBaVfajrr4vcU42akrZbcF04gacn5yxyZlecTYvksEw3JDJUyT8yUj60+NyRUtW3Zfrjzwk/Pxqcur8OEer0sIQBVvNG5PSfTxCYKxjXm6h3oYrzAxXXN+kql1a77rTMNP88ln4m1PnaHqxg+loOrN20jVGsocJvkxcgHalN9mP/OENNSlKJX23HSQ1zBMS3DXz+O39SKlt9pVgTuloMmrbg6skt1zrjk8Y+iLNpQx3aB2DnqjldApLImhZX9S31ognXe0F7m8mx3ZURypXXsxezdR4a7P2HQdBCUFTzL7eP0o8bkbX86EDE6od9fEU0ORYi0MGaq6AgVINWOHhsphlXXwELCWEkoC1CkE+OEM4LQuNGWvtkWgClANTTLSBL2ZwmCRnpTcAAADAAQAAMFnCEcfc9ACFJlJ7D7/KT3njqn8+Vs/zXWo90iyb+rfJ3wCq5tp+/34D+noGH62iodBplveV31T5HxgZJoWME7tjyG5ZXx84MJK8fVbXvDDNw4HsCyYGu1PfB9xWc2L/fmfs+9LmnaxnE3JseH4UR7bl0vbugEZlU2AZ/9wYB6WdPxZUWYpFruHDmy5Hf7L+wM3iV4fJhPnU/tPT8hDb4CaAAVZPdQGRu7oEUssydp+YRTi52zwFql7vkMl8OdQ/zgh9HpztC5pajSD9mI2/ZnyeC3Lg7C9x3rgbbpWYTlLS7LdylJGuQlmUdxG1ReSDrbidyf73uDFP6M6frTJoVrGuuKRefLh2ruTNdOciFl0sCDk6oz2NPTV6ctDbaoBcRvVg+zWZ0PY4kWXYZCzxbfTzVy62HxbSUEkNZuH3y7PmPe5rnZrOZ4qqHvh6FpSA4hkNwdxqkbAcC/t6GuMX+8WkC8vSQcEhIETtwpcFG/7ZheMYN+XmlOwhKHNRlhBcWujLuax821YLgBwpH0gvBEf+l+B+za+QJ15JuOvQT9M+kCijuEVblPp8B/bL7TJ1uQa3Q9xsuXLcjMkrc0O5IjgAAADAAQAAZjOZDBCdL/lqo7MhlGX8EqpzucDYNI/AtmpWk8/b7S0iaDZbX9zbWWzpkqRN7WoK0Ho4Kw5DwKM3E9Yw+cUyBAtJver3sLYv6jJxrUFcLk1xx/g9WYCFnARv+HKPkyUVs7/G458DUHmN9cihhdHkikdAA96Q48kBXPbjobtq8Wg9GgWs29MBp85Cy+LdomUvnBno00AiGvbS2PtzWJfG9RWilzjEwNK2equGgMflLrYkNK6pz6spMfjjMH1zoOsg9Tnjl0I/70z4k4hO4fGDZR6GO9LWfwwtJlAsu26DPdd7sEiYC5ujTnUmrrHyQPadpMalQQQStc0uRoXslt4rZgf6g6qr9XebSzuqAc0+CIClMMSVH5yBFVc3ff/rAFpXp+KyBnIGWsW/tmzTWwmghtaYw3G47EWVqwFRcYamKHZr1oqHl8HPb0WHWHANyHZoU/gNzfx1vTyhiwr8wb64opI02V8+N7hJrWU6QlsVx3Wt4TRl7AuUcSE/gIoQmrR5IwCPzvJFPzBAif9Gf1Igbc/GnmG3z3ht7qZ1CgxFFIh8WKXHr3tKWCNsZ/TJfKyasRX3ISNWot2UXTB7PL+16wAAAAA=');
