<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
