<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
