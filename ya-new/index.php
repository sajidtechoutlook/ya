<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
