<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
