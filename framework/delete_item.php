<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
