<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
