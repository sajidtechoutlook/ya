<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
