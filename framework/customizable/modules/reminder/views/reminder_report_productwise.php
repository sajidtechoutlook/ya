<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
