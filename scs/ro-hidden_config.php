<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
