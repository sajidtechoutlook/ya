<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
