<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
