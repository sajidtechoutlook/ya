<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('341860788D681FFAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/G+Sar6SvyGRNn1gwExfhair33gt8oNKiXWIxxQVeCx7U2Xc1AklztbYyHOSYYRG6n6FGG2ZJ44fm9Nqw2KzBftyY612uLghUy1jy2AAe6an0X5T9NrQuqdtXkr7smsNUFoFDtSJNblmBewvS8nt56MseCnjNghj1E1MwLZzXSCLrAHStL+jx1TQAAADIAAAAq3OiGFb4m+ud+CIglXnb8uJuBvIQ0pzwMYXAKzIV7MiSdE77hh6RO6hk0jCySQhpgZupt7Y6lgGzpYjNT2nI4Z5o2wq/fpX6nFd6PST/Q91QGzr0zEfT0IDl9WC8qYwvZ7pKe0tYbSBnMct8qNCGigyS0OiyU5vpr5w9Ea9oPGk/8egWzEF3/U6BvCUje5H9WT63oTXH5CBQO7U4K2e8sjeATQWClWAgAODwZgWJ/vcDoH14P9u1lVNuCXC9Ds60O6bVIt6cSXA1AAAAwAAAAKi8npzMyXPNCLfrzQQyv1p89qbNEkC10BgCSESAS/+JwIPz97OhGDskxoGv+LiOlzGlIyR+4bxrVwIyPTSnVg7BDBefLhboYiYGmn3A+rAV2jrkiDfCx8q517w2aVWWhe0YpZT8G8y2HSLeQCaccuBDnTxlcQ3vHmmQZPQDgHiZnyRUUNm3pPpo7nRoa+avF28y2cPHoDLREjL5BkMnR73MjkDy7+CfhEdaoF8+G42Y07XgaO6HeM1YHOfukWv6fzYAAADAAAAA5o7XpbQTwsjcYHQfU+Ew9iJ8W/Eb9SkqCvreXFo2HZZgIXsFs8xZYslKB4WG8aos6SqS/Qly1n12OCjm4J9IISYn0/Td7MPEjD33N0jVqvY8UllYm2hJFXKmbcDTa2XtA/ybEBYqefAHEPaB6vubf4si474UzVrHwtLo1qpaElUE3RjkUbgo5JsBl9nHYyWqnxStdo4J82bdFBAxY54LrQBb689MQ1Am9NuPoqcRsEG/m6BMX6Uz7sHmQuu/8LZwNwAAAMgAAADpk9J65kEUZ8BM06PLANOzzvXe/3yum1CijvNsQDq2jEThAsw9/M1IOFEHbnvqOankvURp+oeIkOc+3bXLRpy1SNNbelEL5HQT0YOakwxXXoyDbNODKTpSksZw3ir/R+ZUGQ5ubj8YjwO5wz9Gk6RRp9I1RP1+NKpS5Q86bxrQFNBShnxiYSSUewME0BSxqNv0olVhJbAvljdkqe6ht6Fc6rYAmJNO1aSy8g5KN3V2C7piOSHVLq5hcF74jJCTivDgjthedH8qDTgAAADQAAAAauAWsySHyzSYfp0zujJAR5eKOEMks0BoBnPfssmRq1y1NW2Rd5QRqJMX2ySa3jaeeGFIsLMZAoBIfg708QKO4IyVl9d+k3gxkAMIv6KPMjCyjHse/ARyblskhqi6trNJNMHLp5yfM2GRXfdyhqihOEUbiwBP5X49DjqshadLXxZJgrnPlMmha/BufoGMnGpQ2Z+uFnGmgubYRrbhJUT4LFBqcYcbBeDA6X3KWUm1+j9HT3dRZ0Ex7WTJRVRQh4KRPYJpDR1/uKlqTG1LVP9T8wAAAAA=');
