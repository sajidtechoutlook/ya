<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
