<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
