<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
