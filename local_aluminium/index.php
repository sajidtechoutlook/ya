<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
