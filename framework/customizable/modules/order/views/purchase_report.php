<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
