<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
