<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAAD4AAAAsU3ULpWsamgTkjdgwhxim24JokLzTVkXNVI5s0MQNna5KBV8DJCI06l6KRejH1wPUqDV48VAWGyxvhuezJgkmYzC9QEk8AqT82XAT5z/I4R2QThLTa7PQoOwXy2V4MiABV+tYu2HcRrjUMPGwE7S0rD51IZKRQA7baeeAHSEj6ZfJPppExXnBCs2iIRri9ORh9CIVGNPcxk9r1nOtmTLqawtDI2Fk21UotBoqvOo7EVIGNG2DF9OgBKHIPyGUcQzSNdA6J9KK/RPncycKxN7f40jJmPyS1yfhBDQ/1AQQzewdz0OxSXmBTSuGUKUZF36ixQd/BUd+/41AAAA2AAAAOIap6sIBrPLGC+4qORBw0H2khJ6ZWE7JSR2yRG7NB5u3U/Ucvw9kxtaGhSQxIZSQoQflFHnwKZEIsyCetuCsCtZTS1krEnV6jeKvb5+DslQKBcGM0XcHq0ZNnqK/DjKHM+ipyZwFGNPej5+4i9B+6IjA8hAWDSl0xcnSDiupW7AeUWg+tmzR3T5holz/BLQBEwEyxNfcb/ZTEl1Y8m4NSN+oGrvF0jxAaPr4bOOic+Jvn9mnO6mi08xWTfXtyzXzHzPycCAgIVoJkxdSEgJjra4FUROjE/zJjYAAADgAAAA6mvUG0jxo0h2u2dTVn5hbtszXZ4ryQfFRG5/SIUoZxKERSFgZu/GE9eRJ70ztPeuc+tj/9kOMuz9+UxsYBv7GuBeww3rqM9GTtMuFdOYLTA7OvwZVHvDTAT114xZGlci1SZPLof8zLC7h0YeYr4ngKYvhO5c2OcNVHUB5eYrtzbofhZkjF+V6QJ+K2UhcaM4I19zwbEbBjhmlwjiEnAf7nPvAPJwhzncvYyHztoYyH/4946yl0GCCeVOf4+dW+RP7s+7AM/K6kIDFQl+6QnkqEPDYV4kkEdO02TUAce+MmM3AAAA6AAAANZf1kKCxcxelTiOtVJDgF7kuAJu5ASvqpaLnE43LLenNxgKlt31WqDF6GSMd1qBHpv5GVk6e+aEwZfrBknaDIr1DmLbkd1RmlyEK7n/jqXoqiGKT2CrvBOvw2UV5gm8+sDXx0AUX1RPDr7bZXmcvv36CnYebsqs9Jus01J5wdcmukRPuFugC5mBdp1AwDb87rtElzkcGKwfZGmBRdfsq9rnhKVruFCFgT+EZtPACaULIA8PGaP8UO8cFhfJDIr5Q8PemKSRkgDt6gdd00iGvi6u5hJYHudBXc68R4+/6JIkC4KTaVv/EAM4AAAA6AAAAF9vhwx1AiC/+V92G19+3NY4sqoietweCJAgSMYH4nyg2iQn4KUGBP0N86YILq4JPoCBl8+wuAgTHja28JrixG6v+FrSmxfxVE/08IFfXWIdsk2ioPd1HjP24PKBYcf4NqOXhYItrpn4SSEupLiVno0v3V6TBeznVTlb0NaWGsAKnvKVmvGmxesJ5jQoiYCaz/cKlhw2Ln9y9a9DIXrVrjIez1nikWKq8dijloNbmAWN23WYD5LGtTo1FT8PTKFID0pxfuDTAwTi94H63iawOGQ/NbuE5/GIRhTKDdomLPUwkn6xsOPUnbYAAAAA');
