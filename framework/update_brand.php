<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
