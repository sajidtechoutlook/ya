<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
