<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAAD4AAAAsU3ULpWsamgTkjdgwhxim24JokLzTVkXNVI5s0MQNna5KBV8DJCI06l6KRejH1wPUqDV48VAWGyxvhuezJgkmYzC9QEk8AqT82XAT5z/I4R2QThLTa7PQoOwXy2V4MiABV+tYu2HcRrjUMPGwE7S0rD51IZKRQA7baeeAHSEj6ZfJPppExXnBCs2iIRri9ORh9CIVGNPcxk9r1nOtmTLqawtDI2Fk21UotBoqvOo7EVIGNG2DF9OgBKHIPyGUcQzSNdA6J9KK/RPncycKxN7f40jJmPyS1yfhBDQ/1AQQzewdz0OxSXmBTSuGUKUZF36ixQd/BUd+/41AAAA2AAAAN1o3GpgVarotCOFkW5UvF6BJhwetrJQ2OrTV6gxQ1d7jxFKwAwSaHKapfqHzHLktXV+8A+nsI36N2ClOP9/tGhM5UAS3onPyYBVlLVtuaD2tRbutdSQTRybDEPW3jRAkAiHLcyrzpAaIgiU2BLK0YC26BzRMmWTjk4EASLk3pWAbivcFOJ+TzRrcCmU7sevVoVun4wcqbYFMTlHkWRWW7r8qmwrp9ODSTFNFLJydowSfHp4yMrffFGO81qryfAOAPxficq3wSwdyYY4E0tNN1Yqk3TlnSXjZTYAAADgAAAAsvBpwhrF92dUDLMtFujWnZs4ES9VAoXBH08GgW6oppU1FnLeUsxomciPdMpP4f2XxupHiQjYGudtnW/fW2e7xWo3hBNbRFGZKvdJlJn0QW0Wd0PPfHWZKQW2b365vlc2dnMXRzQiDHz0p+C7kPOpmPnqn4iBbQBrPIKZLYHOrBiF+5swHs1Qk9q2eygcTo8EJVTnn89OpRiudsiSRNw0ZH05WYDkjo0eNiG6bobSpkiufdFnVBAcfrMqdIdDCWCh/nkY9lSwilGGEmuf47qwqoYi3vXK3vXVByBl8MO37u43AAAA6AAAABcfYinqPFsgvj/DtrO8oWPvp1IeIyPbmBSj0VVxXAW1mpAfBFx9K/EmXAgrcvXynIICHJI/Yw9vg4qwIZcE1m2rTX6d7SeQdtYdkOe0y05BUFgdPnqdUFOX8HBn5nBSQdfIRcJB5nifKDnQnWJwkt7lwezmAvCHbiEJ4gDfd2JuBXx8dV0NIwJMsp0IPODq9VlKJSubvMKFtfslKeuzEuS6E0UBiOSLCJY09amnqe2Jb8ZbyvRj9HaN0Gtlv7iud8GfFZjO+4sfe+Nkx8wuEwIy6Xf5kP660+DzeWtT/TcnXKgLaXdz5tU4AAAA6AAAAKqRKV8zGYD+ZNdBMpWtc2clpCT0REtNDHJhKDw6F2zrGi1W+Q74vs3rnS3VgS0pI20tZaP57flBwXNETLeNH8TOysTdP2pSaE/B1si9TqJCiFWqX/MAoiQ7Zi7lIHYSXkiBldh3hcr8xNAy5nvjIyzdBPf9IRwhiw14JW8D4lrYs03yDTUe3YqrgAkOL96Xj9y5HKatCY345g054zNOUpb8NIFnZ8f+nb/7HOHEqPmin1eiwhOfagRI9Mj409VBhqA8n83mWJ09roGRwU38/+vAKvgG+cB4wDgPLzIaYMcO7FrczoaRgxgAAAAA');
