<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
