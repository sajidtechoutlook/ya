<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
