<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAAC4AAAAsJXX+GD87R9uMIdDXY8Mn/LG7uy+/OGswI7iPVYzYObPPE4pO8f63WvM+2AEoBrfUeVph51E7ybdY4JyMpjWmQWJdxWTWWr/Ib7LDdSQ4OID6vWWvzM9chfQboNNG8ZdRSQArTs0sIPOJLNWAzlXfTBFTSZRibZYILDAk+Cysm/zwQGL5pV1217HWMkrWEVR0sqz69IA/oJJtgzBcB8tEXjd6/8ExbY/BGISpOJ2wPuOb/yGWnGrejUAAAC4AAAAVeOz3xbBba4LvNZ74GzqINOIIff9on1LWEDZjwaoZY9JjdMLHy75g/4X3Db2X0a/+cTUnRDZHX0FkAoJcL2oCpphL/bqv/u53jL1G0Cf6NqvdTVUCN1/zI/PaRKljPO9oEnebHvqSRE90ikChOr8xlv45SIyCe4kLELRBOuaB9TTHK2Uq1ZIvWwQ0XsSNB65nIbTHtJOonVmbrCaGUuS7vF7Db7FupXZNwTP3L2vFj6kyLPp/4dW9DYAAADAAAAAES2LOgMPsxnuxkebek6JLTwoQLeY3Jztrg7zSzZmqV3r1F4kcpatg3M//8qxuGEpP+SigE6dI9QKF7dLhLcemPqbwO8D/T2ykyYv8TmMk3AeBz/eH/cZQyMhBT1ajNubEK4WUYBHNpZdtcj6IQOWl+WsO78s4TXW6rfwYryACaJhqm2KblkDBYe+JypvoM1N4XAjGCrRkbEQvtxARhHzdPih+jY0rYSVnqMk2CG0ulGKQUD6BIm2lOwVLoVhlkl6NwAAAMAAAAATvY9fifk3T9dXwJw1PLF2y6+gYwMdV3FYp41bWhzVPs1suV8ATSY8eJUD3XdvKVSZ01FAhAWoZHkm8ADPrvFutA1zf/pSQ310hJqwvrDcFkhK4ZwlGk0H0P7YM2b2BEuRQe3aIX3l8tFTWhzOXX3Hd1eu6ysEglBAlYP0Dnc1KgoabHxQkNtuCj0FFlorJBRdBoKIf2xpEADgfxyyOAnA2kdmMYLcHoN84G3XhjPxHeCutJ+G6vLTAVLyM+vTrEI4AAAAwAAAADpmWRI77kdxNFv8pE1QH5TA4quusQ9t3xuuJGY+qeDvYEenLF85mSnjUrw7vAeopSAFnpDaa8gQbNk2DX8vwfHM+AGBch/+ldchCC9tSkoxw1jFpm+KYa0dY/8UusVCdlnGexbr2zvp719WoAVNTgY2DT0xJmgZuaVCJOf7dtzC4TkGawGKU/i+XS/x6snmx0VdsVEG0ZXdGFcTsrf1uNYcnUzFb83hF4iW9qqea6Cx412tI4BOuqrK0OK91Fo51wAAAAA=');
