<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
