<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
