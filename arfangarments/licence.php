<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAACwAAAAWDEN8DDSRmIeWbIZTDiGkbi1OA453KOXPy/S6lTiWV8u86wenVhK98dr92feZUFEfytY7zt/uq6BAAvaC9oi4xGrfHJDVYAnRR5+uY9IJci57lmH+U5t8OCX0CKpa0IaQ8kqU7JhQXL9KjcPNjGCiEusO36xlGeNwURNIAfnm8t+4+VuPlzeNnEukhyYrSBtRctJAmv6eHcLOf6AglYz/EeDvLTi5/bPT42NY1M+XiA1AAAAuAAAAPBMZz8yQ6F66Bjh7Gkg78we1IB1gAwKWS0XiSIsBRh+B9j/NjTxS5U/Zk7yvlYOHhbBL2Ffws4NSXaRVEnoJr878F80Trw3/Dmi2tAxj6Z6OoddGQ+qfoZsh0ERo7Z/v6s49WlQE2cMidYaxIKuaWuGqcdv45f15WEhAPHuVMKUePlNgqY282CEI4KHSY7JQqNHLZSNT+edIMlVrTIJ8/Jtgthe08ZNgIJWygVotmdyYhc5VCThE1M2AAAAwAAAABFxS9f6vZAmlXhamF+Js6IthfXXsbdpqEmMkllXR/+4P4woccJv7VRiDSXZVLcofGpoZIv7qsiIHxsGN6+CP5qfHfggBAWDhm5+8T8g+t3LaxJu6CTvEjAhDJnCXdpkwwvn35NnGnVdCIxbqSf5nsMuuPvJoxC2uARCTBR73YoxNhc3Re+Y/91dUttAGoQMYus+t72CiMCRfrJKUqWJzvqqR+juLEyCKKLyEmq96UeyG92yOXd9BjpA1dXy2a7icjcAAADAAAAAV/xl2eK4iuoEfwwhxnFgOLckwhTzFXSbKIAK30p5vQLr/WIxWGFkK5LKNp7is3d5ma+qsTpjxYALinb/8Z+5H944brbM3m5Z/Bf6Y/AWrrs2tBqJ3+CO2LpLa01ia8jUuOU/scSgUdbqrYYIUrYOXUlCZVt1r9JAtqQ9lnS9HM3czLPAv1uuwItIFp6Xyde3zz3js45c0b15UgAuC3op3//99WWo++FUjRmbufywJLGjfofV9TQk1jzxHE7YAuRFOAAAAMAAAADDgcCqRW0YkR+n4uBIIMAtb7gom7Jmr9n7CdoW/jAQE3sIhHawXeYoARv7LBsv3+nLv1HaA3Lh1MNyIZbIeLM5cpx8tKFDvL4hyDoD2wDdiCalxxW625p9efqeLGfJ6VkmXCy74ocjzaNnuD14NLbElyM3+xpfSuNUZmyqF1ZZUl1y6hu6jIKxpi1P5+RvfmCYYKVSqPZUzv+XX2c+IdLdtcSz8NN+51dy+uN48Fz26Jwj1Y50eARqbsFv0pBSd7kAAAAA');
