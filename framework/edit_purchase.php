<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
