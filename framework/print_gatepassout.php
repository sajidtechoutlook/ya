<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
