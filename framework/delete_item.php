<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
