<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
