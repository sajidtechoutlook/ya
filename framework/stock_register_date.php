<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
