<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
