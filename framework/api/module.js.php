<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
