<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
