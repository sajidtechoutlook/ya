<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
