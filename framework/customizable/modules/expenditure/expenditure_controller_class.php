<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
