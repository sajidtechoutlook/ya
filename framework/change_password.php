<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
