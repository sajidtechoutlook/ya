<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8FDDB8008D68350EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/H2XD95MxIK9QBMkm6tOJ3V/aXkkdrHApw1ydj8ML8PEbgt1uUvasjwQ/QDvzq7N6W/apexF9wC5YsMpp9OM5yJrsb1tEQEGz/iH0DyykKSLaGLank0VX/YtHfYAWvJ4eJ9DevLozVclCyrGiAOrwt/pAr3SvOd4McVfqO1i7n3TyJ9NDB4JAbTQAAAAwAgAAELT81yuTVBUNRvL4IKtlAl3sLpUFQvDsL+f7PHXttRggjVujt25+27FG7NhJu221B3DjNSjIHgi5k9EuTb+4dxxEuSfTdyUO/st33+lKIWvEOKcTVJDpU+oo9ixlux1m04gSldPO0j30u74aFfahEo8GhWETKSubawxs+Uj/lGERRNuFTqtQaUpgSpAd2h1fv8NM/m2+utt15fPPo7G0k+gIm2e68M9gRqbK6lfxf+uVifCc7OG9BJ6DSsGGrL0ICzuvRonKtP6Izsm7i/IGLWnmkSTi4e75NTxRgecC6pDj5mRg+Y5HxfNaWEwL63rhSyGmPAaEi2VR9RXvSmLMqjk1RPxsJaqYpBd/X3pxF6lN6MYWMgxomI/wBjzlffMu73t0Fnvz2dAK5T4nrGzdDa1VXlqKFwGaGxJIvLMpvkPWm/fl5KLIOGe1nI3vqTx0impwnE0OnCIMObC7nNLUnkjGkG52HxuplerXYbegHamBbtTtcF7VDycMUNMwGdlzLo+ibIo0M/k6koK2Oz/fxhRe7KSORHlFvlgesOPeRdR3sCYiO+iMZskY/FZnI2qpjlPLqAqApfb9rRlUx57bDKqg6/9+TjDMKipVxOcRWLMc50VvJ6ow8mNO5mfjotd7nOOcIvPw5XaOoDvvLWI5V4TC958j8SuyANmRnOCAVhURbGIlJeGi/J1l5lXTfR7H65Zb9ALiJzv/btB59X0E9e5X/oheJuJi0dMSfrjfwug1AAAAKAIAAA7jI2pV3yKUrw5x2X7vxhoTP+oD82qDeQP6VxuesiHWujH41wP0ry99hYoFDRWs+CwwTOlu1Sby0q9PXnC+6v+WK2NGhsgwGYTSeN/3fV5UuTgBvlpZzifCw7fh76RJ0BKV4PimH3AP/UJiyAZDA3DJqEFIv0c039358c4QVgbhjYhPmA3hyDsM0N0HrbvrYlsmQNBUTESng0f1wcmj/qZqE1Nv/6th4HiJiWbbTQodjDtUVbSMUka4UOqwCfE4U4M0ntlD1dsWZ7K+UHYzILgVzVJXongvyijqB5019SDyR9up7CvLtP83LUtl0VSWM/ff+7/cSiCG+DkrxrAm3mtDSvhi6/5rTLFHVXyWC/sstrI8x+CubyrWMSxYhILUXmLz1H2BkzbIG3Esy2zVcdnjhiLwy7i0pgt7qkXO0kl50hEJCW+QJl5VzJ6ZhcMCrFijBZlOD+zGSYH7ntUyBaUtRu9PymCmvIP5fhY7u56YnsATRxxQpGlMgDiQEKYA06+4qhlq6l1rebNGbfSRfi6ubpwF6yDdw3FeIP3PHHWIrn63IyyjzxvcGWDJogiJazq36NGTRRdQXy+6EcaYWnjS8Negqe0dAzzQHKuX1NOYxVRV2XqP5qBLwRsO51tvEY4Q+WYYy4Y7vG008mGnpdikyTo9A8zh6vNjlxJkgeJOQt8dzreOfPQIqCop0PfKBcnsZ+Z/k1iqQncE7qy1Tn3JaCnAfUNJhDYAAABAAgAAs/IUgzVm6oln8vjhWsRSwCM9a0DqiuIr2tx6K0+p9C5qeDikROnBzvpnYidiWR4UcL1Yw/lutAxWVAjvr6wWdtz/IZ6sPhncU3Zv/a4095sbxpdb0tUylBliPOFrQIWFAv9pW8k0NBoKjKOVuqLNhOM2lq00IFQGQFsO6HLsiPuj1UttLFg3jWPB3UilhkZ7gihdgjuAfn+m2KycuwuoFHRFN4mUFnNRpTdo8T8OFYZGxlZ6axjXBbYpUC6MI1c0DxchQFW3w4TmfFcsUVsF7JTK4p7j/kd1bHq14CaAbEudyWjh5o/12hxIgvz8I5/Wvt1vdQQbU84GwgjYfnf4+MInaLWDO8Dw+v3tDRXbu/zGWlVw0eleP0QIJ1HMCr97bZWzP+GRQzA2Je1ySwbBIejMyEXzL20JjdQ5lUPbDkgSyCXAZZacpE5sqz4W9h42i4kK6Tx7sjjK8npdOpf4G6833pH424dhQR7HZNu6HinYi5mf5G0zA5SspTgWJrQ08FaxflhV8p4U9GoYiZSvGyl3eOiC+C1EDnvRStBDuJLFgXEkjlFZcKviAY64hnNYRe9bM4M2j5lWBEZebwgjLMOaA66l7BBJtlEoFN1IEUdA3uZZZ62IP9O3taKChHHATaVTwPNlw1iRRwGb5K0/WxUgSIRVn9Se558k146wrqEOGugojORgASI28DHBnbarzfk7dHktRDT1wpJqPe1ARpPgtXC01pC/QQMChjXSW8hISGOqHEuycxn5wG75JHhANwAAAFACAAAfPgavDJilfI37PM3b1MxyOLuZUMWUGTbIE9YTKLsU+7yIWmopkY88Qs32p22shSUigQo/mgNKPQl2diiIUTG1Dkx8pHalwxGSYXwVAnSkiFU0XA+Hk1A+gs0nmEvJ55Cag9L2i7BACe6mkPZBI3MdB2MM3zGBAc8lEVnaeJbxVqqInALJ2H9lz6nMSconuDRc+MHg+3tWfndyueSwIXvZ9im2opd+yc8/irQ85VN7ifIN3YwJ2hrRGLa+Xz7sztXKDQFc+lnHJXBM/NpsLcV9AjhBTqeEV5ns6AFALmF5k5zfp+0wPwH+xGEf5Hcr1LiL8IQ+Hfnnue3VazTPHiN58BpWsqFoasjrLv8Xh8H/pm1i0ze5W7i5ILt1ifjly7hATvRh63M0BXIx3CZj5QuU+v6Tv0Rlz2CL7vEEkASDlEh87w7tDQCEXTi7oQQlRXSSCOaVkjMn6YgJfN0VxUANZmSkO8bxCyNYYoPjnctniinzDYv9aGPR6u9AjmlZWJ9w2DRVpVS+kGQ8tmAhYiZsgArbtoKtYe6nMouF/h3NO2WnnlNMbWTRdTDcRny1X1MxE0zPbDC2lTrX5toUNCSSoWaXxCYfbLIGSumJSewsjRMm8ozaW/SO4D0P9QON92LaCRshxgwf0yAixSJtLUQzCpvbA0GDTUVZHQtfqZehg960Kw2c7I2vxQE2GPu81NFZWpWAHVN7ji8mR+TbC84imp+T2fuU71V8UfiYByjjPx+GZ9DLdXCLlKNgWtOlxIA+Lo/gVzvJE0CEN2TQ3UQkOAAAAFACAAC6Wn0gx6YZyQooIuI7+Y+Qmo/AQabNQZUx9DMwKan2L35ISGfbZO7w+VhJJaFOd9cF1oyVga7mdY1o2FpG0yXZxFEt4XIrvD9dkKJs9oVBvLAdXaJoxLRHuP27jgkRK2hQHVkrw9I4BpbLaByo0klcb1kFuDaUC1zRnKVJhi3sSq23COWXXoexGjEeWguvYZftNPTiOsMqpr4FrKSHmb8m688aQYgMK7KrtHT7HiAC2jaQkyon4vsxrk5mljGCbfX5+CUrxqPwRuwRkQbfQ/WbX7+CohOcvdRHLdvc7OwORsSH5sDYB8zG5IpUL3ObxA4Yghz+5LcrHnw3zOCP551X1WhaAzpytGxrzIK5O2OJGvjGUc7sL/o6DH5KEPrPMtgw5jkhfQZqggRvDge8g0sbPPEGayZXAsrNgCJ7nBMIS3boLgfr5FGEbuwJ+jKdtEM6eRb6lGFi2jdfb/XnaMNYimN525BLDNLzLyGKamZZbzA0G1j85jaCeEeBFt57UilnCehPUQ5wRCv32lOQqA9jeI8+ObIIhjpvB3IpdtKp7/GUBgGC8RSMFRvla/KytB/C3PuO5M5VF/sUKp/nwMMTUTmiP5LYispCQxLVrk9ohe8ybLaFiofEUklE3XHBJoY0NBckS3kxhS0gk87VVVgd40q1w6xmwdUazUEEJwPCuiSZNIo5UaMEh1su5AcyhAIXlGvu/iFuvTSwITYgeWER0KPmdPRbKwcMUNSltp+cICRFHNiN0FJieNp5pEfRNddIdTZY1MlyMxMlde43CxfJAAAAAA==');
