<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
