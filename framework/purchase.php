<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
