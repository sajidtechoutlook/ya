<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
