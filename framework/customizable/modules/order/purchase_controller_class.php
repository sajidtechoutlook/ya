<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
