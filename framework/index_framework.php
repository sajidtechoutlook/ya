<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
