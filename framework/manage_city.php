<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
