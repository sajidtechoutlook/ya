<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
