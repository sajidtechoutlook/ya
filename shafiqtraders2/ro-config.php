<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAADAAAAAWfpVFdIRhs4ujqMG936s8ziUqPcjatTGQFvEefBjoYu3lgFj7ABM3Ze168xzs16G/nCSlGi4T0EnKFav44a/ah5PZFRD1cs0BclqHv4fkvo+et2u6QbF6r0T4oGp1+C7oVu6WzhAe8Xl+KoMrwzki9K4iiqfNXi+bt8balVc71eF/tegBiMrEijhQrbIicv7cjxuVTKjtZ4Tv7Re/AZBEncvaKbSiHxTJSskKIHFbAP2MO8gmCF2Xvyzp3OdQd3dNQAAALAAAAAaIImMq9zBMNZp3ZgFCFlQC6sTJTCt9QTmeCYAL1fm76khQJb9aBnpOXTjwzce1YQN71k5SYh/ns1OGpAo60f5O9UWqSWuDM9UpTT4JTpXe2BTjJT/270Ge8xgw5fYtQSKX/xr+/LIlF2WWF2An8qFAdbm07c6T/zMHRj32YZprdDoNxrRf1yqgBQaQoiJJd30vnax2s+TVWAr42kDGjDZlyXPYLLU/hyTdo/XkDZfVDYAAAC4AAAAudbLy6K/GhWBMSoHoLvIcDKi3B9DeSbWBc1mTrTrQOA2LMSCYbR+VSgGgiS2hPRtCs/LYCS2mKEQb6AP+H/w268NGFBneno+vh4JwLzFkR0A025r3wJBIlGRCGFwlWr3rWNt4f05R0hy6XKGreWsZSMV7kMinXyTWuYdmiDEbfEB2DVVFJNoUQO6BJkO1hPgyOQ+rHiNdrVQy/h0l469E1wA0AtTJ1Zf4SnLOZ6jKtewcwhHeBTLyzcAAADAAAAAQO2AiRWe+N2tMPfo72x+GwZhtxl+bxxCr/0hiX9Qumf8cFKawZzaQbyFkiiguoedr2TrsM0rtkNKss1OXpR4cichPfXyPDb7A4VKWJplBJW+0us2UUPw3N/GUtTkX+CDuu7Le71aZ27apeoEub6Z2hx9dY/1hBKYHFAStHvZ88Nmhzpxg2YObN1xyq3jIyl5ZxDMDWz9LDwhuES2QORS8D/8qaC4vJ8tDoMJ8elKwz3p3IUXOg3gGT+SQWn/xyuqOAAAAMAAAADbbXC6bmnWv/c/p3n6KXufeTzaWDAV9ESmIHKWiP6uyAoW9w98EuEHUZLJaFBLVgFPfi2dZ2anotvzRvzwsqgPN/WhO1A8r07I1f3WG1VUk29giEJ06GzJjt+0szDf6guAPtsNZ2T3PN/YplAvUDhw++RgnGrkUEcvpwa0CSJMcCWWKeJvALYeKlZ34hE97dMPt3AMD4F3M0IBo2klHNaq+5gpk9uE3WEbO1jlaL+p6KNJtGBOXf0GvNiZcGpJvYQAAAAA');
