<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
