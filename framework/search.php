<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
