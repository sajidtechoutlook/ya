<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
