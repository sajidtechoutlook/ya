<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAADIAAAATPdSGPPk9zRwrJmYIhbIn8vDVZfAjiMenx4scckpkSPbxQo7er+exEqqZf0nw3CWrBjJf5qD9tro3jzv2VEn4VelA7X8EZ8YTGeEmXeXbRIWthKkyQC1P8DB1PT07w4Wt2fRzKJnqL+iWFWSYkJc6s9Syc8XgL0oNlFeAa3rwM4ks8vpWQGwll/BqRvFUsL84hoh1F89+oPOkVIYjBq8zLrtaRE24yup7B1qAbR9HWzHIUWBKX+ENNlffpeHUxxECydJ8/K6P7s1AAAAwAAAAFh/+1xk/i2g0q3Kcwr6mkT3U+6kusGBsvcpmnseUklUBL7zg/Gt176v4CzCDsTTswY5HqpLOsmj0EI5UfJ2LcwXlU0c3E790S3b/imUMsLMFVVwQ9lFg0/islFhU+UXeF6BOnPMOppmS34kg3D6OqTAS2BlTIdB+StigbnhKTPuuKLbdtAm2NSsi94yiBS03jkWp2FBZXLDYfMFW29z7iJ+9wVSiadlFnwGwZ9NkL4e32+vuWnGqywyw+gt2N2bITYAAADIAAAAhZ2xe7DUiMi1Kqvd1k6qKSh+OlF/9ks+6ICSCYAhDyIo5e/zUsrTyISmb4sjUdm3yq+vT41x/2lB9EY58C1rqFuDu472AEM37yYdQbvpLybMr1JXCm0+TA7tpZfEz68+N7mHawDDTNw0meP0Pi94YIPwgVmrEjWx5UgFQLpH0VeyqXILcswMVNkRJTmPC+3vSE8lG5e3uLa4WN+iCkWAVSmZOmHrbMvPU/S9OzL3z4d++7lrbeEMNBsahc7eyc8T1lFkaS8Inrk3AAAA0AAAAKn3dvdaknjesjj4DXjlw5jGy3uNOZrEyRnSxY82PmonyAMtV7890cqzlGzHKydp/q2YYvbtPquAhiIWY29bfEkUk+IX4ibW3hg5IR8g3DCPybt69ZZQLNFHk/lyTVNxwYCGZHYxnxX0lCVyBJxgJka265Q3tyqGiGnFp4Oagz1fjDuFJzywpAvPXzquRXMt/HCr9crr4foU3mx5Cq1g2fiSQpXZDfCLhe9T/GEk3wkvIiS3BWLajF9zSD8SZdSjEWajoLpYLKs+jw5XbDGAru04AAAA0AAAANlMAid04DYbLUJippE4sYoQqWb4zNKVIYC/yzI3f3cT5exAmaOdbLVdKnaPhdXTkQQtI9tLJLxgnvYfN8t4CxfwyUR08+eYVJzpEiSfmkV8YjWLIuC28fUCP3QHsVs1Y0qk9fR6sD4ChpVwA4PCjmdzOTCkf4W6QiMvxjB+JUZQEEfy+xju3EFanT+oE89AJFiOXlzuziKa2hTkoHkNZN60wkTazZJT6IA4cbYsCzqXNX7MCDRZVjZdabjmngDMTP9OpYEH31sornD2qiUI5t0AAAAA');
