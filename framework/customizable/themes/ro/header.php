<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
