<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
