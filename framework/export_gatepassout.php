<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
