<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
