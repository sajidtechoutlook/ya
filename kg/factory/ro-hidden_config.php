<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
