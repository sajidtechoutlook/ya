<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
