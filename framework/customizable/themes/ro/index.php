<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
