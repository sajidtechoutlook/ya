<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
