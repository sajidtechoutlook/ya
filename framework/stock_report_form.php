<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
