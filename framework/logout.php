<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
