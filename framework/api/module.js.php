<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
