<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
