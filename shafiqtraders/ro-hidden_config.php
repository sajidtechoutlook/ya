<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
