<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
