<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
