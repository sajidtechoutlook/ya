<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
