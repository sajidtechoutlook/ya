<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
