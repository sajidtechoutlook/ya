<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
