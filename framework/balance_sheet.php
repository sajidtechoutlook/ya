<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
