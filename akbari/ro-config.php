<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('134834728D681E1EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/KByyxDDhneFlFF2Vxt0VuReQhtkRxsRsrm5qrfVnqADHxXa9J8xCXQnbel4k/rGwm1jXFhejYuHWq8fNkk/pwAoW93blH7x/72YUeESZ8qDHWjRBnPivglFPhS8rnhIiL4lJJMISbHTCHIKURS6zBkJ6YHEGLFoa/0H0QST/RNyQmYEJ6MfLNDQAAACoAAAAtcinEYVEdNTjpM/Sq/teQzRoy5oIRxK12+jsujSsqAQpWKyb3I4pJ9zJUsePLKoGKDYgvhnRWJsPb/sb4ix5E9Gw9nwCvWqlbnjyYpz4CQjLBjboUixxH7jebOofpa1Ej7FNGShSDHGo5UKGrgpPBpVNvcV0j0lEwsWO8VVrfXTuxptpFL3H57cQHfhk4dyAE9tkceTGBEEifef0WRB9VZJEkCFZ4Zf6NQAAALAAAABX0tDUepgL8g8ZLu4FsuPtLanzc5+2mW0fi63Ns+PAt8folZLj4X+BLA5zR1KRZDmX1ZJrwDdRTRWWTqu9dc9RVaQzbbqVrA4zbLOhO0MQD9kGWTiVvcLOHblxR0A+BVj29a0xLxmYDW0Q78sFKdDQM3mY1r3Hbj7anD8zC5sTeVR3Z1O44Jtv8+DLw/qQQb1MwK2bKOLv9tis9kmGBJ9GrxlPC8OlMRJE3UsN6eY/XTYAAAC4AAAAos+89xxgPSmvG9ZdZ2y+Cn72/XEU6JROGE8ixdV2kK/wiFo1suH6X4fqHF0ogBvsXo6Xg3M1B3uKGM9X3ojUXhPq/QAAH4rO77pvSHt3Sl4Er89CDoznKo4u57QhpiOFudRvegU4jkLNNBpa8XmbpBjuqDz/LJ76c56BKVIm2kKp5RW/Ex809ZcV/EWq/L2YcXZSdMCnGrh8Hhr3y8JyaEoh3YbRv4mkZiP20LxXlzDXyQ+hlspSEzcAAACwAAAAAWWDc8RayGIcPJPGkAEMVULvxZaer1KEAKdBzBX6md+B3HTTmAcbCAb6H5rYMeNFj5JocqPX+JN9ZQa0b4EZ2ZnShgDwbzBijP0YyqjA2nF7fJnKvUcgq3dW2xJkWzPJMTsSx1MirJr87cQ0N++35nl6rk5d9epUJwgFvsacxg4c+znBWEWx4o2EmbLW/kGiz1UDXUY0VcsqUEEclpxflLBfiPINeBtwuub7N9gprLQ4AAAAuAAAAKCLkyVL8r4apQn583kYd/qXY3p9zP6K5uvHhcca0ntCjH0yX+4+WSkrFPWs8cujsaXuIgJB4eHVheOwHwQC0qZmkFtIgvyaBwlWVVN92gf8940+4rdJEANA8PIJOjuchbm/ZChPfVZ0QU7dojPZ856KjQ2QY/eGYDZt7QBpPwC1vr8YN5sf5pHyfhw25bM0mZashgQQpZRLSPHP/7GGclrJgcr5Bsmyo0ktjJfjB94kOSsNg727UWoAAAAA');
