<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
