<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
