<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
