<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
