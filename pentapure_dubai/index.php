<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAAD4AAAAwGWhLhGHtvre3kx+f0FVLRh9ys/Wj1AwpEEfiVjR9Z7kA827K0p1qSNGoybd6qWnxRqPcBWL6HyssXC+8ueAkK3n2/Z1ImqlPgKZTpk222WOgveKB7dYpDVkjoAXcwC8VcMfZ1QJRi6XQzziMQcZj9t1JtRfWQNcqta1bwlDv88dc3C1ipxR0ABT4ya7KZm041JSKyRSQfZ/+gFGTmYwkKTRZOn9LYCzi00QcrlMmEhPNqApy0HY+EwKZAlJCa122et+91vMtNvVnF9OSltf96yJnwmoJPEbvb8F5OaRUfFfXH6IHCh/suJI+N3MpWC625ZLZucRHKQ1AAAA2AAAAHvIUYSqaKW+dF5SOcBM/1iNvHpdvA2F4NEng7Gdg1ioMeNBGjZFIuadmn/5Eq4Ev6aczNb3UU5e3Pn2ost4vaRDUqKlDe95jsHrao97s91R3Og62JthIzkTJwTtiSemZOK2TNvDYA8YcWhlZ/QSFrQa8X69fHVbZZ1v1oPi24ko6TSSFPiNe/oc+wOOd2au+LtcEy4lqRX5vh2mdlIlxfE0R29SSISsB1thY2MqzqC31cGk5RPxKlSUeZ1jGcxFkLXS1Q8DFPDbihdcEyobOCmFuivR+qFRtDYAAADgAAAAv7ZFQnb8GsbcNgT8xXM3n+bf4Te4rEA6qOkO5/dXcElUSPtjD1ZK9inxN5y1QhbHFBLT9CqatdZHz2v/nDAaqy6OhJOx9imHHxPXxnyonRWWfDKAvTkGpW4Zww4GntBSzIpEFRHWpYtsIXf3fmcrDLZsrhGaRg4BUGIFVKaN16YxyIpvUGO74byqmBB9rSVGyqJGUL9Khas5sQ+URd/zudDjfWHVND9WVmiV6eswxTdNQX5YJSvECzMvFAbXDN7JwGOBGFrV9mqmVVfdg5iT5MZ/IszXPA2wUaCsTxrQST43AAAA6AAAAKUz9AOHPwJm5r4ZGJeJqMf37SgCNM0Ku4jbH4rw/eVjsRKr/OcTqtkEJtB085IvdG5E+eWWCuPlnNkkunUfhNw1kdZmFAHqCiD3J9ljeBKopnrS9NjB3zyK14WwBoX4QeSrbfQLUBSrsiR0gJnaKiluYeTgMAKsEXXKl0eedF7eh7bLtIzINQemg9WwNBg6bweUiZKZrVnfqsTvE+yJowlzHv3Rr5QoMe5OogFG11XILQvFskPsivlZwVYCgCRYCDe8rlsXxceXS7tuDf0yT+iTGe+bt/vJIMH5vbn1rt6cxS9GYJIVmNs4AAAA2AAAANYBoiuG3nd6LQROk91pQ1rMa6Q3wMdzGq48leLVS41FQfoPIMxY8J/W+UIV0C7Vj+PebwEoQTbnM6ElV1zzpGsqZOgxORnU0bB1ePnGyeq/yrSHn7oNMLm1Xm14Tnnfap8Czb2/vQXfPvZei1MhZn+3oKfLE4GKnPy6lUu8gCyeW3WAHUIoki3d3SjOeGZ3/dM4g9deNojpXl3VqFNfYEuRufHlYiwjW3NZpby3egFSwqShsuRVtxD3FqRSWys2eiE2ER5tkooiNkPUv7OasRS3GvnVQzP2IAAAAAA=');
