<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
