<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
