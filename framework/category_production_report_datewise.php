<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
