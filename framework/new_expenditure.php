<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('919359AA8D68264CAAQAAAAWAAAABIgAAACABAAAAAAAAAD/v6j1pUddTO12liHXljg4vfXdXJh+ETeqCY4i0W7iPSsm+bWLddAztMmmDGHusaTOu+gtOhkbixldt60enTrrDcuYXlP/acHDPA1Ngq5bxz5J11qggQnr8z8NLQp1jsmHx/o9MBujYNY2XA6K7pDd35PpKsmmTd7+wjqBarFwtrb/reDy9LWDHjQAAACoAAAADDyuMpetpy4F6/wS0AysfZVCRL+qplnxFcMwF2jPu4KNLYxlh4Es1q/ZzycgMkcFFDeulsdIF71dIVt738V9sH/0ZhSpZquLhY7cHkEpb0utRhnkrenp+X5/BilE2b9IF5xVJLLUVwVgbmXcAExl2uOq4YpYTFsNzoopOP9hK2yEchCoPCvf08fgCozVwHQHnjDgkz9TEyQ9XBFT2Dv1ulUxLBxtu56fNQAAAJAAAACfDthILyWOEthMJEBkTQy6KcHgsCNblSuOoRzosKRu1FzHnkUWbL/wmv+sidqj+8PI0OM8VN0tUmETx+ODtECC6OFFeoU/A8YYDep2OtRCiKJaVcujp0sLFBoUe09qTbvRO8yPcXG6pDKR3cVmYtfIC5bi1a6vRvtuqBUTNzVr1YL++kyzH5cGTVSbxZ2BFtU2AAAAoAAAAGXwiHNkxdZSVE1x8W0gbduI9LiY5aj2ty0sTok0CBrjtimi/lCSe0iL9uoeAhuzBLEUTSoLB72LVGY9Ymeq039KnxAnrVVa3WacAYLzWAeeXZWcINwUS9SlkbsZr6zH8KhBlie8XFSxQOfQ9A8eqOFMxR2IA/y8faFJJBmqaYNqECagSOGcy1wdAvbKRz1oNw8KbXVotS5xbp12hHyohiE3AAAAuAAAAHBd4taF9yGIisGXKuMhe9lVuP36lq3odVe4bkhfDyfCorJkdGbunGQaFsP4Mi4DLfORJkpBMSgncgvJgkdfx0A4HWvjVlGnMO/pTR2mKc7PboEH6z6Ks+/+jmynJwTJ5Xtf9TE0ENIFHSllKRwIfVZZTV6WjJfcY3jVPG735U//8RDgpTsLfpAJ7WD72LmL5r2XqHZvMIDHO0vyiJ32IUUj4/4FEa7g5r3lMdFXUOSV1HgekjHVRyA4AAAAsAAAAEWK30IGIfPSqYwuXhOHzZc32oliWrk3Xyf6HQt8+TZXdFEIdF55wl1IDDx0fQ8XfYH3zzxEbnrr6UH+N9rSuYQLojT1fFDVDj0Hv/rAZRDDsatW5OYXdHmPEZur7csi+LdIQoNdNdkjAN9G+v3gmsflSdyso088zLGL+dsg91QZsQ+i7wAC4wDr9KWrK96gQq/ttKi3PbvE0YioS8nTzRqo/30fAi8wQCroNSNmM7u/AAAAAA==');
