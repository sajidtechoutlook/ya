<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
