<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
