<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
