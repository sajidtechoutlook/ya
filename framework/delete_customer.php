<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
