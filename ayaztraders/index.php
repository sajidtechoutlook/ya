<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAADoAAAAHbr5YZsbP4C7yf+vhz4fx2937/uZIpvU+2NgpAN28MAfjGJeFehDnl0UFSdtF8fzLgy4DLoaBdexYnIrtabAzsL5JCNeyvYhcxQ2JN2myqKXQY6E+xEy9v6AqQoCWScuwVTEOqPpsPpbxrkHrDkHBmxQ4KiSmx+uhL+9xMmEzXyoMKGhYr9Q9VHPfv6gfkZZkfF/ksEvx6Hs46ecfZS6gGf5QjeI43oDK1IdYBLCOo3kXVDSb9APHnCVbaf+9yU2BTp+HVaFvEj1vONjFYZZ5eDbEp0CFrUdB+l6u8wD+TDTRqoDqmu6zjUAAADQAAAA9T0gsP1v2C/v1DU8wYBrJdi7F3S3uruALe7Xpgf5PlfF8IGL9H6/wBAX7xVmiLpsW3thC1YawCXuuQFuRFD2U7yoB8zlrPdSCzO4ybUC5Uku6Plc8cv9aAuMF2JpegOGMeixZMQtwb4eRvUVlMGPuxY1W9sXM7xc5tU5S0O86zsnTwhRoM2d1LFUu3VB2lXqckpXkTQTMgktpRq7RN9i2S8Tumu7VSvc66bKw7KL0sWAsJELhsW+PFuF+tJptcfFl7nWIoKdWka7yN2H0KdkLTYAAADYAAAAYa9XQyplSE/84PXl+iD5jnvd/ikF8lLaXPOJIuCzXLeSZA19g9u8N4LpZRDOe9hD288gMDkL6ASOCcz10qCaRLRbOSwBNB7gXLx2girLlN+rdCCHktoa8c9UMvr457YpngvdknUcl0jXi6aIP4a5/i74rRKgQ1EzRjBslOPaOTBQMZUf7b4IpYT/Vov3zJUGRDbQF/1Om4Hi8A/Y0bLY0iHGPNL6As49b57EbNa/hdUo9f0MPTGadubPi7mi9lDFB7+G1kyv3jZQqfs3CRYb5JZRiMLiywalNwAAANgAAADyYmmT2nzYNSUZuuGUy0D5fcO9IkErH+OV5S52xLWOBAZp80bm4CS3ZavXicXqSPmgGILTTCSbB8RU70m6cAfDnbePgHeounLsLVmX4EH084PLT+AkQkj3DbZ1rutg8G8ZZaVW8ccNMtVzBhUHDbTLyqL0KLuaV0ow6qO9Cy24EGlZI214YQk6OOGmzvapToxt81csXrwsWSqMHgGQrXtOZ40W69nTi6dDPmWWUSUMN4AnnqmwhVnLEYx/jurH+IfOSpIHyM3L8PfYXEOfid8b8DT0xt8KTgE4AAAA0AAAALf0Czv9Kr2/zQdk1YfdthR+lTjeemhjqX1yJUtoBoTa2zTXFG499iugoBWSAc6CJWoT4UfmJHQgn3zOISWXFbMu99N9rAiCN21tWYaMOACIHEgWpKA9iSdknXmCty9fvQL9hPgua/aTBjG6AyHsLYcyZG55jGvZ0kR1ggLh6yyqgfVGaOkPzRmAS+L6NMV/xuJtgaznEOa8fBR2V7lCZJky+oYkcOkQhNYeX1QHqVPp8aiwXQLt3GOZZmBlKewatGSLUjp4zmB7IOPu1Vx7IE0AAAAA');
