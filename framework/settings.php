<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('341860788D681FFAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/G+Sar6SvyGRNn1gwExfhair33gt8oNKiXWIxxQVeCx7U2Xc1AklztbYyHOSYYRG6n6FGG2ZJ44fm9Nqw2KzBftyY612uLghUy1jy2AAe6an0X5T9NrQuqdtXkr7smsNUFoFDtSJNblmBewvS8nt56MseCnjNghj1E1MwLZzXSCLrAHStL+jx1TQAAADoAQAAof+Aaey8aRjIco0bfcxwk2b8yjZXHfg90DYo+zejPzaNt738i2D0aHAPWVBZ/Swtbr/5xDVbSt/DzK68IBHYwf9xeJ64//Q5KV20F/MPIE4UM0L5xwDIUt3fBkmO+p36PxIjDI9Mahj1piWSX+OU4JetvAI9BeGpnY/RfOoG1IUGybgTYJoX7BK7mHnql+eoZj3yA+YVwcV2FN8cQbsQB80xmG1zRGX0JRQ9UG4VEFS8cv8hHIQys/d6kc7eFCW0SDZC9g8K9YeEgUlX1W9mLELmAMsF+yoDyFziN34bmEyaCAC6B0BxHIR3q/eBeJORKJdFtXxFWQm0uZcFeydM3SKBJznHkv8Nkrl8M6wj2zrLWXXrKP6zagMYcFCsHmN3zi9kWd7vowRA1Gvcaj56mI/22UU0Bwq9DZMhl+GQ1BCDtg45QiRARgcFNZ9z359PLNMebBwufP8PfmbRu2iAkfx0Jwcv3LICUy87ZyPG82oaWYYlYxonDkY+BAR2h0Y+jVB8Fhz9H36lIOc2l+ckiIPmv0Eaqs1sFC8EnJRZUskyQoGzOJjmptdtWUZart+wj9NyH3oTAA/d1it/Fp3GxnN/8JTTgZ9OVhx2UG2QARPL9j4hMfNspJ1yXnFhMiDDrhUXve/HJtA1AAAA6AEAAHRDkLBR2sZU8kUMQYVk0oXkh/xI+qS+4b1KVn9Ko5uohNZb2spZtVi0Udl0ATbjMOtQlkqJzxuvtNkiq12ryJvOZtZzVVbEcYPn/TQggYaW5PJU6wMwJ0c/1xYxd/66j45xD7pzrYQk6C6ZvEYDyNo8MinQv2x9YspByhKWv1fwV5HVtpErwQHhrtFDefz0qSJeyUQMPc9nWZwCeOgWKesgjNZTtgb1eCkYo3sp1HCo9lk0L9tdxaAjZKrwbNsDPnxKw5/aqoj7gqK1MOTvqjKD/Qa2BZelylBnDeLMGxKo9CsQ8Y/1+Eg9orr8dlCRuHk99PDHk54at8uo1PitbBYRVvx3Q6E/gaR4VJoCD7oDKtTkoVZy8dLZZvImqRVRAlwUKYcff3JfKa0AQZg/B1C4UkGhJedBjF+epnBqiieXTpc/jTXrNDRDtMexKSDhsJTHRcBk1cVRJerJTCnq74NhzsLuQySp5LSKiYHLHVktV4GzSr6vtBrjEjNhqq6l50f6PqLH5lgapdbDhlzvB5P5ISNiB50LAs1jkdgrIzQCbs8pXztWwNMMc1wZqFblgJfwWijDxGpsydsgMjGKvWea6OXIdDlMyQSTlqjNn1O2q86qyF7rN+PDukKxVnDrvpIUhBAQroAhNgAAAPABAAAMjmDuDAy0JkvBnlw1qyYaLJauVLv2m1ICuXtqhlFojvfq5SI1mohJzKb9AlXr4qMAHC1rVLmI/GjFQ4ooPEx2hLefTHcE/iy2vusJ3uH+VKpMetYbj1PCpnXxConbx6mqXQ5ICuGL10yrYZDTWSLEDGicqmGg7NRsHp9GJEXf18gYLOjnPhKxmvp5wneG8FVgeh1QPeeACD/K4IYXs31eCWFU67yXJlP6/tgREB3SbBy478G8pVNRwHyuQrG0X1UVIbW2fdchA4HyLkz2pE5oDYgXYMER6KRZuzSw3nOvm0EtZmQnGi8JfS6Tg7Hdf1FKbyj9Uy1086C2fp8JGVDuiA04vQJwqtazdm3P3/eaZJQwBgcVyU+a4t39G+MBn8tyUs+WaVRVCXef2TqcvSG79y5dyJHCepOTw7K3kpfIuwAc7A+1zVrgkTfuyx/6duQL+p4KL2hN1i/HNbTA7208Mnuwh9u5+DOZeW3nmRoAkRDMsxEuzndfG1tdK5E7A5qPUe2z8UELXhX1HE+KXM+ySQfUSAdz8iIzb72Vo4xLNa2NbSMTsvLtVfDtAJTZ1zLNCY8/6jxaBYzJnX7jhesJQbL5ycyGpqG9F1aKL/AriHdM9JXVMjF2WG3adTySlBkpvMY3VeBNod0a9xNI6Fm1NwAAAAACAAAGrYqvGHMFWqZ0f9scRF0u3Aau2SXXYQLjgphC48kJTMTy3/ZrbrYuujejtFg+FXOVwFRlk41jiu+0XETpVKCjNuDDg01ZC8njsZZNUvr32YQhpCoqtXbFu4jtstDNL0rFIRHWuRZ40IqZ3dSoCwDLbWvpj/9A2QaUBAa41Gas/fi/y123QaXiUFHZDvuwaBixR+61dSaNh16iISsEJbOTHYRc9t9wCAWdaeBJ0407LrK87D+U/59SLxWf6qrun5MQWzUl5y1+UH+j1pjzoToq3cKMr55Uyf7iqD0V/aVNvQorWE8pAZgRswO7gtv6IgYBK4PZqE3LkTwVjFc2OrKjpe0D2/l+i9sEYFGj9g+u2fv1p1GRFlzYt/4FzEHWRgW/uZ0D7T2tlg+pmQskRaXFFH32NFI2JL44x19lBvfM0ry1tLV8pbqnUlvI/ceg4gy41Z4FZzooUQwQWl/7kgrbkpf0NHLw+hqR+UZey0dNemd4tcsP66XPO6KZEYC/VuPCJMSKbdvVxulFjNZAf2QMTvqvUMjmdUvi77eVsfuastHZHenH/XQNmC7nHRTmlB3C2pKo0+fBm0XZEDIjni+pvdn9jf4F05NhWk31g9DUJDPncj0UTwuXmD5ZTv79me+z34yy5KkFl8kzRyiWpfX7X6myxFSLI5VkBiYSfe9EXjgAAAD4AQAAQjITZ9X0PGYTq383uv1qMOvLSpQIgoj5Ho6uCXgCgpM6qBv8gYNRrjN0RjcwVjf/EJdxvKU6eGx3StH47tOKwvypEg62NizlNBpaFrVnhnrUc3QMfPKJRnPivqUJ9kltI3FNIKxbM7Swgp/OEtoNsYgGWFuiCB2KpLrmwhguYqKYgwCJ8bxGRa/DR3hXXZuhe6jrXBI5hkSfbXssOBGJLHl1gwQ7W1mHmrarth7Wpi0YRovGwdZtCygI7WXJJkUGdXSQ+BX2/k41Z2bPsPbn3T4bcgA2nDVqDdw7vBZzrqqHZT25hexejKH7VgjIF/tAne2X8QjPG5KZS6fUwxb2plFTb4Lw4Y7pS7FD+R9ubFkSfW5CSmGehGofJXYkFQ09dsk5l50EAB8XVeVHfuRmv/1PfcmyXS203RhblWT2VRsA3IxETujkwXPtBn3vqZMJ39ZPMqbL3JnYAndlyGxEZDtqZG3WpmVLW6o4Rg0bckvB3h6uvPibGp6apOzW9EushKeRfcPnIKGQiI37DHDQ7mJV9VhYyc48ROaextAwNoL59JKW8zgo8cl26sNhUVSjwnc6Am0k/2q6BdA3af48Ra/cGAf/3b9pKIcBgMiFoIeDPuy/GzmaL86Z2SGPhibu7nrFH3VxcoeacUSkll1SLjZQAThyYmTPAAAAAA==');
