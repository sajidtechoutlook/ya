<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
