<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
