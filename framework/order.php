<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
