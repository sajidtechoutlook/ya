<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAACYAQAAh7ac34ia8o5bR/ed5V58ttiFKmPfOM1/n1Op02XHa95KNDLCB1X+mjkFHNV6btWVDQkNxQ24FWvLfAl+iQXMkzgaVjZLE0VBZeP+BVEFeX1miW24K9vL2/MuXzPL24VXDph76PvA0FWJUd5qmU6hd+bN5TpEZ9JK4h1Sd+XaZzxJS1vPSEv58YhNdoDJMZEj2Vcj7ZJ6QdV79oBdu5nAr+u1WtCCgjbptMbqP8V7XKEOMCwARrGFI/tSUhFKGTY2mefipWZsY9Zt+zslEnEmJ3Z6BA0L154zHhmwRXQ1cixAChVGVAUpbrJZ1UKYPpmVw3e2R5Yc5nXdohYeokFBvUmdEme0NsgW57O1PqowJWPADnKcSdHCQhUaUzYEBWgd2B8o3/+SA+dNezRMJrP7eG0qb1LRHa4yn+Gz9ymqRRG4EWm3hZZTradEQMXCnN4NG2DtsUhG60tvJHcj5Vbc2AkX3Bnkpog7bUU0jV+gRppzFLtE/EqUDS9m3lTplbtCH5sAkPdNTDtTxIUIW9ti2AlDi60jW/ZbNQAAAIABAACsOVv07ek6PD7MFSFNXKmVIau6UnpyhD+8sPQc0NZWbnkGSduu3IM49aOJY7VuIhl7NrOtBzQXloh6We0RBVgDIjNf3wR+5ipMPuR3tW0tJKK5EqQd+u04TQByqosyLvcGJ2zegl9vCy4CbJb+RfprwqSCsVHD4wPblunEHczMspHc47s2VUDiszCJEtM1vcX5N5zhZLLOk8TU+35U7MzmHVCH23AiVfVi9lTL6YoJRRrXCG1UtWKkNvLY/u/n+YxhkztVYcPiSIMxE4sduiURqcGeqazOd35bvZGvXJcntEC/ZdNzqZjp5JfxB1da6WAp3jmMh0608yFjlzK4NmKv+sOySsaIehIiMoStQ+XM+UN+8cOsWk0NMgvCpLU6fbtnL0DANM8sygcHXSiDk4ui9/Un/w+wGBkVB5Pdrsz+2fZgvJ2Isw4EzxKy1vzK3ZoZnlRhKg725Tl08REws1CTVCdGJE/BML3hB+rZlV/4sjxx70MbVCAAkdmQbN7RwdA2AAAAkAEAAKbWE7TuucfwMmdQqj6gTPtD1xZzxBiwJUpMXoo6z16shFnuEJEdXxByZcjjjmp1SVb4spVBBms3IR3qtBXWFYZlKkqL7CWwbVYQrqOy+AaXD+SsHL1ohP9iMKfP9v2wG+e3DTqvQU8bzbERTqKATnp8f1nrBHgOrK7mxgBkAxqCSIldrBZv+mvu/NcAw3a0godPUPQDEn3tWXGAyzElBb7No6gYDUU9IZ8NMw3MnjMOzeTRu+F+1t5jOfSn8eBOhBWK8PXoQpGHqO63tCl84iBHbCu1H47YsCK+taLLudLUlyTZ52rIp1WWAaYuWQ2j1asSVXVy4I7lCHmPTTFEu33SwTHMrnFJEuf9U5A34U6AOnxDRAvYtzKrRPmoGdmQFtxOVwlMenhQ8HJgUslC39m9cPsq8ivRWT1n/APrnsjGiMncNnR4Hch6rqqk0GPwmHM4PlDEeZbcM6Q/Pw0LClW1bmb1Z8uTNaKfmIz35+fo6QKpjoei95UQZcPFtslum29eHd0JjCSeYvxJV8e6UGY3AAAAmAEAAFYiV9QBRynPRV45l2HsSBpu4bR5aPVV2ydwvt5rAA/wZJawu9gsT29gMM7VTuhV0lCZ+U+VPrCAhX+0o8NZKzrglu5clz5BKwaeWAGbJ8f47zlk6pt1frym2JssTAWdfnDeGmhl96bUhlFRztfpGWGigjB7mgE2GsFpa7yAzqMBVByORK7mBSSZ5P57Z9i7pnjLvZ7+zaEcvNqP1BvNolY9HNFA6d1/78gPsyMC5+nkoUZmw1vFZx6jw5S1dWpywxQX71ESwJBhcmW9FR3k6++1rO5TTdFgMM6iZpAe0u8f6qn6dub/oxPF3wiczxkh2F5k+Sfo2ebypusGIOcFto0wGoWxZAjbKw/rcDIsTwzPeoW2DVxVNFNyzE3i+oE2ul7ngZLvaoz0l8MNG4g9HbBkpWnqNfmHwWI9dZSF5iGBxBfY3g6fwUaAcCp3Otw1jfN3wGMcc7/9wEPEMoCJF3GUcuHdszGbWj1ZGxFfM/zEdzDg08R0D0WuIMm7Sk5VfRC38CAUMtzBv0m726cnoQy8LJjo1yEgATgAAACYAQAAigTIyerD5TbWLjNEGY0jCjSJxP9VmCMqhE/Yj7wWYJeeTgixU2ucMvnlOxDYs6OTvZ6FJmdmP8qKYitxnOoSqzJ/VXcrkR+vQDtF0y+Os0EkL11AsSXWiay9TvBtN9Px+ozZutJWWASLHouzp5Nqn50cT9fMlCXJHhwQ02RS4bJcTtox83rp3isci1FonG4XQx7dgzoWY0jzpKi2AA3e52/YK3Q7nOMDq7RscBeaT8XdSCX90ITBmz7gdiNK/Gdzk/2AA8guWIf2DVIvKxr+my7yM64NyNLePwGmG8MJduxnYxRZp/EAn7aBgT0mKWSTtIzwLIiBYHrZTj4tZk4PkVVVDZm1MUP/M4m6PnRZyFoSQTgu/kNtqn9gf0KC201dspssZx9YlgU6zQrp8QG54Qu+X3qS9LTb5UWO+RCnJ4dPQg+6U0UJKEwfRSczS2v92vIA9fdYnVucbWZ+Nusl7Fwi6f38S2EKmWlNxT2Ha7g4ekRbXzU/B71kR+qGrD9sMC0fMO3/HK3fbqJSC6XTKcETho0KPulwAAAAAA==');
