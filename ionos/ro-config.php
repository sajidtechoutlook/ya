<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAADIAAAAMsHjmCtuP+gj7K4MNCeW2cgLfYbMLm3Mp58mBWPBXyL07tpB6wyMrsqFCtYH/Cxe/HCOIL9qmuM2TiVGzbvQyS3UKeTSMUxGYoGAoXmFXBSFYAr5ceEHpfsecdVdn16IQQTHoixSfrDwBbrDjDrF7HYE1k/mm6YFEg42cu2flpYLOxtJ9tSRwQUEX1zZNxORzVIXqbVInYAFlQeRVBRiWsxJaX9+gXtkBnT1OwTgSY5114D0qileJ67r/rbOzvMtT6q6X8f1Cbk1AAAAuAAAACqQb/I3Yf9Yz2PLnQHppHn2jOQhbL2A0wZlHPOgcvp+YtHytJX3RalAxYdoKnxzQvO9B6hthyJeCouYLOLILSOFYmVOi+GTOeIhBdGqvj0Mu//jd2ThXPMgI2zE7Aqj/EtZ3hxG3ygtqKG1XWV/JBvhT/Ab1qwp1RiINDjzwt33YxURGzCyoifXrdGTV1WqIOIhF23Ud6jxtsymy3lrmNLJVBULG19doWuOK+R8lKlzVVSVeaH2XQg2AAAAwAAAABRyNsHKTUwCPIYDcGgqGsyrgdh/AeG2gz0VRA2UTFD17rkj/QRTh/xG2NXNwfAM6zDxjHySAs1k0cH0nTooPF8CNjjQcs4hXrfHNQWFaCtVPcgCkLLVMJkE9utAEE2+rhAkXgMJ7P7astmaYCDzfyMfMI+XEwOMzEF8uA4oyIzTf0IpjZMrm3HOpIaUH1lPF7y5lIadzg46Om21Vdm+3Mkv0eN5BRCns/mcgxzg9K6AuD7PixC4/FNWkD7wbFjj9zcAAADIAAAAfnxjO1da8tdzl1gf88JFcT4xhIj5/V2NS0mxNfrBp5uisVzSIuXPYXLUxXiWfHACIbmoot4Ab8GyUrNuMw3/8K3cp0zOl1ris07znl3KmlTGDHGr0JCCSq0oKm0HWTS5DHgRsk+VZbvMAtaFQqlYOEBdmIn3A/5ZEtFmoj1cRmgWDu9em9n/iCj13rA7svK8NrlO1CHo34yOsq/aLHwaNGgr0OAmzHD0cYv07x2MzkL0QkZuTW6vhJqcDotG59WXhTv2AbaD4D04AAAAwAAAANrmN+7804EqEF9ACtnD6PaivXAzsRjkxmKC+GxgJJZVvvW+7voEGLeeVrVZ6y7wwQkc4ylWnWQjMxzSoCBlihaOuyyCQFzyPPZwB8Iy65jfwoqJv+P+v6XT51XqUDR121I5kur7njhg1DD3iU8xTFuw/dM/hHzIfiIw5z1D3XF+dyM/7U5WNQQq80UtjfsulrDNti87OG9QHlIfRGDtQNtQVRiQEoP5LHmA48s02/VRdXSxkkmOWKbcshEE/OUP/gAAAAA=');
