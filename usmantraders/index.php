<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAAD4AAAAR2JGdSIgXW2pM+/4EfjDlCh7BUJuHHnFdvyusATSlzChExAO4QV+N4CxeaO4Mh3t0ZvH7xw6DsqWw5WkItAOB0G1e9IxlagjfJq8z35O09XEGalj0X+gofTmPfIqLEcyHQE0FfKGSkYNl2/GfskVuUNnEi8+LXrn4cHd5whz/X+z6ku97GYCWgcuRBJvd8Qp1SRaAFVz3AMkFblb5u0pDppqDVOcZCTfpDl5G/5L/z9UkBYlIaSn9XNYP3zJwQDE9OmaXYx77Fm1lY2cGmbIgohbvZRd3eEbZs5SNF/RzkxdL4OsAVW0pPF/0EGBEjdi7H064cYz4rw1AAAA2AAAAM6BY6xjgKEffDsNXNNlFxJcKk56YLeAyMa4h+e+/yqQwWac6VRBmYu1gTv9PkOxoGxOQkDuBIT08LI0+Wsh74FCLeyK3xF5vb6406ZL/vELqfa7UrT8B2ne89g5BtLIAlxIGpNHy0D/4hV+gVbT8124hAOU/NPPXHmTaxEb74Uag93mViHHD+s5DCRKxzOCBKUc7jHB+JVsTVA1XF6soc0FKyDEneDMQFno3aq0CNUwpmn2RbosKjQexztgt/T2Xv34vsymI4dVN2r7FgaucXQ53nJwLaMX/TYAAADYAAAAI1eWQk6Ci8bbUIP6KDi0qA9IxBiCWJu5O+xjLR98vxSG3zs4LuHmlLFIRU/4aR64YKYku364doCkyA1BCi5xFCDcjVdtfDZp/PRXYnI2S5C4ESzeaWFyYOrilSq6RUpAGXlRHCQVRA43H0uOrj/QYXjt5NwHy+nnxBEdc/8Z73j2kpZOWAGh7DK/kclhkXSgTdG1DP6lVZov65q19R5uB3gYhceU1OsOPow1RZuSAjV6KcL9aRyx66iGvGqjo3AKLoA7ycamcRrty+RD+yTO4KHq1KG9nGSENwAAAOgAAACpicjpsHpXibKjyppzSeSmDIjTAaHTOQLAOH7H9wwAREZQbkgTIDgFImkANd1a6tEeCsRN2k0b67plsC8xIDPefjr+jo/soMJ7/kjnBw8p3kQgeHsVLzGKsL2eECn4Gc96E0xHG5eOsI6GFjlN4Ogqh+Gy3/q/uLVDWlJe7r3cbgaYEy88HbuN2bbj9ncH1h6AdVmHmN8ZLH2R7Sf8//3FX0DVBvjtRDX66XTuLw+t2pmfxe8EcwA//aa5bPLY/Kdx1uo2zQ/OCYtNzKApv4bXIYoKPPD+NPkaimTXfgqPd/+j5HWAGsTDOAAAAOgAAABQh00MGv+wmQWf11+i+msq3rQCzt4QUjSyeF3ECdNqjDpCJhcLvt7GHXIkufiKNl3QLpakPCiG1viB319gVAkle/nKo8Mru1mQGHmVF4Fjc+0RoczpUf1I1QwzZvNediFnxvmaYkgaseOwt4K3m0RQfpe9dCxNgFFvEWQIuspRKRRAXn9+kr/15C04pkFuV2cz3oZ2iXKplflVnQH2Hwv3nyakdKelmnSmm54xfwZu0IixIHhdXHcXk5v006fkhuCMXw5J7Xp+Oqxqt+w0rWpjjbME/F0v34/Z6J/feZYLIz15unV+VAuUAAAAAA==');
