<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAADQAAAAa8O4O+b8Pcx7a5wh18/zDi9z3sW2un3yEZfQ5PpXV4WzTgZDcywF/5Kwak17GW4skkIKXge9CjY2qnFcByzELz2eX+jYLbC6dCu/glUTSQe50ywvHxDa000T+QFlXRK8asbWB0BiZ9jjBA69+l7pxRbiPASIkU95NgTW6qJVoS6Dc5ivs3TPmopcnJZLbJh2Jg3XAOgH3rsl3ZBZ1cn6uMkRxU/FhuiYPDqFmcyFLEC6rT70gTH60nKHX+lM8o2oS+J9MqA7EFiZiK0otixzITUAAADAAAAAHNPNn/VnYGXfeUNKLAQ08j4qYMfVtKGyR0Ils2aE2F2VgKnRSASDbDVNCwh7wwM2w00mXPJPZYTweOEdna1XQNeLaHVagm/E1y0xUn4xoKpe6tQuCbixmpZQGPQCD1E4xHzFJ8SE8BLP0qcVfJQpMxonxKG0MUHnLW4T6MEAUPywcnAeCeAo7QnVTr9x14lpQJq74O5y3Xgp75PARbb4Vxle1ujoADlRDgjswSe2S1f2oI97hpOE5vALC7td+BWmNgAAAMAAAADdMwAO6zLyLNs46GnbJgoW5RoOc6oUcXDmNLaMkl1BeGT8kDlSooLiEJkZJt6r8XJsohAAKmxnW024yUcBvQW6jKzWItav2UshzxwMfJTGoiolzPoFqA+KmsbYX92g5NFMrDufi55O2Xs9v4FR53KyzkxBvKWNB0+BTFnmmcbzgvN2Wuq5bS/lBhl6euvGgt3qiiWP7V/4LsIAqA6QuGNzYGGia1cfHn7vgLOM/CQwPFCgzIGOozMhehYCf01YWmE3AAAA0AAAAPbalYji2OjaZ452iG0GjM+X3BrsSn+crpBvlktRyyeKEAz6hgiqpFwEK0cxlYIVWyzQPdTyXidPVX65ndZ1g87PCf3JQOlIGPTLGw1zGeFFFxVj4YjqtJCVNbhmavJqGLKBQx9bLZlKSWM/o+MsGTkMg5oMAjbguJdUw9JVKV9uQgjSWlKu3VTvfOvecd4z1ELino6WMRn6OAVWl+yez3gc0QpKRv8mxZDNAkUV1uI/0DTUXViHYKM7i/5qlGGd5NOA0SN7JzKrYlWh9UQlcVk4AAAA0AAAADBRRK0qrcHNhol2aLNvdzs8k4QfNIQSimkkrVzVfbMnuyZUjr1gpkEvU9003Glf32GAm7dkKsGM3AOY6LCu5idtsjTxHd5Jve9fhSc3+3xV1dSfN0g0HJN6K9j1nKMhE2jj7Afm/q8Z7+NHYoUxWpaa+6B+bxHYLVe8/jm0E6FLwdllQ7aov9mPDR6FKSEhrPYGVrrhGe61b6eVrOurgSWJ0/0HK8Tum5F3z5+pyFgniZfFqciVKbeqevWh3mOe0gDhhjwiXsanKetZx0eg3a8AAAAA');
