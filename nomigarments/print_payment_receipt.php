<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
