<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
