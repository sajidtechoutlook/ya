<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
