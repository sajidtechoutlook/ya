<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAACwAAAAVf40IOdZ8OCaolw9neFHYIYjCp8EImZwkmBuxEV5ji2Kfj0QN8XSKPGBSqEqDiu84w5oby7nUVIka4Kfa/P6L1Djh/Kgh/LKm2ZNwtwB0FpnlClzHUkZc0yV5y0qbRwDhKuafPaftvNBIQ96e5yL44AAdkh9FR0q1MDrhe51OEUAvDs+s8EObJ3MqJKkt5URCq27saNEMDfRrartPy6D4REBxzOJjDYG2wXhQFTyn2c1AAAAuAAAABxPtRmWwO1JSVFuV/AXQ4X+5HxJLvlPdEbli1fK47y48ZF+s7gvsHKGJJJBcU8C8HSmBDqhKXxCXxRK4lzH2YO53hdgKhoQNhp7eZ7IEDSOfcAIG+ZaOgEPCYldiWF4UVn8/BAgnztqbB3GvLixEdmA/L93Ok/UAHqNghowUj69/0YKUeE8ufj1dvPybcDbTnl4cx2p62lzphHHpeJmcHrvOHcCleWnot2goyxtha17Y/CtP2chlyg2AAAAwAAAAM3WNxq1j6MYyGUQK8cIBnqVQf4rOGe5tzUCpb5zlpliscFNNW4/AnKeCqk7LlQIWdYPp3pXVqK4jkJt4Z0JRAYNvPPHkhkIJPKRBudXmdoEB0w1wUlhOIyXx12RpmGnrJbmvYs7xloxsCZvpromtU1mZiEklqon99O4l7YV2z8ST120KPX+FlTjCMSU2+R1Bo9+TfMRWyAfDAfLfwU8l7ti+PzRtsDTPPUoUl5EEaMky6OMa+HLO7nayWAU+1IxUTcAAAC4AAAApVKNB9QBlLQ90oXR+Jt6Z8ggjr9hxNuHzmkD4kvANdbHWXVd1GwwLx6dsYvZEuFafYy6tP7Tw2dFKcHLVK5XvXe2h9/QhkPegOH45IOLenBTSSHdoUZ9ETlRtbTXbknkhu4Q3ZSN1ypRzafXro7Rshw809hY9o0Jv9syEJxF6XzIhzR3GMl7x4MQuXW2ttKGW/t3ohxe8RHuPoFka030eP7uxLntmwXhirx4f7P9c0cp28W67H8fBzgAAAC4AAAAlyD2ghmJd/PiM9urZAmnFuIUYfeDCGFxtkBZo+7gqGhc26hbCA2rk7nXJZczJN63QNgC1Wf/cI9rwXjf1Vf05ElwsQ1qTjf5vjNMS7Joq4poBAaBvB+w/eioO1pwFRATwYshLkh9h/hWb2Jz0i4UelH0smN1bVz9l5DULmhi5892q6dsdQ5AzhlsZbnngTRG8AjN79PBiuQ5Ds7rz72yiEkvw8MhicAUDtnqunORGDpMqavdMmrF3gAAAAA=');
