<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
