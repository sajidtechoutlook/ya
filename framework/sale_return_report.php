<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
