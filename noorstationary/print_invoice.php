<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
