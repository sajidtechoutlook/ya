<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
