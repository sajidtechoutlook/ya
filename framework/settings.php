<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
