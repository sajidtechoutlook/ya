<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAADIAAAAg8LN4LIF9vvoRDJXLKFPJOOMyF7KOAfIc21ANZAFU75e14wpgI6bIfolZgVd6PL062i4QCUUhTWU+Dyj6sTyGyJu+y+gd7FtQ+ZDrL4aX1H0p3d3+rJ+yKQWwFfCarN6xgFmIYdPTSKOP2sc9BMdkc5laEbm+pdCOoKIuos6EUowfbgRv4/lOvFjMZ9LlLvovXMMZWwp2QpfppHxSYBHL3ddqpCdn0Jh3QGh58sOJuosqS6PZI1IGeo9r+p2drggBs+q5Brm4fc1AAAAyAAAAHXpw5YC/bBsr77Ur2uprQ2xx8DH+fpYRIff8EuRS4RrqKkyW/KbRnpm1uv7Qzbqwgzg69mZu1R9wAFioeo4HgLJWEA1SNvPBg3jdNsA6sG2KuFeu4e3q3azatuWfwcOjSOSqQqERMmpOZbM8zXc1zmaWDbaLgIq7VvE/R+/nfAEbt7e9shRaM/ohxHnZpN8aESuS+uuI4gHaMESbjS9SSFIpN3V/5wlzIvTWikHtYiSyI0ApO84VES7qXXnb7btOhWlceP5tmMRNgAAAMgAAAAqylNHmOZr7a2snHMb3IVF7m3/8XmMBYIw4Wli7z8OVPlUsLCDAwK8vWOAGpiH8JQDJpohL2Po9NhTeTX3Jj44C08LFtdMn0KrA4yN5LQp8mpb16JgxWpBd7I2d8V2d2O5DzQBoa9C077V2vAkWbU7aYVaFEfkdb/rzK4HpEfLdnIV9SvmdZXE0wHZIj3qz1e2QgiqUmFmMMQzLcqOOl4pI/lES9wlbBjuaoAYwTuT8EPh1q6IjQUrEvoJUba89OUvne7zVLeA4zcAAADgAAAAZPAkgNREO88m5mwrVaQLigH1GkeqtXKg8V7e569+UHPbSK8i7gigGyAopu9b+NJ1xmDcZ6b079KfMh8NVfWkFWu8PEOQtCtbpP6WSstFBAawWrljO2ZVr57KTy6M3AZ0G6SJVz+N7832xECpg0c1kca1NhexS4zakJ7EiWfnyjfO5bu2exbaNVWMC7wBGtrE/IG90RKoOcpI6QK8qZIkhTXIJ76hsKmMgVXkthdqQpgqop75KfhFRolrzIazBz3aFZDt3w7LLrkGNScbf94s1/tIT1AqWl3dbGe5K8bH5bU4AAAA2AAAANysAVUneQYa91DX4voHJDs20Jvyb2hWzCnf904FGhZcs8qoo7HODFTImJgygPh7mNYP2aE7qRBrYpsxii0sahtyGGWvhbkaB97CGvCvyL6Zh0/7lk1HbeojL1nql20hEq+5Xue3AvTCPQz29f04hwo0R6WFWPWwXejhQ+QszPHQaTLVxn2cizVWQLzH4CSyXhdP+pBE9CKFe5x3u9cetYE1agVxJIZxguL8cNdFTdFc6e6QzspKjhcYeq70G31kUheckWB9hLlv1l+dytHoim2ELWR0eKhF5QAAAAA=');
