<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
