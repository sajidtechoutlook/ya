<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAADAAAAAcqP+APryIiTcoNVIKAzlOCoIxgmQsFdb12McSB1s42Sg3HILfBL6FFcvc/AaYQDn5QI0oGiMzkI2gCV8ub3DfpH/QFgA/bMVNirnFQdUTbp+e8i+WfxOg6HQ+PYK3dFem11UIyEWTh69b5zLKyT9QrmoUpvMqggo0PHyIRFfPXIE9/jfL6ozqR1wdytxBgHFye3SQti6Uh8D9FWzZqSghFDOkpWSMbs/ePJi82KyiEMaqZs8FT8gmp2Y+MC1vf5GNQAAALAAAADLgYZg9TWU5r5j9DMIbPg9vq5aSimDqZ56fpN1KqJGzhKKbQE4zI8AAhCKFf2fvhqNodcDyBmVqmpycg/uIbG8DPVj/iP0qc0f+cqIImYDPypqsv0icZJxZ4YFYVukppWYf25+78LzSe7Ne00Jd1yboq5rKhZXaGVDopaV3XWucbEcxXVHeRsXpPO8N7CEo5HegH4UxOpJzBHtY+7jmGRj+0FLXaQwe+siDHqm3r0u4TYAAAC4AAAANqIC5LWiCysEgXoIZ/wM1+9QJvJqChjcgI16y1GY6fhA0K9FNP/KC8UpFjDS2rqh0OKsn7gS4jocBEEZ6cXVhsB5boFheNuGimyaVpdBPHfucqCGsJM77i+Q4GosOh2vMPgAASk5pP34W86lLTqf/r/jwoAK766WtUAhswTIg2y5IQcdbyrwC2Ic88e2EPQlAo58pF9uwoCvn+LW8gU81IFJpcmvl5i2rMGD7mroje42e1NECbPhejcAAADIAAAAVmxyk29YwzAhlmPaI0rWaY6AfiXa6LvkFVmXiWl4TIiRzrIcJwNh0zAbUlyV8MVB9Fu4lZLvZ8cPquueCV2FkgNpspbCA3C0/kl7BTa3j9jtsV79k7BqTN7+R2tufW6mZ/zDK4STude+tJP6voq2oFb702saJFUxMTq/7vkC0+ygviALUTs7oumGpuPGWX/FzGf+iVd8IaXziE3CZeYZmODFhu7YGlnD2M29nHbxXbIMj7tzAeKxmz/p6VTUdcelAZcbWx1pKPw4AAAAyAAAABVGkPd4LISWEY4rIp+BiP16Aw8fyIKahQgoHF0+lnW67clYupEABsgStA5O/pn2tjymGE+BEmfc6x8sAqFqS3IwuCuatZdt3osDE1uMLJ38cLZWBUXh+zVm6DBNwSPZjUkIr5C13qHaImtJhkW29mshAlxQFTUv8dnPOXPA3X+mWCWlhBCybks+M0FNPiaeHN8HIXhpTG6ERThD0BJSCfT/SrsyBLN6NqAycX/vm0EGBaI8DprI2xWlpeuE029W+EXTw6a5eyaVAAAAAA==');
