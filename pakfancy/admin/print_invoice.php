<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
