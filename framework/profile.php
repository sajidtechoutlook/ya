<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
