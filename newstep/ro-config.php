<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('134834728D681E1EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/KByyxDDhneFlFF2Vxt0VuReQhtkRxsRsrm5qrfVnqADHxXa9J8xCXQnbel4k/rGwm1jXFhejYuHWq8fNkk/pwAoW93blH7x/72YUeESZ8qDHWjRBnPivglFPhS8rnhIiL4lJJMISbHTCHIKURS6zBkJ6YHEGLFoa/0H0QST/RNyQmYEJ6MfLNDQAAACgAAAAwjnfbHWA2ouEE4qV7p/1Y7ZtuBq1XNGK6G/xXMJuwMIDuKdqV7mnaRow6HgwjKDOUOTBxrgjlwNXjox1RtfFV6z1fO7xiUo2TgoPr3Ty+KG0h4M/mOwRzsdC55+/NaGusBYDRqkmiS8ctcF48aGsv6rqeUttWYm0EX6wadhzDOt6H+CuSVE0ypXgRiKQhhkcf3tO+OmcWNXz2cYX1o2xOjUAAACoAAAATf++YiYLwR42KqCNvvz+ANiWz1hMcI78zLUNfHa+/5weJLdzSZNwFAdwl1F98KimgZw0NxlZ+fonqVic3Pl+V9ZcSlcLAcWuzg/KLN4bFNqbk+aWnzHjZfvPTV475yMnOndXxkCIlSynHFCYckvqNJCVdotvIxY/pZ25JTWPsc+pGKXGECWnXqyEcFpJybAtomLe59rxQiSN0og9bxfsGRqBoKI1gD62NgAAALAAAABUtd7ng49yHMTpeLc5IHl/rMsYNqNJS+9t3aR13do7iyzSYFDM036/RcrFMOZ2EgZeyX2zT2H+FzxhFf2UYX7/IovmrAjy33aTEeNT1GtMbE0hlnEmcCIDDP/XBd7p3Xf/ulg4vzQ7UMuayfAae+BU6RgkiPxRvgIVBJJ5pJxpEGRdfckd6JmuLI63b0KFP0+/M2+LlA9Fb9QooXKw+cOi0JLuYYb0bCh60owYwf9g3DcAAACoAAAAL5wsBNxd2DXVhvcZSFJhbkweagACPNrpuGkXmoDHPpAfZ8hyv41Ysw/J0uf8Fff1R2I9swo2yTZWvWH17YPnU/jKiNFOUV7CzEOR3AWtXRTl7SEFs0Nvoo7jTnk7HX+rHiQQNhhz+dYOMU06PSUblXCr9+nY9Jxqg+le8sbQu2rMFkMjlt076I3eBfvfUKkQ0NPYAFk+6dRUt2wr9FN9cK+60lUyt/j5OAAAALAAAAAciNwm64p59y2+VpjbLYKF+oObyuNpADYu4tDxQUQf9cn30S5PzY9VUlfblM7Kzv6xfK4YtBtfE3niZYawS7tXnK0+7noQqpZjIBR5OVrmxJUpkkl+asbk4AD4e1kKNo/Y6sT32hBGZ/2DI0Ss0JsqmqwO2qotYlFVZ0tj4IFZkZBetH7jf8DJwgLNKGhP8Rf/BAkHGowDFYtRdlmR/NxppMXu8fLFNIwS5lmEfDnBQwAAAAA=');
