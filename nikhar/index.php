<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
