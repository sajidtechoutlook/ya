<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAADQAAAALm9oqvZUfv7GnVbZwrxuzOgRsnqoeCUph5e42c53Pd9q0sWJzVUnKNGtumTgSslOHWQYrfS/P1oGQdRV0fdCEmznqJL0DNo5o34CIwJZSTUQJkz300UVZKSIUOmN8bvFHTSvMRW38k0/+dyMkRp8LwJXPbXB4xBR2CSMBvZhdREt5Z/B0eh3oH3YD2pS+ZMTCSf+COJlciU66tMnbtGnarULLigRaCQwiDpzDqGmqi4wkT1h1l9bGpueBP1/NKnxaXgR11L2Dphu3/0SxBcD3DUAAAC4AAAAW8BFy2i7Q20G1H0NcyFIEDiIY76Yav2St/txPvcLhzPVsocPXd1y4tbaId+ZBjQNeMkKDjXuPMupCakTzTs5ANJDptN0nGF/XYh/7rLHrzReaS1bF0uFD9qffscJhyXhx6ffyva/5vFQuTQIKrEbo+Qk/Cu60m5IfGB6hJcEhhvbYPpu6hysL2/nzsC3haNiz+3V+aR1vjE4As8VrJX89DoMHApE7Mwkqcu4YjUsyJSXBbzGUhQ7ojYAAADAAAAAfLSyVg6KPuVzjYFoC+AcF1U6MOLL/alha+4ulvPs9CzVuibSA/5KPShLt6in7a125SaDwFHciZNLxYj0w32YcSu9jGW4RhoWZy7gJo11mCC6MIxtFsJPie44r5u930TAmZnPnRErUHhM/ZTapMb+XX94zzGB+5WTzxgVFQURu3RKLbLPbR3qI/DqjtF6Li1WP10C7pTTYzEHzrnzj9e5do7SjoW6bqi6LXUy3qPypmquJ+SLUkOT0vT4/x9SNe99NwAAAMgAAADeMK5Rg98IN5rBakBtGENiZ/F6mpkj3Z8EQk4K81tuPfyGeAN0y5MRQt7eErh5TftKvCgGMQFsTy0FpP+MMRTv7ap0GbGyYirxlaGiz99mXKEcounz+ubyGxGd4CUMh9ja//YlgsbKIsKUNyglAyV8qSWpZ4QDUr6pAWZ98MulGz0L8TIUO1n7I39Bni9pCixRzCCeE3JzvQm+ri0Uy15EeKdIa3VDL5E385bIi26gflmyu+q1Wlrj+hOedNZQIN/LR/b8c4y3JTgAAADQAAAAoajfXJ1qiSJa4YimbJC90qQe1ISOYTIuQMVc9aoaD0d3+xW3HaBmFbhVBc+2gJFHwrR2EgPygUYnocIDGXdiVVLDSiOAbD+4IbvdkGqYiPCzxLsMLB6cgn8fVwOK6JBqRbfEIE1PMlvuSOee+Ftpb+Nw+M3paHp7cdaAEebuybYqlxEiy/bM7Z0U2KhGSTZ1lXqekAXoeK5Krpz7MFmaHlRVzu6hhQOO0f+7yFqCQnTP+bMXuqR0G1h5z42gMK5qchSsCxC2mHKKv82ZnkYCXwAAAAA=');
