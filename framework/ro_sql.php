<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
