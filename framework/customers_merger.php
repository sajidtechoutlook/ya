<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
