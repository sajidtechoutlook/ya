<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
