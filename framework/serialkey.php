<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
