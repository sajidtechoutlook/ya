<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
