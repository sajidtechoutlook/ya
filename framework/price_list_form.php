<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
