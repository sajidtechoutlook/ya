<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
