<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('134834728D681E1EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/KByyxDDhneFlFF2Vxt0VuReQhtkRxsRsrm5qrfVnqADHxXa9J8xCXQnbel4k/rGwm1jXFhejYuHWq8fNkk/pwAoW93blH7x/72YUeESZ8qDHWjRBnPivglFPhS8rnhIiL4lJJMISbHTCHIKURS6zBkJ6YHEGLFoa/0H0QST/RNyQmYEJ6MfLNDQAAADoAAAAAx5PcVXtRG7EE1lB7jvtLQ2NcBjYexZKpJzWzrB+PIF5A8DaTW5U+CLDmK+r3mAkLfbhjhTq8O3KExZFmMTaz8Byn8C4Fa7I1TCOA9FJqN9Shwp3fSNHo9rLvUup9a+Dm7bpgG0idIrPdqnNorMkXkECIvl/jA4Dgk3TbLXFKj6aoNaY4LdsA3XjTZt2VSvnHFSpHDWb5pcASthhHvkVwWPGg0W99S3R9j5cJYVL2oaVQ0msAhDcbiyUp1nryvC3d8kU6H8ULI57LCGdgAK+CPQZy3U8UfeHS1j1A2fypANKrh/c2JPmvDUAAADQAAAAEXgWUfligb8rG3YF/DWonvfxQASTYxSgabh/mz830VrkrM7fSOn//K48sfNlBK0Wnqx7pT5dQGKIC/d60ausVLONRDUgFhzJLMgy/k/g2u6G9yzoSMTuOfSYDCWvC64Kdj160dAhteL/CvfvM/5kzj7RzrVbHn0te0LoU9/B78/W72jOJ3XbPotaoMI5T8PtI+tUnPmgh3/csZZxMrQHUn83yPwn89ZeS/kHhVVh2pK8KuEvRvDeVf1QaUgIIZZFtJh5+mvobJ7Be6dwbINX0jYAAADYAAAA1khcDvlWOpS8bnOKCL0Br05AmqJrmrg0GDfgNNPpfAHnYJdyLfc1yK8QK6Yl3X3xTfx5hYhhNOYCe//OE/pbdwF/nv9NKdrgEYFNDwXcwk0fj6/hIAkmZ//VXi+m4A7JPd/wFBusuH37Xs7cwKVg1zLPmecT2+th7BPgJCiIGXQTAroSNMu/kgok5balJ3DJbaErQ541FHOhXaREL4DhuralFUI/lRwFezPDBuwI71laYTz1eY0UNhLohvb7c4F9mLUDp6LRISONXIjNe0q36t8MWyxr+eyGNwAAANAAAABszaiGaznZGOd9wgQUmWhLCvQMDwv5eTbZ9S0p0rELIXphMznkx+iIo82F5RZX6eppQ6VJu3pvuPl4ea5Bs1l9xwZicFHzfgQ4uwnoFM5V3yuGdg6Q/02xoV21kcBC1Y/RilxiXFqgbMp74OrrkRQ+scV3r//rXf9KNxneq6C41t6u5fH2bLl/W1QoW4oK/wunWow8FFnCiE1SXhVH6NLQlhE1UptieQhKniP6a0bb1ntX/K3y2V+m7kyhTcWtlJM7k8EdcciUmHko4FAzk5FCOAAAANAAAAAKr8rG0iad5XGcfmfnzrsjKatr6inMjEWeKODOWNIgYsCGWbMN0MctZp15MSdw9bILStqOm12gHAlkNc71k9KCyYS4jsARhCHJQkBS0qfLZr0sMpvZTnKpS8wJgnhqQ6Vgl+7JnzLgz7/o+EN39swbgiVxBcmG6o/WpyVhPvDxx1PIW8YbbErjSCX1lk1ml+myfxQHQWZw1n8YmU30dVSRmoQpSR7Vlp28KvlNJmNdswB9p8DirrZPvDd3my8j+44Nkm3plUkc18E+XX6DyYprAAAAAA==');
