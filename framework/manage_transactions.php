<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
