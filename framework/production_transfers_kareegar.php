<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
