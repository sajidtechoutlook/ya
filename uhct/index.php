<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
