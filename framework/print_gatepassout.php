<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
