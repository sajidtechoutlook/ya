<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
