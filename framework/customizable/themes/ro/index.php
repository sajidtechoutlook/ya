<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
