<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAADIAAAAohv/xQIp3p97TvrKWROSc6wFENJe1zPZ+L1fi7Vm3iiSvu1Nj1qVVHF73NqrfJ3EI1gjDW4tRaPE1wZxfTKs3NCsi3Sp0AHzPEE+gRvoAX1oFvroWutEL8fh3SvZSuMFYBd9FnXEV4/6LfT9kBH/Eku2Q6Ai1Q/+QjhbrOaWIvCk8zG9TTAmwr0OFoA52gVtSnkP++ipA9ndTkhmFYQQrczLEvNQEx1FdGLQreOkJyoSMLn9BYIbK08nu0sdvGFS3585z9z7YEc1AAAAyAAAACPo2jVMlGYVNiFYnmCKDRnsI/I11VudRV+AS8Zzb6zDXTDnC57cAbMjJT38bvVozp2O1F+FCrSZ/ooSsOcIYdH+chACL+yUszes+4kcB9qOSxUDDCsO3x0Owm8/vRuLnqS4snv8WvGx2lAFlQcIQoepP8lRUl0Sw4Y87yIfx7HZ/fwYgqKC9ZgKrQF6GAKw6IRyqEd9y4pcQ9Xgrt9NzwfaXXZoXR1AjZRXknOuuKK5PhrGqEUA48gfbFVErJtIMrYfCW9m+6FYNgAAAMgAAAB9WQ3XShvCmQN7nS1hfGr0ggfySYJ0nMzH22fkKKYxHM0ATqPV4k0+dRFuSW6taGZdBxORBfpt6bd8OaqoiCLnCjZ633ZM8pO7tcDAgYIH3nvMDOyv7lk4FJLmmrwzD1YoqqZJqdGoCuKQNTx/2xTmwxMVuJOwioRVgFQxeELKRl/GMx58pZuuGIccireyNyWcuFthuBxpeYC7DAILW/LiqAq5yxfRyQqbgcI99kr9v8zd3aKG6DxFDZiICJHg1cgjbgtahPMg1DcAAADgAAAAJi6+yFvuD5fym3NgdPwnRNfxAqb+CjNnVUmWGACGa+yhzcbytgoSmtjhNUdsVFXdTM0FydNn8rMRy/1Z0VKVTyLF2JpJfagVvBvTsYIaIU5REFWBeHf/carn6z1E0jMjLn7DrtvLQMqk5zgISkQHNz85I0Q/kt9V1WsJVKnWCrmpk+B+6zJn9Q8KPInBkk9rWN7gLbIFIefvLjc9Eu/Am1128kgHgEfMlqxRONhxQ4+k6IJm2YvBhBcF+5XdmH/rbe30XXdbOdpkIkpqEPcMoIJg17UV6WUID9LVvTPjSTA4AAAA4AAAALyDX40caFSMwmd8jRJvZrMXcC1nm1FJHIRaQ8vLzY1KKzlgMY9jsxqkvHbZKTtVFk+oA0aUK5DsiApHisSQosz+Z0RdPGdtpc/zhJkGmOedNVnaLhFEAXAaz2+eJXptQHLSQDHVc3ZtWWBoXAzbftifqdNA6QPAOIG7m64Vm5h9yDHVpZ3zgIamd5bdGV2rgoRvBYWnA3HHaN0JSumpAnC5kkS80rB0jUxHypNttOZ+WP2Fz++3m4W/EWesBDWPZnpglExG04rxTY8uFnFVM9EWru2akpGBpUSGJVtCqrLjAAAAAA==');
