<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
