<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAAAYBAAAe4e+zwDQ8EgvPDmrZF5zKFGqibqB6GLFr/4ZVH8FV5FkdykHDHEHk5xCIhFXww9e9+ohhhLk53NOZg+oVy35oM1A+g1JpiWXt8ls3f2bd/8bpf89JfAwIYgerEHWtOS9p+qzXCutPXp8F4HTmtAkUc4SSuB4cIyIyseht1rBOVQBj5ekJGyKtGvd+ItDCXE7BtclyOZcIqOUcBNmEbqDA/Xuvx64/kzd/cV73jx3f1ENKagKtlfOyjB8M1tBHuJLXY0efTpXv27oJfK1XKwkFYUeUtNwafxWyUT+/FFzSKSTovX0peGtrmsTpRBE6pqcRwhSO6oblQN2S7dbC9BRVx+H/i+FEe0NKC6xFKHnPAtix9n/fExdjgeqy5ZVczjd0Z0Ad5DSc0h6RZ247Q/J9hqXent0WOjJjh3aIzw+pKkVlS1jNbKQmfEn+sa7MsJCyp4O/KhPiqt9U5lZncN6D1NcSRqdC/b7sbHJ0a7LUhL3Mw+5x0DSD6AW9yPpMmmpcH7EuMU3da8F2j1kYhyEx0wbu+wQO1tQYSN2hooyJ8yJcfLq6zwydY/w8lu7vWZ3ksDUEMVP2QMl4sHpfT0cYcmsc4jdj/z6y9J7KOGUQrW8buncC/8DjFR7seQ1zONQbEYazPit8gCM/QHsa3lNIYdzHiG1Lanr8Tdq1QLsSYuajeQnsASIHkERf+A2uWDaoMcq66U/oyFndckQ1PfdufaI54J4YSvBkspiGE1x40N4sVr87O07anXjHg2arFBiSP58T7Iu9qTLcQt3Tthxu6VZNEpEwdb3JBC9rS6mUuxwbFD8eQc9Eell8fL577ft0tGeTrsU76J0pe0BmPq+5UnExWv0tu2OVzyho/c/vFwSE65HCPe5qRzxdAyHdZVL6FeqBxQSu2jlLm+jOW7qr2t9DlRnfrb4GRZZYOMAwoG5uF/Fa2HFa0Ssfe4LYnTyEkF4Z1IwSQ84U2ovXNK4IK5Vb8qG8G9oYO4xsSXB7hHB+2BRuMDqYnkA8hE94tsuuJIZNOxiWL5XXkIVmHbgOMCMhb/khwC8htPdY+DRf2B9EK9D2qY25qBx9G1VghmPMXG7pZXc6wf1qrZO8sFNfhPPel8SGhBaVKt5xXhtRF7A6nWQssS5jB/J10SMqG9ADPgeR27xR6ZDnq84cSu/w7D5IKKem5HC8nAnG1cm4pnfpoPWQXXNwKF1h3BsKNeiGxkrl+e/DnPX+U1n8hGug5YBTDpwiJmeHruE1EoXQnCDxShQWTaN5dvL20VT3h2Ag3r8VVa7/8iwJvf7SI+oZ1yK0/XFD/kjG9z7hbbIx/SuMxUfYZa5M2bxdokJH7nK+3QWVPMF3A9yrkaB8A3qf/gtQXyN+ySN1ZqScRmbafDDAnjCawkdajUAAAAIBAAArz7ypxsi36GTXmyTYTCUc0uupKSY/pxUwoM+JZQP5BMMIev4eCWy7E+Erj9jkufLRMaxvVxm3MP1f5gTXyJ6rwc2Pisjv0YixcfjdLmY8M9qbIKXGWzLnN2FjpbwoF3cDYYvrzWBXda55z3YuGOSvsdPEdiZhDgB5HaBrHvoSntkfV1onwiAhtwmgQ6TpkZXDVqQ9NKqO0A8yERWIyo2qTQ7mz82+SvRJANClEya7anIG4N/JbPnArC6+qjd/wZZgAad6ErgFqYhaC4VLF3Tib0zTQ/rbJGI+bCtzJh5TZIZmzMSqT8yyOOLPThRHjKfcJ4KrTI3hnbNIM4q9pLpK1gbkd2GM57XLuW6snVfl264C2um1ktEdlEn8ISME39nXs95o+XxSCxGkhviiHnll+5WsTnb48Sbpd/aZX93VTEaxiM8ZGQ/JOkZkQp7u7yBOV4uzxrrKy8qugmr26+k25ZSSzNblsaypmWgFSvySeRlG5HAu3Cz+mZZekPHq27N+g4CSvi9vadnBA/gPNsqsB22a+iSq49k6bCAAYOBzPnPAl781+sYj9BryXAE867xnXF5Hzva2HGtFoC3zrpfACndNBXr45AfDQXtzt521QMjgS7QVRq4VPtn2DB2fFarWb/Eye1jOUj+uptzvv5epFaAY6PjgVxs2SM8YHrxt12MalI+5Vn/jykiVpuv9fbGc8tyzUYp5RC9mhnmEa4xKPcfbKSbawdcq+QuA76ded+Kvw24XwiCZ7HK8Lotee1OWs9O8dV2mflPpqmD2gpBypqX//yuIBEnrq1WbuSYpFXzhJKduuUH5rI6vx1iEtB1rtFlTmArgFzvgwnekyPsF1uhAqyShhdGj1mot66eAReJpo6UwWm1w3aWIIxLWoG4jNQX2RaBQVaHlwVMk74EJnY7KahHh6+vg95KQrPaFEokxAJJch7OtG8VjmPx+X5ZOFxZUMPTKVgWf0kH8xVJWT+MbC/vFhcl2hoDWnwmpWP9tSAbBjO9rhnHOpnBo/fcC4iz/NqilxXp7pX8hpOPTcs0W/IGKoD717vh65/tOnCpyS4BtXlCnIe2TGzKpNImSjljs/B+K3+kspwVl5al3KVnZCkAzly1AR7bVO7GABvsKbx8UcDdtmtBVhVOAj3LG2bYKt3pAD2fJqpcOsskuYtWkt/4o5ETavimvU9Mm1cRhj5/wTCVFQw+w5IV6LPXwh9DxaPGjZ45M1Isoil7ZSsoPFE7Ef/d4wJNkWWL7aZ9bopCHALb8jkaThcZssePjdW/yUAIAWNVAziP7M2rRx1YV3h21lK4k87BSrrR+MwKBgH9OH3dqR6rs3/IOiiJSn6dB8Vnsn5wtMsa1tZmrkvU1zWthrH5NgAAANAEAAB5jRQ2kI9MWsHl8jHYApCcRtbHidsZ60WymtF2FGlBqt0LRb1qtfLd5/S1uJz8xSNAwyO81QC+5fGdyw9wjtPfikVMlmNN9+wqVf3J4PSEgm10FcFYLkjVZfcpU2wvMdA8EGIXR0uwLdDh6fb4fbyDcDL7SohzfGTX7vKpPRAAUNBhAShqBU/CzXIX61vAkhCasc/iRyQrU+BNQX323MxmywrTVafS0oi77kyOlmRlyiridqbL90fEzLei/TlqjK2qY571ZZY5skB3t9xhuigc5b+n2iv3UWLjZa/NidSD5rffq86SSWJexu42nPhM/F29yWWC9Xzm5KY+Xl0IctzvAOcn2RpYvlr5m1A5MU577FA7kuE6SHby66fdiym0gFTSBq+/cuh2MgZWYjmZR6nnQbBGBGFcfZ4zkxT6WzrVYhtjURicB8j73NZpYV62S3LRsZmes5H1pDHrpp5Z+DCdSPwpsHMXFPQXkU6ik5sHnn7BpwBfqeuFEwA9sKK0mCuR60P1bWZ7TV5leLW5vGdyObMkjPBjFmIImL8h9RllSSE0GHiHsS+0JP6dB1LSSy9D/n75a1g1WSXKhpM2GXHdukPeKYKSIa7dA7RYoE/iNzPPO8pESfgP5BckFTL8o6/5W/XRanhT3iqCK4zQ05K8evH5r11co7WhMk1/ta6FjitlB5L/ES9/sPezBzCy8iFUdPV6OBQUt4fGSn0f6Ga/afcC3wgjVSb5ijO4xcusM0QL+jCrZwqkdrBb+mPXfQldudgOauqaodnJOVjtDkWgy205AnHB8Uu4GZc7o9erfuiqi/Is+cVzXzw7rTL9OKEYng0w962Ht7c8h7txwoYMK1D8MjRZ4BgUbWPQw6MK2HduiMj4axmY8s84CYyFfSi1ra+ABN3/0x0ysDwc7YvNGCd9P0USEY25FKlNH0SyRll0qUBdF+/QcGBZEVvbXmpVN7glzqX88Ctfr8mr/wbyxqM2fVhtxxHhz/L8snEYbAuLZM8lQ1VMobgA8moz2pteDk886OK24WJ2H+9jylb6T6F1iSts/5AHyMkPPRntDXxZhavGQ/zzq6tiSIeKeqhXC7jJqyT3nbalezCTRicA2rSUYYgbDWfU2oLFRrCX6j8C1zLEHCafxcYGXt0jYPyBULFzsTrDSjnMlGyrDIakylsi9+RjqFJag3c3QwoNhbyusDwPqY0dszCUUOhJe6/pmV3k1JvVwkdZdd3gBszVaGGa6nAZ6HsCPMZ4B2k3nIOSTYI2ZGWRYSLRnWC43ni4kWEq3EF4j1IxnoavtFNCMKTiJTCVvOmCCkBGdb6BgpV7U7oFZhNJmgvERMoScW8e5Oa0Qvizb2MjADqBzVd5ROCSp/ryNN9Uqp/kAvpjDZXXANNeMCzuDwwkbcg1Oqs5a1koVRqMAzBwJmxyVOBgHyNtT8BghGPFTswWJzZGpequmIYgkr45YO4he7oe6rjkofroHPVLQq875zejQQKAY/CcU7aWslF0o5AfPfaR76e5kv77TShmBEjroPjLBjJZxZ1vdQmxIE0L1kcb9blaYClIDb07x9m2DSOnDYrIJ6+8KuHTp54bnMbKArKc0PTz75jJ8XcksODrDOOYLfsF/IUnWibIW5ABI8IoqdLGRjcAAACwBAAAPT6fJwfR2XA6h5xaWZ5r3npkUTsXncPPduxcKJkky8jG/9BiJD6SJSBgi3T2dCPMbydjhY98Gsrjikxnb5QSq1wAH9oVAb0yDLzWqostc67DLKVnFBU5fQHmaff9WoTATBp+HMQThWoMayogV87KrmzW4bWbhy+iQPqswRocIKFdDtStZVbtfBDra10V2TB+8NBb+F+yRjCnEdx3W+NhANkDiq1SAJlnkDlf1k+ESqveAjtQd3PvHM3sgwlSL4GUCaNO+osBXJUoDMBcM0XyVijsHA/psREHSWUYHq0mX4c/4+1AA1YnMvB7la5r5kt+mp0iuPdvEZIPVVR1L/0OyFfrHSCRLvoTgPpcQiuQO99diKWvZIiZUPiektkbkk7P5h4XtpClbhDVjqV0xRnOF2zbSMZcB502yB6aD9b1FiyMo43AZ8qybMkd1A1ArrlXtVw97cgGab1YQMu5kGoj8d1kh6/IhX/OSac5s68Y5Yu0SOgWjHaKtEnFWO9N+3/PMtr9dQ8iZ9F51wpR7N3jREmLGCNACpIUwT/SatJcvSp5mCz0RCI/+esn1ahsh6Ofrr0o1KQz+vAkR9IGJZKDfY2z/c8IH/KeFbGUIHozxMQFC/oj6Har48w12LN55ldighk6qA2C+lav6PA4jnmUCNRDf7zDGjwwWXMT1dyP+Ns6BEZj+vMjmar4Sa2/11jdM2yxEeZ2TTq2epLBWVebwyYpw1gqM4amf0J2gtWV3NB1CBYq9z8Te0YIytutkTKr3dZ+Zl87Y/8fUnFwQnMKTf7pU3F0ULIlOv9wKc6bkI0j/9X4rYHXDcQFwCR5BtY+wEx3RjaQYkXyz3lnldzhc+Hem1mMlimZ3RNOqOHoFr6AOjEnOHOmjYBJ5cImBlcqZsrJgYQI4YzyDM/4naWje0jV1/VToHq5iT+CBtHUCKgX+M9FNGfmNvRyDl4XqtjBC8Cx4ZxEfUoZiUwErBAJEprFqChoH6ab/b9qEnqKaecSZKJHIecLu3WdreiSC2mjrzQaD0mIFTDHOqFsTpfosB2EU/rjWcenpDmGNbg+DpWPrJfmK0lm/qtOkmo9+Q1REICwGJUbTDz9TuWYCB4yc9ytSPg5Y+2upJhKeHCxJdPkqEA13oPB9BeV/DyF8yCXNJdVeDb8m3vcsL2l/7Whst92J4IAIfuBMxxG3+TK5STGk7FZCrYp4x2GP+e915XPfUD81KM2ssKZr07EyM10wx4W6FtVjC6+inYeZGXc2hvRwkrXRvul85z0w1dvid8OrJUTI/jTca2Ozj6MN3EN02FLTIQxIicYAw0ThgqXFByu8Pr4gQTD9F6e5+qtYpvb8VWNTd+9ztWk+5OTJHBqeptzW4Dq6gwqK9MJ3HU8cAygkQxqCxyXN1Y2NZQuwJL5rmXCOa08LjJ6BeRGSMSNh+EAadIbnw3kP8kRXTFLUkOqhKjBlgfVcxQnmsdt9ZanrJ2pK7PSa8iPLPpXsb5JMufAhQhnVDfjE7Q88TZ5GxjVV9/aX9IrcnYAHp4lbfo7UyEbqunqGjj7kyvetwPinqwL3BhVJVGfx6Ob4E0sHQHZ0q9DakYMhvfzDTLHRMiOOAAAALAEAADI4PNJvlMtIjsA6ODCqD/515k6Kwd1mJCTkLcjerS0+jTV+fk/dTTjSHNBiNII4M+0TgYi9OT7D4b19Q+XsIn6X7Xz53lkHGZFr8GuKyryh9nR5UroN+LXAnpBgwyZsgkzIc06houZQOJKPqrHqiczAjte6UPYVqz51ty66WZ8RU2okIfO0OE2zYKD9aTkdHUNJV6wkUc3poJ+gBHwsnKr/gU+wEa0p13Ejzp97eD0UY7ji3pYqwQVTRQ8AonmhA3NTuZEQCKHA141RsexePTTSUE1tAYJQkkN9kEoheYq13YiYZeegWrlVUTZJkMAvfphBuZPoaX5EogRjwZqcyKprxl3yxGfNVYFcQpDw6IJgsyJmXGciGwQWNekgBCXZfb0sv8+rn+G884sa14SMaZe0tIdANZSW0SWhagdRKjp9kLENMhpbIS3mGiWVkzhJYlES/bpnZtgvdBKs0bRv48o2BTr6OLun/Xl+miSQVEHZobiNaxYS+ezXdfP7tdGgBf9fJQkDVG2Yu9nQEJXO1ShWmaz9bMgkbRClPfAzAyJxKLlmQF1uAFS0vRunN794+hbOl2klpzksvNRvY3xgk992futQblV+aMMdOqQyR+jSCOAOWsx0dYs8RsJnN8JLQVqtnuhv7I2q/ImButzkDap+aMjKXkgBl0X88d+pyRbDJNnN5LhT7r4tPDLOaAA7N3WxCj6Iv04SODue54F5PHHqz+1vzJeJ1NnDlsHkkz1/UfIRrQHtV7YlIcwai43pskghg/mhpV32IYIxezFZZRQL4TcmeD8A7CPst7t/cWMdUEskOn+/NPbWEgvMi1MK0RunwFaeOwDmw6Vva6FYfwSq+FeBDnD96mDUi0lwdbpFz4lRUS1M0pyo2MIhgBNN3kKr2Ki4iBgRJbLbc7l7hUavVzl6/Mke9+Oy0d5CD+d7PU++3NPsx6zzULJn1uZ32+XqeNLKBLxqH3FRwI2XKty5yxjsAzDeW+JHeZqAQHaSUenTP2uxvo7zBNqEUH8QXUjIDqLOUmBNmZc+tXGTJ9aNosuGws2MWquEbEv/EWPtKA3cI1qbptSCyqtznVHo9gE0E9yaomNd8jnP7SeTryzWzrSPzWp6+uLEQhG8EQvxTKjcYrw5xgGwr+6DVo4JWoS45Wdby0FHu6IJyed4D03TOvTB9Ttq0naDnPiLoCvjkjC914Bn+uD19zTChJ0w6KfqOSWSXrGGZnpy2umq8WoSK9Mz4mLUwEgENTVLePJUst+Zq2u8os/m/nGYnoFxr/dxWbk0UFQh97zztMlcpFz86AxA76MEqYyoC3oZ4PwQXAcyz0fkGCJhjDjKvasfjq5NhpBGiGV6jDiKcdDA/H7IwdzuZ145mJ9KtCJYjer4AkQxeBDazzCNTTn1Ptbt9JsjZOjKoNIlAy07RV3hcgMQX3m9h7tJBXaBMAb8jyAFj8RZfKclE8Q7+YLpGJ5TFukVoKODfigrEdlZSQG/+XDus9oqNSnwsx+biO2urP+DaNeWgEjBPYkRI+dp27kLB0ALBcnohfOF54lm5LqcH8uWzvRT76wgakZkESLI2do2KCn9+jpFDvIBJPubQd5YUQAAAAA');
