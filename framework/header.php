<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
