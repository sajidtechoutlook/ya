<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
