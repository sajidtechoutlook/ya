<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
