<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
