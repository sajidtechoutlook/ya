<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
