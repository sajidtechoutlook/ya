<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
