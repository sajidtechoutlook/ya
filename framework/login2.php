<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
