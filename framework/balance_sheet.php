<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
