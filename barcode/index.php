<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAAAQAgAA627osH2mh6+LBs92q2pZRpbocL/rrFxDjIJ+Mu55+P/9B6Q+qE5v5A+PQibEVJmJlVY+280bnnwDe/FOhk74xWP8yFbdMefyZuNf/YIy0VN7vPCL3JAdNMGUxMG1oEjZ3xSUiUuREAfhEfwwRSwhI39ldWh9gGt5m+QtMnfI4YLnugueMvwE64QsBANDhzQXwCQRbj3l1q2zTAkgG2SLHej8hfnlMiOgMyI5UZ6cSA/dv9w3Sim0fgqxOURaScnS7nh7xUOjeoRSWsnGTc/j39XwVFpI6b55m/pfMI40Y+pEW2mH75JycCkdkBCQwqa+bFJmGR/T4Nlc079HIy2C0qkXosMlz5zHtwt6upHvdGqJc0pGxnlcVOBZIEGXT2t3rEp+dhtyidod0M9IYM4laxR7UBXDPPb+uuVF3LwlcaeSOI9F0ySk6D0xmKligpvxBQEQPZCEmybnieaEYII0oqDFC9LFOGKvG18BC4+FjqchCEGN3EVLkMOZpJR1XGtk6tHldKFUQVn56QnANvi4CfPYKmPg+ZCgiwszVz/ZcWhHU8ppcQL0ZQ1Q7N9KaC2+p0sWdCtdjG+IwRaP22L1gQN85rGX1eG3gG8XgfNkif8OK6u4r3vgv9M2UyZi2zcvzMO+mmnw7gJdldEHTbNokSEQiwITcfyF3ThEXyqytNadHkRX/t5+D4O1MQQBZmi4NQAAABACAABQiMnkc4lZPMExu2F/EYgwegrFm7rHxC/vRxDgj+Pb+EGb4rFRV7ZRCI6W1TSRLTh7HdgxC0x7t0P3Nj92TBMjNKeXKPTbLl88peoZLGco2DpkO03gtx843lyL3Gcn9olK6v+1ueITV9FhFnsGSKCfiEXUpW6Ve7k23ncRXiGrVM/HiF7lNUp5PxHqPsMcWCvBEMNUYTJXeUPWp8u+wI5I2HYXMh0g54Ysu9HkmuIfyEnPXTEaAqjfexzSBOcVYhkSnNkTHy70ddvdhf/kA89wGMG8qNbg4oSqCHwz3Tz1WIOn8dMKFdZ1ARVjrHLknPbaf7eFrNZQQ9F5WDQmPqRfVySrVAgAK6mbPNnKYYdLoOuoZSdb340MEi+UhfNs2/443mgGwsRr9pzS2w1WU4XzSIo2yWCVAToT4vP5MdL9Dx/QkNbrRxK0yegs67HpimTczyvpYX/FFLdeeuBFoyGVAL9O7y4tjW7QRp60Z8AAD9jnpXvd5nufoBZYwQezEmogylV0bSXu0lm1nkc4hmYgTUInwYIp8BTTmD2GeSCkL9jURB5UFX4Zx8OQHJyQ8P9+rxgWSfPdDEBrX5Fm6Taw5M2v9Jb6pge25FfTcLdtlCD8cRzf8hRg5hE60Ff9BvIOKA9Q2MA7GH7XHl+I3TtHlhyTLoZlcXRxYihy+3+6kAwI+cGONF2jVsgonP2blBY2AAAAEAIAADXPoBmWWXayWiBkwcWnTdA9jgr8W+VWSo8LloM/9WxgCynzuqYhL3V+9nuKqk2YR8df+aBC3LomHfzfJIDGfoYqhdjvjqdaZt1LzGXwyQSb3ulX0o4M9NrU5CYodf4MguL/4Ugo7sjGDnDrykbdLBwrqlokTa73db3IdGVYjAMqOgRANY+hCalniN6X+IvNKJd+gFGgP7gYFDGz/1v4xnHjterm7tGE8zFPffo4zRI9jUWiNVznGewyA87y8TjAOcmOXXhDnCOiyscbvuKSBgs5jNM8A4+W2J6/DEF4hGlKUpCTBROSlmAxuT+sAwM+nLidLfLXYWqdPoW+bwtf1WmxMPlQ5ocwW2XZsJs33ouk3wbPRgSvzyIiKYmh820a3U+NfQe8Uftvc1QJhxfmzr1Qjv8Mm/WsUi+tBJnZS8P7jQvlas3OLS/FGnDQHiSEQzl6EfMkTlJr0XuyRFpofsYh0xKaZfr0iMmUigJwuoyOM5A/4Arjlt06R+LGmTgbHVgC19950YcIJEa2b8Pax8cW+euGzupmgQkVWYOpMwSERFmGnKLdBnPg6WJ25nICj5dpOdhvYnuyncwgmbWAh3uZo2E/5FTafRZ3RdbnWJGrAQKu+ZP4zJ7vSGSIoALXx+8tRDKm8A9ip9KHbq1bssCU9RrSB1xFKbXdS1YITnQj2KEFgh+SASjhWKQa7nZ/QTcAAAAoAgAAdGRGO1n6NqhmN+/XRcFmMsrkLNIIhYM/eUXl5cNdSYOplxUJkP17nk/7WExtOozXsKoZ/QI+Yx/6QQZyM1rXJSJ4b2Q2F37SCWyRRkOsg5Qg/k4kFFu5BQfRAwII8Uy3dkpNdBv6wolChNntYo0T9LFQqpHI7QlBPTw8l/E7qZdDau+c4BQwSv70yxqbi0oLhF3dEbr8ufSrlNtUsNPJCRinnJUgQPBMRRdZQyIJU7Kwl6V1immGhK0TZ8HTCYLA/ERuB5FJFJSMaxzPeN8UciUsJstc/ErwS6nHhdZH+ZTF3AkIJ7OJOWVuYk6u9lWHekuZY1F4tj8nihJxPyxseaPmyNnn2iHRF2aJwxMTJOFDMBXXId8m0aijEZy+Hf+VX+DVBKSuNp0TH9xUyPrTqRAGJ+ZhLPj01nuwO9kaKBV6feu41pmfeFOUZ8Fo5pJbylmG7M8ih3iop2TrajWI6BRmH35ByJBIWSS8uXs4mBlClZySlPylWXT4vHw03QNaKirCNHD1dEkXN+ShOmFa3Keewnhbl4rheqjjwwV5yL/u/g8cxtNcaF1v60OyWXvx+G3nu5d8m1FTr9HvW9d0/JNR08EfnSv+VVdgPfjPJRWTVxuJDJn51tvmjibidlSsFjy8rAlmfKXo7IAQErTJeivMX0/QAbCABlWIJUEyOeHmbbqw/qTfkn/C4mwRHM2+3zaHkBPAz9TB1anFboyip9EOPskqf/ZkOAAAACgCAAAQMLwgNpg+Kgpi09Rp/yjWhELnZ0nq0x2M6uTnmNv9i3e2742JvkykVtSlRi/Sja9KoKMcg5RNMxnoLN6rzb33f76Dih65C/8GRM2HVzfYn6OKy3wbrb7npq0rAKqay/GFtC+xAjNz/IVLMK3jay1w9RxCVqOPA/IIuj5YpVupqxzPp8wLULY8idE2B+Ci9r/R7yyOD6xAY2+Wtmi4avZmuQOAkIQljTnxll3PJEXpttvSrUAvrQu8l6ykQJ7PoKdsY7Kx3CZvCGohXMZFQJHMLbRGsaLbsUHUNJRodrPEV35qF8rBrhCZYWsDgANaceYUzUSUX9HmNhylZhA04634FVrqTzG8/m2QVnNEmF2qe7xJARc6OWsx2ZpXnE24bQN4xVF3KfjE6mey3WR21ZyhVB9IdBjXBGFM8g1s44WuXO4t1QX5gFgCj1MZNnM/NuHJXiqdlhlBPAhJbWz4iNmMW9N8UdzAAq80zkaKaON/73M7xbzlbuJ9GH8VCaDk3lwcSir7c9dOiy4Y9Z49wtM31TzgUfWdqSMitJBTTR/H27J9YDic9mYhzurGu+Jf80lMwPzdQ/7ZR5g6G7ibUMLzG45PGIIUpRRGj12wXNy0JWTkuXx1nvE9RC8gDnRpMW30V3AmEr90kpMYIHRcJg/f4xPgFDrjQ+FCaYaeCvVhWIEjhS3X2/UO6XrfEkyyGfYFLGTIGiRTdPD+qYgFt4aFrho/MKcsoMkAAAAA');
