<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
