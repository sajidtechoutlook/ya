<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
