<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
