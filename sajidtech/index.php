<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
