<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
