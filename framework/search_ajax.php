<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
