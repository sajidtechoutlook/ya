<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
