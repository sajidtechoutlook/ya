<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/Cal7HJK/ObOc7vYKvKBOsSbqWajrNZXSwKr6rE8ad11Z1Nhl7pXei36TkvXotdYVUKtnMVb/Un2hYZe2tG13JR6f3yKYvZNTryxOdMXxtvkRsoJUMWtAy/Sj1/P459dbWShh26gQAJW7Iqvc6Ds6DO7ch1HA4eiad3loh/vPW1cRjByjWEtNBTQAAACoAAAA17X2QRZke4VJzLvQTaUddzxIVQFYWbzQJm3AVdejHYDLdmAaL7mOH/Xx2QjjlEk/cuvmVhtE0TKLX7Cy9Ko2XGPcwP9l18kApEhcGhixTSi2XQrczhk4Mogll7HveS7GlvV8+G40A4rCTadhQBFOcfrKUrWrcrM6nePNuWB4wSyFkXVMsuxdMzZt7U43aP1q/9WmHLWqlEtRBIUhawoawtqyIS2u+nRnNQAAAKgAAACmfJOuAADGR2/Xg2kYhkK8DaN6KeLVDWChvKdvDb2zzWcJtF4aavMR1eiIeUm4mVMgMcSjlDvZD4cwQXeOsnHtp8hYxa0qObm2rXK0gQVEx1pCW5vN1mob4rOS9lg/mzKgrCw1kEL+EQyAzI+s5bo2flxLcJ7feiJF479fTo8ba1YJJmiDSxbX44Q2Z5OZ3Q38hofmpmT2etK0DebyUDOEDJzwdTyK+Bk2AAAAsAAAAPhAfzhHlBFrG5sJuDzDmnOTDfcYqsn99ZzXYs1+VTFGbjrXHYtX0H5SA0myCBXFua6Zdc9k3TXS0J1yZSiVy3ZshtZvnwQ1Yl1b6cwDrA60mem1dWCqBOdEi6o8J+tYczHqwngv8L6Zkq3Nl82E7eatEyt+GEo9YreCWiyi4wolT1Z7qv3RkNiRR23vZWXMb//rWict5CxsTpjvZ55e0cguytd4qAcCIG9b6ZYyXYuNNwAAALAAAABtIe7UuufLUfgsHC/z1BuFM7dGy/BXV5FWcsPul1yaMdaYWM60HSR/ykKoNmTNmRf8S7DPmDX10YygSzuVyviYDzp+iuFIa4UHBjqKJ+9pwna+o3Zl7s+HjbjOQyMSHDF6GRTFkED2jhdgGvofmqDQVPXAB5/dUcU8NwkAB2oGmPCnuBHslj6UINKYXUBsl3HLM6RyttkXrqAHJVcJgzyIVsfRkMsELJk9KEWJgYuzKzgAAACwAAAAOCRz/hVp4JhWa7mVw7gvMCpm1rnnySd/y5+fA72NE15xcwmLnBbvYAnpXtG2kI4R3jhPqpKHzpuCl/bnCKoxjnIM8+cSsGvwk+aU2/ZMcSYYIV4eY9XgPh4C+yz9I8PAdXbccuOYoL/Sq2kwj1ZSu8FvIyqs6i6mLDBs1akLOa46VqDV/h+c0KIkdpd45VKK9UVMpwXr9Tb+vkwElQbnPTO1OGRdmjDBVya9Zn6misoAAAAA');
