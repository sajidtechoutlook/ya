<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
