<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
