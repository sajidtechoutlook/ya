<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
