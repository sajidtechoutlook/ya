<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
