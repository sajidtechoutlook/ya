<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
