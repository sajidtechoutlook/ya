<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
