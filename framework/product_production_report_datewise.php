<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
