<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
