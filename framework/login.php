<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
