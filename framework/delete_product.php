<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
