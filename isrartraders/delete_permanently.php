<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
