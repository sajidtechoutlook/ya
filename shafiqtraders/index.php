<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
