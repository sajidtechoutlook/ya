<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
