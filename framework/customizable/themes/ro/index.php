<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
