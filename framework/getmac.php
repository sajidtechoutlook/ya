<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAAC4AAAAmwYevGT0es6Zshu4YPpncd0/2b26WUJYqH7pD2I7uWLnHJQI6CP1hQOM05JpOZF+Q+YwBQs0MfXv1oNk8x0SNFb05hyNg3KuU/U3twNXG27SoN6+chcqkxt0RdvpPqcGW0K+f5HnF/CF6d1xnEBJdqmot6b7OZmbs2j+vv/IGlHoyVvjxx6PyUsHz9xAifEzJIebYevlC876h091MM97V85MSgqUEc5LsDM4eEd9C69PcdMVzabFkDUAAADIAAAAdEQbugZSED3ePH9IX81/QcwQ5WCyNKUJg5riIP9+tFie5WKEB6BBjCgyBD8/YQ3CQ3aIOfmAkXBtA4cg1JWYQqHlttSMym5gr7mErO+ehGKEPfsEpHKgbHEOCDe+nWR4LNBIo82y+CvAbCmqAd4D/7tJccRn1iSqQN9Cfx2JZShlXnXMWb6O+92khIUiL1whE4qic6lyiQsmCHnnbDI4hgVogGlBSbBVk+663MRaYLWR3kiW5YQmE4FZ01/18Qdc1/HmKQU0NrU2AAAA0AAAAGpI6zNmgMib9FaibM2oxoCart3aDYDeTVvukqdI43SpWH1SfDX8/EKADAZbuPQgjD2dOnsR8tTBdaw/teNOI83uVz/UfpKNsU3/lj3DwtmYQWJ5rSyBx8syFX/H8rM4dQlmdMqhecCYDeVKH1PoUiVKifemCVs87HL3X1kKnNGtuR5YsMV5dgEKhSWx73Tu5iENRCzBsBLhovKCesx7dcFROrvwrEwm7785LtCruR5gMeanT6yFPCFYXOTpyD1FWktkyw8rMPCUcRc/rAMv74k3AAAA4AAAAEAis4S38qRIxL62KQ5vuV9Ixp3R64KtV9TG0JyujOkharQMHpTirTKWa2UUFpcQkjfBUOdz65TcKJ/qaDc1UyXeLb3YiR01LwmeN8k7/CZ3qV66GYSgmSnE38A+E31d87ePiMQUWJs3flCNJOq+ydydMkuYQHfMWeqNVX3AjIBB8UcJyIf0ogR1ceYfZbLwUTCp4PNYxpAO9f1JjGODiG2r4shIF1RPSrolw03LUcT0VRLvzr8Sb+ahD+5wGarejnkvS/8kvR/M65dCeCC30GT1oNsqTwbpGof6mmH+f19fOAAAAOAAAAD6YpIjP1O+hI3r45YVBT32M2UvqPODHrwbTu9L97l5aYsz48VauKSG+UaQNU2gX8TEbEbnld4wFymplgl0Auk5stqDDG9N3Zk9isFmew0n8OdCvWV0hrY6tnxvE1JzUCBbkbfeeWHbTmBIdM5ZdfvapTkKqscKQ0ad/uRzb5KKS9xvNOt30nsRMc8CGfJyaK8siBzD3m4guDeu3J0XUM9Fiep2MRnSekJArUtQhnKcnnTCabvJsQO9+U8+E+mJ0bBRohV6OzAJ8GJlQvMRYBMPa5CZMqvqGe2snXFgMlmKngAAAAA=');
