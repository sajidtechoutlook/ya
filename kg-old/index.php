<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
