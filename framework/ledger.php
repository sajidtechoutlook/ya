<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
