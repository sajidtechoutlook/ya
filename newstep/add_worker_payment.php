<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
