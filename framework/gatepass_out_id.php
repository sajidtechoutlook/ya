<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
