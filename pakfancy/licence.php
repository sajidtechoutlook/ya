<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAADIAAAAbdRmgJ5uF/0XS5JzEJBByJ41mkYF9XjfENW5dYDVSHtSmlsJUsnI6fYVY8H96ZujZ6nfxtCI/5VvyB6eZw7v0ZLiSVnQVV00xf21j5kr0YUdK3tRQSytjP63gmp4JMs0kSoTxkSrWricT+VEdkXwa3FTMTlxYJRR5fXteXoIEsAkyl9VDRMLcZiiJqK/GHUvqu69UAbg31itVc1LOLGfSHloF1rzY700y56kulU7ORZC18Ie2BC9KrASLN8UrFmORpHc8XQoapk1AAAAuAAAAC9exqN6zXtNewVyrSsAM8I7eAQL2jXbwCioytwhFFYT1q9dIhxf6YJDp4ugTsy/homSrjm6OddnPsJa4zTbbcfTDeSUoWpiiA3X9rTCb+XXZ/wGOGQdwyosypdZe7MwMGQLBlO98Xkn+Z6HVw+gi7q171qF/pbWI3zwgtAONdHFaZXgJ4KkNwy8nqv0/tqmE/P8TrYuSLd8TJcrF3h7TOdStisxcWXAGatF2eGvK8Sv0gSPNulY/582AAAAwAAAADC70V6nXuA4N/ZVjnFZ3nW6cOJUOd1tx9xj4qOg+8WGDblSVYZZoq+zkZSNY9+jqzae1SMeNeDL8K7wnGD4z1GguU0G4uLU37t8G1Uj2z1hEsgrGtL5W4LlEWSR56nLVVu3IBgv9flqSBvbtmoC3aQyBucPDBgVp7fD8QdTfhmxbdJ2URsS/5wd3fd64yba/zNVD6Pwy+NRY5CYcFf8VnMBhIx9lECSflMiFWZRhqw9OfxLX7Qevx24HiZXeTnb5jcAAADIAAAAWY74ij3Vx7oc0jt3wvJU4157PbNmt59mllK76XAzuu2xUAJoYB3CNe7adAK1u00PffJQ5E9CHASRGX3tPuP0cc3g6NS1bcuDrWxCoYaz2V/3gQblOGBAIWtBvKsb0wM+gDAG6qRDtqZkKeVtLt41mJTjBXgxudUtyz4XvMsgiPP7jkq++DiHgDGWvKrWsnyX+VuOCUJSiqa+C+obo+FYKAUZBfb7r2TPTngYCvSayaDLqjXUdkuUwNuNdWNL/RpOB4VuviQktQo4AAAA0AAAAI7r6sudXQeZcKnUdmFlzuBqu857T4Iqa6BD4sJjzufSCgPhmHz5YujUSkss1M8eNj+Jp4FhchLZyriaIWJzwgGjbbqiXF1Zn+cBIDhXiV72VImexgSe/4xE/55RbDG6EY/WRVgzeKfK928wdGqOBI9RuDa/2Sa6oq6jzrBurc07I8Dl+PSuXEWxXlS6rRiumCxisPqL1a5ClY2F/dzuzcnvS8Uqbz3t4UKgme7chIRBdOQjrfAYCz9W9fEUltZxloOvLmd3ef6kG6u0rEl0wlMAAAAA');
