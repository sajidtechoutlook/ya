<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
