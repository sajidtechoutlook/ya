<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('32122D4A8D681EA0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/rPDUJ07rbExeL0kSy9+THXLo+iru3OgAvXP+EgG65bOex30HdgPB9u26G1wPYywPpCYdacZInq5WCOFk5WBRRf/WgmFM0XDT3uR8nGi/q7uNfoOF/eQ++AiyAHHE9qgyfOs71kuAx+Mm3EwnI7glNGDBNdNkvs3fa7iExHIgZ9KcN4Q9PeEL/DQAAAD4AAAABA+YqqyBypgVIi1h6pVLMD/LY+hECPU49N2uwlnlj/ue5EL0AIPp07IsfOWfh06beGYs6JCYlwBhH/gMCd8K7acqGTuLHvtv6DKfkNIaxDrEehOjPsn1PIV1p8baYP+y2+xlBrj0j5qMn/kXmVjBhB7LDqJIDdtiR0vZNfbBy01BhXMrpV4MAI/iiAHjvGPNhUeIWsV8ZryLPg8QBucd7XbqfdClw30TmKMj9mvBpgo+TKeflopRdsOfpz9YtWUQuqGeV5UERA2rjSgoy3n9ydb8/2HTiZ+CxxljpKjn8GJ7FSbTCj62tzoGn3z54yZNTr2sPw12MR01AAAA6AAAADaCNU2QVy+NpAfUll097lOVq7PhioKMV9riT+tHehIiKB7feoJE6epdfhMnM4Tk7Mx/LNot5G2B6zU1Arpxcy4AckIJn328A7e2X4I/rQOZSvf9UF5WLf75puMQW+V5QEbrGTWAi7L1zpl5EoZTCBH3RKj9too2DB0nX+hAD3//f2hS4CsDlO1p0ku0B0tRgSVXxNcD6cIHnMKYomosmFTrse+qKAgS3rUMGq4gvDMVQSbTC2mqYzIPwYNj+vCrB9BIl8dM/dY6VZBhLHJpNdKcM/qRpUQYdup/DItCvblITXQtROyY5IU2AAAA+AAAAKd//hsmFxpX2joB/HyH6tSH0z988MGzeTdECA97AMOjCso6Vp5jCo79w7eYS2USUa7ajblxt5fS5MG4sR+Psok/T/8VMoV2SOFOCmLhQSzBh+FoDWwCZ/00yDZkREfvVCVuYrDv8jyyxzTMbkoZRMK7LYiOxA6XXm310HmDhGvmhBY4XDkOO6zCQA5YseaA3GjZVFqDEZQk24waroM7ZRjerceNMdXfiLZQOjm9KsX1Ei4xwfg6gLIU1QyG75ZIIQaoEAF7iq2aeE8i/8VANyh6KGeByE76juBoFArqxL9hRULlpGZTCoERcqJTMCjxOmTXlbzgNmAZNwAAAAABAADVgZ5UTbuGY9x0zf18o7lYbimBBX3N5GYV9KF/2EtULNy5geEabyEQ6qlWcsA92A1YvhZEdfkJgREOrl0zSc3QpClcxQUrqOTxk78mZO9oEXWhS98mGQ4duDR9tOYCZtIenZkuEbEqDAy78PKIdLVkpeU0bXqaJCuYPWrMduCRBC8f1/DAX2YrhweL/RqGajArohT05LXBJS//JwY503o81iLmVwT6LoW0sfgd57C74JNS23RkJRAYSE5D72h+BE0M2h0/B5qwRIUPqegXr2Xtp8B/zvKKxWCLokbudWChsi3tvja2zPcrXmwKtUOWNYo/hVU2lsQfGnMzxPXMYKX3OAAAAAABAADaKeWajRQXdThVmnexuPFPhQXZfHHoJaXhFnliZshZSD4zxyc5ozpyVwKEPuj8jAhkA13MqkY/2ga/fiRhPF3QVhwUIseRL5JGDubs4zfMuStFqCcy0gVASBn9PjQ3oSekeF7lGjowuxYpVARWlDMG8TyyWPW8QG1soLnUIvAVb4d63Qzii6d6Ehy0k8LaPeZLms/qmajToXrzWQa4lCNK/CaFxQsylViuJab78OZT+/zbGHeXp1dtAqGUDvV/DO33SCD17Z4jov72KNBpjRFlaLNeQx5TbQEdlsdq6Lmn02YLlHkA3pGs31zojKrEAk371GUaepPKWeXaeoBajFtrAAAAAA==');
