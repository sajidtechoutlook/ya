<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
