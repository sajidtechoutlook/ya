<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
