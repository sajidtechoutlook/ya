<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
