<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
