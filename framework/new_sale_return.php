<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
