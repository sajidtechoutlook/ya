<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAADIAAAAojWZlXy2qSXpiUfkFoa3zXISy1WJECJCy1esBMn4pfrJPMEOCHZWaYY8w+H5zEI+lG0UtOsQsNIpVRqunPVheB/slw/hR/BnbLFX5fJhFskWyEMoSXFTWRVUxnEXqSQixXb1glJ1btt/Xssf2sG1RUB7EdJFqf3HpUHluSVkJj94lHSI/iC0EhZUfe1d8p568lnsmvmAnZKleWIv6w4mJ2LR/g1fMHQMCca0ft6GotgbYwydWtpioc5Az07B7A8AbKdOWlpbg2o1AAAAuAAAADQKYHE7o+qxKTwHDXwGwovy0HOrjDRDSuNYVFxOXXVttZWV832vA7PZAI3saZkUGrQNsJKXX2JGDro/gwhAsXBiKts1t52NxAJmpLb+5Sd+z7QMJKplI7P80JY4kCanowXmWYm46eT/bPDkpTWEUCyYH0eFnCgAuv1a4YTluMQPZJvAnf6OJMwzELLMdFgnK2d9AkAcqn7FE1SaUpwEovllzejhkCas3EHmFZObuWjp9HBICjeRTnY2AAAAuAAAACAmhZHzPZJx5MiRR3ZPod6zCmKncTNoC89UtZmKayfT4H0lhHnY2RSY97e97upGxfl7e+jmEh/4zCbCkflf03dNcVD9bO7l9wf3xCgOejNNb/9rjbsigRh4TYRmLv0s9mar9FHhtHpS7VrIrRKtgZzkr6gdjuUuk9plH7EgypSklwVHA2HlPQI5VuR92XdHUUu2OCVVG8V17AIH5tap7ma/JVSpcmuayyUB+LhqO6znjY9rnWgxMFQ3AAAAyAAAAJliJcjGqgA0SoqpYDE2JW4zRdJpSnKHJ550smJpMsrID3i6miXOIGsviYd7HGElYpUNNrIvtNAVJ/yJqr/pOMQT26I75L6nDZCovMWZjh61JNYF9liNqX2EJs+P3TkOjhiKODhFZ2msKpgtq552zRjjPLhrLHCb8/4nnpZonIUG807dCPQg8lx5pKIHs4RZWBitMgEjktgpdOuRpeMBmCUnC7beOIMTJ7hWjRy8MRuAi1iy/p5wdyHuqmLtEbVi2YoQE8HCl6liOAAAAMgAAADRlS/XJnLQA/ArVCvrSFiUlgUjTTVT/4YdcZ8dTrXBPb2J65WJUCxxaX2D96XvltTM77vGbl63c70lgoBF4FH4Z1bUh7pz9YLzy6vfEE7XFhoReES3fwenYDDfZq0DHHcleY1lzP682tctrwBhSgJZxJjBoQAulOdg25ct6MWmA1N6UZEAh9Gjr4vbkETZOsrWv9/b0wmHJli6EGgawOdr/I2AsCvCAyvaQEpb9r4VTdtgo/lqMLnRYBM7cc8fKcWIWI0X4790oQAAAAA=');
