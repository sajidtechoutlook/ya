<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
