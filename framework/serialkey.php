<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
