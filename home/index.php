<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
