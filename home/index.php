<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
