<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
