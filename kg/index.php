<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
