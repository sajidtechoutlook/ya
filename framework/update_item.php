<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
