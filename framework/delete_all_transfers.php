<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
