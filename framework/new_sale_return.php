<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
