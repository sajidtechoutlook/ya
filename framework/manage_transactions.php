<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
