<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAADIAAAAP7KHTigYzdp0sBRFWTvyol5zl1u2TINpfTEj89+orxP0SOuJ0yT2cXW2eeoqsAC3yYPqbeteuqMgOAHmMP+Tlt6M6VDF4FX4UiZU88nKsYM5CSdk+WAeK1ZuXF1JvQ7O+0DPfy6d0mbCkKcQLZU9WndmH/9n9GOyBoQ3AgwDDRnw6zH1AjKcrqCRnjcWlULbOXT2pmC1ohrxiXpOpmyBpBubwhGOu1TxOSbcYWZKflL47pwA+UORqkNSHtK38Uh85EccVgUxLU01AAAAwAAAAAzUk1XKj0aBSZAU3GF3mv5NH7EHJTRXh4wfrE8QzzEWwYPeY+izj7Gp8IjttTDAC26YDFJejLxwO6iXvEvkIYKEQATYEQCjhU9nupOLT7d8EBVU8rEk2dIggyEThrEqsU++QEavIBgsvgXWiiS/UWc+MNwTocFT1vt4Fz7kqADiwHT7CvhLJ/+RK8m2Lfe7WzHhgcNi4lb41uMIEGLFcMaxBkLJ5QOmFDe+SEDChLukwCd35qiPNjSMBZE7Q9aGCjYAAADIAAAA4plDFCKjzUFFHV1PaAMkql896AHBzCghjaASbTdmj8x7NPeG3OjVmsWG/Kch0+oURkcY96XUScGZ9f3Z6ZgI+2KmhCjT95ONGFcgRgzYdQJTgqHgKsF1DR+iy5mfgcX8rfOC+jBUH/+CXMKtH4nlP9Z7drLlBnPsJH2CmUIG3A6sRQOs/iTYE9lNLHRuE1b0YrHuX7tOLdhRFD62BBcbGgiQfSu4wmI2dr6mNTr7S39NYQ2UAEXyV/HTb8Q/CrHJAavATfPPGNE3AAAA0AAAAF4SO/rXNxc4oemdKGIkA/7KCfb99tp7k74UR2MICj+qZtvOfiqiLyWM6XFBsc5ZgWYSG/BhHvxZnt58YjMZbxyyRbCnojclJvh4FLVkshyE/9BEE8mVkETusGotTpprtjp6unXZ7F7cggUUB1pxYB3/p8l/F6wVrL7ZakmcZoYT6ISeeq8AAb7IEfjqRKI83/XD9kl5wRhpQOumqiJ74ZiM/2h1tz+Ds0p6EG7HDzHpcHrlGUkxAenivWP2qnoxRtXreTMDPRp0K4E44b3GXRQ4AAAA0AAAAMTFi0+1slgVBEnMfdNjeLH6TviUixZHtV3CS76Gn6K9WFZYmRnCf1M3oFEOYmnlO93hjeQQczZqMNpAxnTdW60XCDZZSvlVpnwJ9ral2uFwBN8dtgvtQXwM8QYkUo24GrbHewrTG1TwiBjMDGLtnJB7vgJ6T3in7x7+tUKx1lXClR/QEuKQXfXuSmX5pprGclx8Aq3/ktooU9ceTeqpgLiIewy1qcoGgOL3rKw5MHhZK4s93U+CzzN7xQgEbm0EoArmIZSfBpPxw6CWnWO55eoAAAAA');
