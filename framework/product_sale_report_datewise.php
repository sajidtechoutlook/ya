<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
