<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
