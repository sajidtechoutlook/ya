<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
