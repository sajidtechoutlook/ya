<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
