<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
