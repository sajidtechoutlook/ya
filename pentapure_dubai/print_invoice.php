<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
