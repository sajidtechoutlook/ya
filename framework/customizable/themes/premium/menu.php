<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
