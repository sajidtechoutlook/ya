<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/S8NgBm9PxBceZk1EiMKOU+EY7yp7vhb0fXMgfBgumOZ5XEX3lavJagIOBBl8mXx/J+XOwh+HYd1cOjf9z4IuSv1x1VaAr9Y6VXZ/SpeLT4N8IpbKTlCRZSn5ipJtBMUX8l9p4AhP5U687ANCZfAHmkrpXOVwccureQGoT3Gp2mldAn6Epdc0sDQAAACwCQAA4wayYax+fmurukqDCoMMh2AjSdEpr+ZWIhHTBTYHtI3YM3uM7w6aYJo7+SQjt+WnvLx4a1NzYY0sgSDkaZWOqyoFZpwRpJczr6HeRZdijdfZvda7bfMOXD1HhSJuEXei1GvX8TLZI3vl6EfEsK6G78h72UPRREJUHHpVVyh4DiUZaSH+xWZCdUnUGeDdMrwtEdaL0Vlc0+89ouipYMkXNdoWs6reM6h8uM9otf83X5NEit8xNtkdA92D5XUZ6pJxqA2KVakPxuKUWUZE0yBxu3WEJ91suD77I7nZeyYIYgf2qr4mEqHIrovA576fbN38R1QYLi0r9cadZUoxXmJdm/a1C0gjLNVtjWl//rLgO8jSCHYrPXUAauvK7CPOfDFOMPLvI4PhtQ6hHJMW96LclJK8BOWN0KC94o4cSiGd/miG5xdvjYYm1OeMJbb0iE6OsTGOtWnxBqsh+pcDt9E9jGphjHEvlRKGCmPT/zI8sQT/7+nCOa2cK5HNGfAg8bd6kefHYkF0JWg/N5sbF5B0m1pI3wXeT0QtkJpBqGwxlYULnlmaupL/LhzNGQbheza0yjvXnttXQ7NmH47qgLZmR5JWSmgE1AcozkIuEctfZ4/RWCFRkWOeYF6VF/zQjHiljgXLTtbyrgKwuX4m3tSvLeOJtsKC9G95rCelei9w/rST0yZkRxEXZgxle34J/bq9S+zoORp9nHNn9bTiqkBdiCpWM4TrKonANEdBWVYs/pxg/lwORjgDrUFfTE+aDkDAozpdyQsi3IXBhl5w7ltp0gUvLd6Izqp44Mj7oe5o7ot2lKMocA++9DuGhU5vbC7p9x9D/yJcL4bgb8uTyxaUMNJk8o66PQAPs2vp2tBSjtC04NyE6apxYZmuInBvYvO77LkT1Xg5A9K6uCZZqU3Hv5bhFetgK5mt+OCEZMIq4FrUu9wQ4iVaaz+xo7zvK9EYEJVOqMWX9Ev1YJWaKaH7ugKAKjCDFpUsdhcxt5sfBKcN+jBziCmQOCvz8kDNfCDWwvGQ4U/xdVf+nt/af/w9uPEiixElM/bTlag3bn7o8es7aDGgD6pWZkgGxFBnsz+EKlsJHe47ZnhEmoNY09xJjcGYUhhh4UB3agvVYCmZqgkpNXTCYlMsO4NaaPrHvCYP7OmFRp4X992MDnPWFb2qA/10SzRgC6r8o6CpydeF6YXax9FCrC/MFANEBBLFV9NodhXogZfPiTOos8a49OnzxmEiRVC1O3LOgmAZLkMEm0lGOTY0U3KeUoyy1NGE/IvHAVkY8NHnjxJWI5N3v8bxV8HHSexItwLG8eU5iaf+whOd0YXgdkC0/0YtVdc032XsvFupkZzcMFQjd4sVZlGFo+JWUK2cbV9ll0ryar8LD0UVWzpKRJhaer7BUZLvA2Wfh10nSfx4twPato7/lGKN6l8snL6IZq5Xj2Lj3nFHqs+YZVGDrV1lu8ZCTEdCOUTOgua7UTiiB6HGK3izWyXj1Jw7ZVXlC9jdXULdWA1CKin1kaIxiQTxVYMzYMxEWhBXTr8A+3f4RcmWvIM9Doad1cNtOy/v6jIyFWSDWhUBKK6JaZ2bnMWQj+z7oBjrio0LY19tOXhplfaApjqnqBdDQGP0mcXdvuN2o3p58DOqljMOtfSgY2ym7CAFYXmgp0Lgnojk8OsBqTJ3tqZ6gY4GvtxTHUUaDRXkKdmL3bzG5CauU1k3xI3oY4GUD1bx3WZFOixyRbHg1eRd8WS2/h4Xrx5hhIJfE0ysJXnUQwZRBUMcL+ir7V5rh5BhKiK3Nhe284B2JuSHZzLJAfm4GKyk/XReyMWMRRS4VA7hkfhhnA+b59pJN6BQaCN20Eqss/6uWxtFK3c9QozYWJTHcHkhmdzBNXU9CB7OP5hTsCL+wnnNvEznGG+CrJtGAfPZALAzksZK8S+hZjMAZ3G6T7gRItWgNnb2VY5Vwvwszk1UY7OSz2NGZEkMnImGgVKPzvK37b4JFWXJkU0bN1MTSa1h8ryi1pykrD0+CUpzJVsyrScQgKZwFXa5S6XkiNLFuJvFHT73d+QTxYYbsDLt9t/V94yeb4ODVb15ggVDjnwJdIK/kh6PDoWeJNWrrIoYk8p3iPpbEUZFnLn/wzmdFdgJ1qhXFKy4JtVjBhQsB4n4ZWvBRroeSv5Nv523EeMlkpIsozROfzJgjWjPhEZhc4dkLckuyF4Ai7C8IJivBJ5jCCMPLfbN7+KLoaJEuRfq4o5twM/lI5K2D+TFnLjkmZl7QGr8O1/kLtXbzJryUJE/4mpwmr0jikYGRHGEq/8fTZnH/+IQklVyUikYZuRiMdiPZrNN1GPHnRBdhx/r0aPj1/HrF70a2bkwHevzBT3Td1LiMn4uhHIbz9/u1E4LDVmoj7m+dFoWDq/89YkqMJp+kT9SkaWNl09MV+9UsznP5WsUN9sAiEpqYo1QBJaDuxQ06CIhq2kpc58YH3v+WWjIcRoVmB1YyA+BW4LPlgBum24GCSkwOZcPFwnXcAJv0Fq8MFqDASyTY9rGaZ7jNvLLbGG59975mh5SSLcHMMDcHSL1Vb3Yjv1Zue1z3hMSBHi4+E3hFJxKDI9URoPHSZfzYwWcbiyMuV3Ch4tVdHDOncbq91kv3rgAO8cyYU238PbsrmXZ73GW3t5MCqh3qXc3vCZLZuKTeCLUwt6NuiefXp+H79tcBItrhGgHUiEZHOsdDhusDe6hSjJsM0sfUorJMrhsH7yp9POH54GggUNJgm4nMTYJi7JQnjDc6Ev0kCwPlEW6+2ijyRc8/e4QXTVP5TtJhUVkLT2ZkxnNA0xAn3zdFkZj8i9ee/J5ZQ3GJJCWQ8c3maENnI7uOXDKyRfDiUgx9m6/kMowuHb9S+utukcTs4ZGnSrrR2pa9+XJKNZdGP7tsAkSmD7kT0GiOlUACEs0bdIQud+zS/Br0hb4BLN+sAJF7yORU+CCy8Cf781NhAm7gXLX9HuUH15meB7ECth2ApfjH8yzn2hMcNNDkq6Qu6p8UlFFW5eR2N9vj2eJnATCV5K1KN8hN58ExoMYWYGssrByCqVK4Zxn12WedxgQf/bNu9uHdKcwMTdk7me/0MXJeiq5KETiIxW7AiEC6lagPAztrv71fttPwe0rn3GbCpRUDIhP6E4PWjCBp2Dfw7PeLwQmytQKroJoEWEBDue23gcpdL3ZTD2gd0wsWgqiUYzaPXe7ZXNl9f3aMESb9no2978xW25ke/hCEmUVUHb7fdWXYdgl1wc7Ie4N5QcfnM40Wf1jFkj9hHdKiNUB/vvLG3/4NmJGWB1kJ2b/UHI1AAAAWAkAABqoeM2qN8RGlnIOzECvL2/Oy03I2w7K1L5tHxhuYSYVMJ9YIvbQa5js2IWEN0v+XWevcblFS+wUx6hrTBDEhzTmB8IwseulgLtEAz/1H8SArAg0QXf6tT6vU/YfJyNHBpdd20qCciD7s6inBnhLOfA1HtiiAI5JSD0XK4VFels4reXobrRUvOne7jSvM2Uc+wiExK2rwyEKsl5OHML2ZLoVbaxQ59rzAZj0CrTqIDrulXdTR6VjpQNU1yjtqOFtLUP4MlXJ7/38zc3WdjZ+F256FFRthcygMJ5noEZDw48HjxmNLN0nCClni64BC47rHAXjELTsIWlUBcTGNngStRc23bdNhsgk3XMDOK49bsz6IhTmw5kBwd8bF5WFJSINPOL45YP4JkvlaMBCYQt8mOPcix3yN1Dc+r9ifnoIwUXulHY5uLkD+jSqUNDbmH8OgsZZ9zzLWI3Eqb3iDTGiuixzlNVvy0lQfshiZ+i9rbPXgy3X/EnnE8FJEOjd/FOcMQvOUWTKkjKvkTDJs7M8GT0W5jSAXwbIjVh/Btpeu1sJ0Ocal7xbAXCfh9WYoYb+PKAD+L6KlHj3yjv7fYM7eaMgQbyBk+Wsx6RcwR2csPmD+wRiaPwD5QdzOi7UxH1/RKeknOGQH030zH4Re9BUpL3FGrdojPDVotsgoqfTP93r0QYPcxXK5+YR9IJ39G3bWkPc1KBfyjviele6ENHMJLeHCqJg2WnCmdCPntNfoPQ4JSCY4PhvmPZdudnnXtDYW3W9q+KRcuce7p6CHX6TilSNp3zqFeogGLw9oIWUNA9wpNw83rcKm5PRsVxd4h3xRHYRMeXhBFJZcpY7mm6RHwK9+qDAdIHGkfhFUxo/+AMCTvWgWSU4sdGeADzCnYHSMjfXLLEhzKkXP9FHWcDiTssHGTXsuOGa4F/GqPr9pWPi358RVbXMgRjd3lqx5iEH7Tt8CzwwFGyPRZ0otqYVt4OmFrgckMApNPta87k+RCFT6R6Dis9YJvT1N+PjCjq6KJMq2BZlcXzj/1BO9lMU0SB16JJckV3YU626xSPvDoSw92wPKBZgQMBx2nDNRZPyDBBpAjxKWB19HNlSSZnIy3KIwz4VyWHMUhzA2xvlSjIdExJu/s/LpOxrBPxL9c5S3oDS58c22J99Wqpx66cNJULAUmwDc5hqyt72vLhb0Y/hWtpgTyu8oyNFIGucklf6tTwaXgf0iJrrujpgqcUvANd4Qh7Bn5JW9My5+badBJiVyyEKqrMnRtWY127Wl7mTWBEBusVWqNToJ1DO9PEcjER2vn4RdalOwgPV5snBgTRVmynN7/Z+gK8xGDsAUrxRPlbD5a6RWvoOrLsalAQ+KahJ5dZJClKF+JoDaVxbV0eLojbUDDbgaKijjpdThtcJj1OfWP3MAFqAKZlYoqYmxfVMT/Bp1UYhEEmBrkTr1SruN8ODE4pIUGrd4wyk/7oQTkGxKODaJzg0GwgkC/PAz5P7hXEKaNbUqeyL2BAc+FOopchOG6wZWvEIT0HSpo92dHlW3QvrXFxNdJwH5z5MFwSIbvX33q7KLl8VKaFqeQyhv0rYh7GX1KZKZQWF87fR/CUjLWn1tHwxvNtv9ViiW2wLwhjnprJA4ghvnlWuMkaJWihOwIrWs972eJG7whI8vXLIojWIKN/eMvO59oGSw9Uh3MAvaby9iHxgW7GzOzvKyb3/oWhj6sWU5m48qd1M3aT/bXwg+OrpZFUlWW+f8KTPDEaZgP4e8WdWlrdKO8c3qu+B3lylUt7CMEs9GniNW6AgjlPJ96vTXmHtOp3VMqUfvo8e2a09FtaEIqB/kHQr8IgvfjVDo4ea5rXPggkcfoiGL/HlSE99Wxc06EkN8aBsm8bMmxXFq7fVULngPVQcKLxrKjaDVp3om8AvXSmMohrEhW+s8kdiSSJzsZaaniKeOjlwro03DvplEaZl8igg7XE4rnm3TkZmFprs9Zva7MvsSPkqs/tkjzKVXf/6REyjNY9iiidYlWsKupbls0Kr87hknPXzazMC9xafjgUzNiEsWPwHPbJ9/MQXCFtQfOmc+I3ZTTj2erWiNqtniWOhlAcATd234iqJyEOjLI5xXDLxodjwX9mOFX5rYrgQjoSLzKjI+b/AOFQrTA0ZJOgAVWDXrdPSlAhTHeKf4jmAzRieWO3/GQSp56hr3DRgNZDeNoFyR4qYj6ur6fS6a86hXO/7oWaoUKJn7KeFiCNOWcthVyuaIpJtsHbHsJnGyidXc1VaCE59rEeL4ceFrWIk90i6CCKm4co6rFYwbQzh83SOSS8K9C3t0OzBKTBOizMDPFK8TI0ID5wIFgarMMrdcUvyIeTYL5UIieVpVWEJi61G23FjeP0jCEx2DQ8xahRyim847TrSKV9O3sbavj5PMkn/qLFFymcPI75jkPP6rDIdOPfYaQoKwTeTXCtBPeXyySDl5QFJm1xrIQEki8IHc4T/JXNJ8xPUWq1nwYxukqzUCneQVpawKaEfO3Jvstr8YYi4ZvSRN7+knekUC+cF5rX+WVYAox2aDF05pAOXAAmtFiMiwkuOZU9ZOu3DpxJ73UQQderCfude96kxfcwposqsAQyVLRH3bVAQcaih0D8SarwnzvKSbQAOGVKeRfacBJZ4oxTeDlBCTRhyf8ACJqHyimCVnJGwbgZQhH6RKnjK/BYQXm+Z1Z3G3nEFpbzRv9fGpMjk6YW8rNzJpImhbhO1KpBvjGjdU4kDP+Bo3I9p+AjJ7PxnMHy1icqOTFFqpzIimJWoa+SSH2MV+ePBYRWvbqPhPc00wvxjTrckejGBORCsu11mEiFe9NHmcFvd+xdXRygN+53m4sGIz6dTTsXPDdG2Rl5zTQX++9eX712pzOt4pwDxeVMbBpY7wez3Zll2vplvUBkUiCqW3TOVSniA/xcpdPR/zr3y1SWt9B5NMxGqj/6xTM47Gj9s0tX4RFGUAeihrFM6Tvc9YBcSJk9w1PgB6k5QO67LB8DgyfXGn5GquTXWENSpNm+B1fsK9Ab1sXCF+ANcOGzPhwIOOhFy3cjWSpRDfWlk+HJoKpyouoaMw6gxI0Bg/3KFaJ6H1qBNMH5DjNvrANaUk4vXakeNKmDMOml5hqocrTLHLaWE5xmEgD9ytLEzrzC9EMwWJZRzhu0wL0BVAVT35zwAwNsMqAws5n02AAAAkAkAAHGb7/RGsa+LYX+WJvdpPcNTeAgsN1KqHy+6RvkjUImUlUQnpR+sxQa8Q0DLd412ZgVa4Fvtk4VncINYdtigQqUGUu3IEG9lYGbNTreD1fs1omxA2AmQ6jSSTcc+t0IC7ZKvrkFxViHZAepRPoUT646sNyXj+YnAX03RG86w5ej/saBF7dW36ycVWsqL+erVvMK7shRsm8M7GkvbtTcf1o95edvaKXGlmpERXP0irOM1qiPglnUV+OejpiUZpdX+/IU/buoUJw/yzJ+4+xKYmAWjTkUA7A6ffy3aQpG5vuKazgRhlEAmv1sfmdrJb+9yrJ9Ji5xJs+W8JCNF4FBq+HelXoxceAEB9CR3UEEpmGwOQSqKPSpb+EnAMmw7N3p2gfTgBz27TwWbEakiz1t+3jCAla5NiTqi/Eb8zvfGPNz7EhfxXxp3p1YZ5Mx+57cj7fuArZ/er5dVpg+aUfE1YrmIF6jJ0is8RRG58VCZdx+hxLSIpRZZGEw9N4TLVQY0XUWEmhZiykGSFGMbBXz/Hm54y05ZW6hpOfhFAsXH0xghvBjLAi3EwGg8B2OHjed5feBxbQ/Uj8x6/waoMPl+PADaDS/oucEMYNQqcyyGwQuAdpEwXMIaAlYhhhd4BypnzletWA6KF8+Ocip3OXZ3naaOI5En3uuXK3C4qy/Ak8ncJEL8nIhBYZrS4E/YslB0uoJwXUATASLZ9YTQvUuK2mahg4RDAOgGrA472XD1b9gQESCdKMlCFIRuk3VJG/FZR3Sz9mCtAF4VGOjDgFa6ZRzkgybwFhgW2bhSPBswZXgUCITinLtIc3tcoQP6leL+8IBEj0eyXIQUaPKr0hOlLDrS2Ruftll50mpFjpoC52IxbSum7lw/8AHDdUtvwQ1Ykpx3FfJJo4l2Y5jpZsX+Te3nWuqd+vFH3onfRzWgcpzXTSMjvSa9X8VlOaDdXDp1TJ0g3mTpPTGPDocdYisUQoRoS0eQMoDnSm7Jy8r+Cmp7v4uLa7+GVRXPADZn9h/tb3H+T7uAxZw69qq1X01iZCuF6S4a3KOgQdxSW+7rgQjJMt1P3S2znpA6o7zyHW03UbJICqhOPYsXfYITn+ut4udT9VnmE3vm2CczS7lwDChRuuLwBs0AYun9CYv1YR8pg8mtkhwZtDjQMGIYQg3JK7F2DO97uj6p+1KwOZC0eN8YLJe9zq7EvJdVOJ/jCTXBwfrj8jVS5EGa1Y8gzCmdiPkPIYxfJd/63Z7W0zMZxzodXagoZ9jcNYsp+2/CDTlwj92+KUDWOIZ6sLFqPfsk5ZdOXFOM4LComexTRFJYIhgohFvCRqwwiT9SaOedDsICTD95AlEiMMpzFhAH1Sq2InMRo+6RHWbxN9s7PHnoIiNTWUvajT+3dCQb2rucUx8acLEWZTVIytPXIc3uZU4+UhoE9rAqCz92r4PFcrxbxxHIvKR9YCsWTXs/fA4/hweBu7ZUn/d2X+owF1lNgWGeqf83brOHNZf0NepetLwxRJQTfxZwuPHssKxeQVT5SlV+FxjQw5NtBwK1sVjirWanueK4vRUhKAnRuC5BBckHAkXfNHWmTXWgmbQqwaXBrRYC2A2N05aSNm8KpoKlMZPlCMW15XB1uPmYsScj9lK0jKySb26dm+HEuKwlFzB/Y1Zl7cAB2QNsS4Y0DsL3wmCgysoAqJpub04YGAcsktNNaoF6qpqSDWR+qKa9DymQQv6P7zFwC/MEcuzt7TK0UMIhw/VaKkwTRZYrG2etxjE5Httu0vyAKnu75zOl8Ej5ZrOAut0SiiLh77IFRyt5ekJMLAjgDU8Qeb3UCAzHkZmjRzvXXukAl6hsW2WBt4uJDkRnCjZ6ElOSYmUnVFODW3fVhx6jORRaxPuCh1IEQNfoeY3t4haRB9MZswuLaotZKPFytuGzcNeMHVg38cgRb7dKRk3QOiBr2tpc8TABhPUabyiBUKkXY8ERaKFUpYFzrGUIOCcP68Xsqvqfvd9QGzeg5rFLYP3vLDSLW9zWd/5Y8ojFCnxlDkTvdDKWSZuqPGBjbLLQattdZbt5XLNG5++C9PRFoPn3wOrZGm882lXFaEzvr+dMD29rK1UrymA6fd30dgiahIVc6PgwkUNGK98GUDx8KTrCbbl5nNZJVCugK+LIKCn4lSorlqzjmaveFuzx/UlGHftPj9LJhhBMUZ2tVixvu9ZmrlMv2r3S5zCtk0kg0Viors2uHVJi3Nu6PnrYDuwvryOQvH1IVdXyBoKDNBoyuDScgwdmCeqrBw4j5rn7dYvm7X4TwddDEFj8HvViBmELV7s6yrpcR9ajBjzIanhGP+BFp95uUpN7CupGpsR6QUp7SxDvuNfPSeplTQMg1juVzFMvtIryeWmmU2Vm5+OaWdftTeIwg9xHjhqfO7tVKgZnXcwuQNd7ncQZRedM3ZGeD8af88/ZakJNE1bfgF1XXl9iR3TXEtGrriuSe8YQ9W2ew/VxZLZE5vMTX+/TyCmj7oukNCT221CtKzx/Fv5zVM3FRniy3To8vPRqaJqJ6RpsJqvyc2Fu7q62UikBKne1PEi0r04WqKAi1MrcvmQ3BUcxEkAgfAduODgR1aKDwp1NJ4jKOUxxxyaSm/gKS+Y66fjHY5VhxhoYV7VmJJoIs9hKZz6wADg8L8+x8A46T5j2VBCY5uYUjVgolXsq8JeunYlUNArtSLBPmVpK7zLIzREJRz1FfYXRg5O6B9wywyRi8k87xGt1w5gTseS6izRSTa/f32ldkS/MRVbqGPRarbW0bf0WTIVjIw6+8fTkwsIQ8Q5Hjm8qQAK6y11tUKVTdmUy5b/5PmXlCwNco3QO5h/hDkRYBpbF3kiXogbGOFqqnHDnHvjuHgY+dEVO/ID918VZVbeat1CbqH5OtuvCefluIFqRz/l2ORakB7CGGJyhKkOXw+aaFp2KX92aGusyL7u7dTAXxjMuGWpB4DoFeFel/4hAgg3lEDvgu5gWmz2rPWmO4MylGaLhnW6AfwkPMNknlO21wq/4+tU+yo1XTF20kF+e0AM1wCgv+MgUCxP7nZkU2C5FQfm5RDj17CaLbVBL/Su7RlCwAV8x2OWIpF0SZR7jMdrVCu2DLqxOOWe7k6iNtlrkt+dUltfWT9QtifCAxZxl7nFjG+DPaI49KbtF+HCMWeHlRzJKjY1T6284JsWgCKyBj5sqspOFhB5S8Ko/5Dpqf49x6YQwx9y+2S0bSG/FSeg+JnKy1akpC72VJUevOub7PHzffgruJTcAAACYCQAAv2B9B1ARkGCwCqOswPDq9IJS2GdOiXqLOrMlj6eYHTYc1+2Nbx8eW1ImAh66/gIKDSXkUhgnqMtMH0J1zRfsqcNb6Mq67U88SpJYU1MBhs9G4p0M5+o/9FUxqxxWFYYc9D5bvHgR0nQwXAF69RLHgok6cbvS7B+9/qaJ3KKwMu/sbvK+PEIr635a2kPMZWshDDWRZXE0hUEU/pxrqadK1JCY43SieuS+DsdAAplZ6TmeRKt/DbdJq09RlLqv+VXQ/8KHIWyLgRs6PL13lIpFs7+jhyb1er1tvMJGHu1wQA1j1xnfyc+A2vW3zm6eqM+RDEDdFqUCeLINorkbz0yuQnjh5nlOuLKcMmzDNOGi7bqOhFkXz1JZbIUJGcrZrT/5yulFbp/KbSjSgy+y5XuoENYEmqcnLxmCdXWMzqsfGRunKt4kUvEFz/Y5axYU0Ef4fqgC0hPvNAV21W0ONJCwdI5XxpfByahkya5T1rOfbEYQH+UfM/pDLOehk0vf/RxaL+oiPSkhMbZ29N57Tb4fOR7xKpWBqRNqBprbfY79X5dBtp59sUuGhNTtReO5cbATHhuvV4ZIxfVPfjPnt89qfjn2zj22HeEd9YE1dSlsxBYNYK4Ma+y/Q43dGa9ouH7dvY1K+6/JriIoPr3xIydZtEajzR+xFqv5XrFzf3CBRHg4oVqOpsaViOQe3L323MFLoOA2hJ0jsPHDx5cqUbiYTMuwGnwm80yJ0Sm8dKmgBH5nzcCLPtq6+5ZzJU9pLIhljIh6wDai+wopkh5v2t4glGNMOVe8oTvwKGd7f2Cgrkp2CZoOmmYnDAiYveACXADqqVp4G6M8q3wnC1J9FlhVcBrCrJjwv6xfgk7xdBEdZCUcRo2LvA3FGlBdZwSj+jsZn9gNCkS9TV2fs0t0+As3zExEnPdhNhM5M5wCK1AmRmEWysixW3JBPcFCnGl6Cv6B6P36+KcTk+IrdsWSXg66shSFvxvI8WK9gYCUc1XL5viS9949TGHGrUiMwWE/QS4gpThvWUNC6yBVmq7Nr0FJqQTOD1XymCIcjRoj8EZxAz5Ux1z2T9HsoxTx1uY3c6dnM5RnS7/05zmM/++OtgYfXVNKuLh2T2GPIyvAbNMBazQ6Cu99YWefL42F3+OT+4uspwiRTAs8BCqJHoJOYu60cLbWASe3Csee4l0SN4UZeonilIg0gCIRx5lBFiw+qqVHXgbDdmBZTbTVpr8tbIl2ddJ+lmwWc/mI/9CNQ3R+SzfYDt6yNWjxZVT6Z8GBvmCtwsrod94giqhMLf68a30Fz0Knccrh0DNMRqGvjkkUAG7x+nObt+1x/fX8h+zsQglwDFF/ly0R1xvx2NwloRDEDCRAFuNMM3t+0N91jVZCEjj5yfX5QTVYbBq3kLVuGscxlvdxSf1z06DyAxvqWBuaA+DPdVMewWIyifwSxUUgo/WWhzlViBtNy0V9zF10cHpMSCIhFufsX+sC2ixgqcUJQ6uNUzAT+Brqh8A3zVcahEtXemrBbz0+40GYawjB1VUgEj1UfXg8bsIWjhrJLQjLP7ONZ1HYhXM9r23Ew+t5puztzOZZewlzL5ELAghWEHPVue5ml990NBfoxwwxOfw+fjuNQT7PUgZCIyg9Ng6ORQ7cy6N6QIQqLayUIuREPErCqAX0H5WVbINAgxnD5+PyBxI+OB8VXG90q/ZFO16KgdGbzlgasG8cgS5ws29Ru7U3jsUfa+arz7GGsChpywWsd0Ql3XyRemsRXdWgTZ+RyyZR6iRZA1D1Amortnglv0eunyD77tdO6Ld3hSrOck7IZ0yZU8eT+1eYr5jCtV+ne906glHBfQofnNx7qtxkAJdd9o6iL90SS+LwB5T9sPTMXM0WR13wfGbBN62hCbEZce25/HkE3aAm+u4MlI+306RK+czek858zLeWNL2TztRoZe56hJoIAAmJoqjzwphMMS7dtTaPJ43y2ZwDmTzx659ktPZSVIOPlHcQT9VkzIH61/XGYw4O082XSzYVRu2MlKs3NceWJUTkDVyPAjFd3cl95UrlWk0uApUHgkXVFucpB3XZGsyeYycwIFTx6VscGBpmhdJ97MS5HLPJ5sT5QQtJ1RtochxZuj00j1DPcsSt/l3HO9Pcf45WgEhiSyb0TRatQyhkCo+UZ26E+vpSp2OxLgFpYhKcO8lqYHb+Aou5f3tswAAE+Y+cBKoKazlLcyWQKjDZ7/qDXgseItPoHTI2vXdvueLN0HF0qZYjNew+SG+89FvDxDP9b6Wd+0MJShgKJklb8GVKVM55h9M2d2JnWf3e2a9ES2LdeNylD3gzA/8Ugyl85D3qdxrWr2B9BvaT7sxzWfafL7x7rodWvLZ8F+/jKbg3mgQL/VdcF9qFQDpvbgbIKMiHTO9q/89Zr0wGp+1SETHwVESK49r6FBcJ/4lPcuE+LPkjhNVkASYPAkfvj33bdYtHbr2UVqOxl5+ouxt+EKUVvG04MVEfEm7bmXrxwMw7Q8/1wMT8ajn8XygN7gnycMu1bVQpNdwRJdyEaVTUZyPCroiMw4enh4c/PVrruB0cOAdxVVuLkL/r7pCVt278QlEGBYDBOjXrO8ndgQDDu4qbuxw2AYIwRX6Icm7NRuOQMuaVx9R0+cF5p/2E4m0LYsfxp9G3yAyo+MiXpzM46ZKiuOVntI4E+hu0xgrroPkoLiemTjW40QN65uPXfFKmenT7R/5ECPS0Uyj6Fq7XvJ/6x8NfzLLqSbPTS0Eqhq19C2OEwkBMFf2ynG+82NU1DSEGX7VFN3OydoBK+b3RyuKO79PCDEF4VA+uUiwzotY3WR3fetVyQDWafTvVBobkCtNrOTpwbrinJ8pmFnvPyQAL6ZbvkMvxko1A0FmHxOfChVvI3vTFjwAeopCRZ0fYIPajjN5LXrmj6LHB2pkRBdKhUCvYUaqii020ra9q7RpfV8oamVtMCbFiU5yTRlofO0SKDVS25UzAtRYsShEAJPQu3RRmBCgxtPVz7cR77lCdtY8/elXERllwzFWUv7gLu007ps5aJI2FuxnzFGftanFRSx0KWT9+3KrMQQ/Jjj0HYKR0z8MRpLYIHlzNjMmuUEWTvWMuxKkL/Fb2YCs3kLD3aSnxhBPaHnYjwCtz5rhf2pdlF7RxX9XW4lPtvlK/3r5F5vp+e9I2N0T7IcXYfU45FGLUTq61phmQ90FcE8sty69LnHz/F8rwY0/SVKEQpGYMT1nxZdl75c6PAEkkPgVzwmz2EBNu9Y8NxTVzF4UnWDs4AAAAoAkAAD3e4QCoKNPTuouzQWs9c2y1+g+yCj654WMccsqiF1M0KkwVfWdUsIzXfGmxJEebMrVGjqUqEBkDgMmrTv3xcZJam9U2M9jPnEfiwl7cXRbijlBU616tM8owwJCp2S7dt0jiyBBVQtPuJNvF92s8df0JEbZaVWmmzc0oXZCdG1gxe7vej4OYZiTrg1dxlXBzAqUoRwGrJwgJQkvzmdupne97hKCl/dfK2wC+qIe3okGioa/ZPE9xZflvvFAeM8MnAIWkIKoMvEjKFaWHTdP1pG/1PDxQlOugQBHz4XhJBeC0tpjqFckbmvACJNdumXyLYz0C97noT6/JtYqlnZtr95K7H1KBcuzEOGej+TGnUkXuUBn+sjLH8QNtVUl3yNno58sSXJ6Zz/NUpcuAmXOgcds+ycp4ekJUi46bT5+wyfZBhfdU3GAc7dF1Benr0OTaupcNzDxhncWJAI5OSouqFXChTtYy+7fV15JRpu7Eg4OBTzxtL2713awaFnNeZ0SXMt06ydzhH+EKZBtZOpoyO68kE+w8IqUTWFS2K91aCDAYtMQKpdLxUgtJtaVWcqlkaq0/mwIM8be4Uq5V4Yx4sMFaQ6/bW+aUBY479QFBM8W0lf4mCOZ9HINZMa/IqFpzVcin4H9FJOptWApdecrc7ONsZJhQmB5wrtg6EuVIikM3TnlpUNVN4GO6Lpmi8kENBvtLOFTZslfF/ESLDJHo1aZcaSpIQmcEkyiqLBsRczHlVJ5CftJD1w98tsx7XE7zQyHaX9PIto7PTWbavO5+NocIiBaBt/Tn0EkiQS8GZKKwMiW8zul0fOQxlhpGthNR2V6/EFVDZOC+sram3RNp15dRtsUSCFX5zPbUG8F12XPnOu1FRcwE5KM9S9687GAJLQtmpqWG+2WXhMIBuU553wayKdvXz+SrhB63HhIRDqQzMa9gokkdaRjrj8tKgLHcXLkDzKd4VHpAhTrJfM+v12QuQSPj6ilHw8eESDG/KyU1XuzLLinzst2ABfLuxzkphjsycfGyoscAir/JeaxfHVbE59TJ7YNfuzTTR54X/dCy6tt92VKO9aEmBYZKYG8ol/zTHQqRxfNH868eU5bKLiuJvrpfIaQ4a9MBMIexJ4V0oqrkYgKjCbOTDvfL93ZTj6c/oQI1or0UAPOhbaH3ew9gZS0vQibaUEOPvY6u15U8AeRf+J3uBISIfvxs65iqwicA4/MtRPJHqdkA5lxyGrrjiCR/P1EpNn18HI87o2YBEEGVrqPPINGbiyEfPUr9NNTasmln2GkPQKdIMFduZbactaA2qqc3P1C2CaUDBPEJ4KmkXxUKc5rGmMo7IJMBArwRNs5hqGpGmsmrElNI++vThRE6VY0/Rx//Z3OlNfzuFlPDaZ+9cD7ieLnslyoKeWq9PEYdwWzF6+ywyJ/HaiZ5xdYgfsLRequeYkr7sgP5Q860ZprpczoPEHrSqt36KeZGAMsxbZifMX+R9zVG3NFwhk44T98z4gOp2AT5m+IVkkMNx3OaWDVyebv7ytbF8ssa3GQEPqREEyOfRsJlWhoy8gjW+9frfbvxQX7fDvMrbDZ1T6jp1OUaH7t5YMM2kw/CregTacjGczq8nR76WRYXXGxYWexAlPdNbofdVf/Gsci9TU2mg87jqTOw9T3o/hLLf1lGXNxwIodFcbBC1hyNPU2bkZEbQ1SZsM3HQ1eP3Mv9wSVgM2LcQhgRwiPqoFYT068X7RLY9tKGeBBYogW+0y06sRZD7jra386UrIqzNKncBPMnXgr+eyV2Bf6XN/13ByicW5PpSPVqi8EjwlPxMKWsZmraSkquA7LCIenZtw+7jdo0fn5j5wYEqi3YJSIV36l2HDsf/nHtHWQerwiF7wuaBomJhg0pQS06/V2XcWCtJTzmTfi0ks/8Oyd9+U4/46st8X84usqUojGz6s2GgWb131WHoXLtX4v9ZPQPWsYx3luiXkGDooGHGVmwTfiRmCRGqn8Muj6bg/ZXVmsjH9qDb+YJIxqODPpFoYkpnR6w0JEAEQTXqAzfTxTrzjguPfhDrQLYTYsk9pJRPLRSMXLgzFJFirCNL/6tyx3tk8ykQQItLlw8Qrn2Tnc7xB4DN2CvRYavHGUL3feYpmAcxmBTmwSqoLoK3pj166d8C2bbBkOQ7qjt53kNZAtn/EypvQOFrArbdKit1dQdCkN5oP5M5utJJbiWCieEo+pN3ijjgcjRLO8RW9aqnwlbgFEiW+61TV9slP0geCeDvlFfTta5JCwOeCdDoLor7aWkaaaARotKQgpq0IQpZDjUvNOJjSHbRQ9X/EvGbiTO8ziwbNJXmJIHHaZzf5qVR/le5luFukaHuMgz+1XgwcyakEXBMGv5b6tOK9nEwmOtj6mSwGo+hgfU3JFPuq2GGmfM60D+LOHCLdQ5M+eCrdOxN/Z72gSlGX4KCGbgDcqB98yNKy2/Fapa2Oo/WsiLdRcWwR1PA06AaM9YeXZbbYcBmHMzGWBHdbSVHW7eDUhkjtIajW2VCIPTyshzvhiNt3WwVqqygu7QMQt2+axU4Vi3/FFi8tRFkMGz8RU5fyXImNMs06UL6m569QJ4AK6LaTMDM51UgFcxJLXxsuJJF9NWN1Rrt5BojnEYibFclMRqshM6QguJpzqAZTsdNdBei9fmid827lwsiaJvGQ6V4W2XA9B8XMg5r3jsIH5VipFs8OdgLfbzZ2vCKz8bdyIqU1HS50FabrfbAkx/8cmJEvCCD+CzDdvv78uFdLiWViHwOASswmG35CixBElFC2XCdZJI+3i26ylE4g55izx3RCjFt6SCcHi39sGTrSh4+UAe+dqFelBlJUpLp/YXg9yy9GeLxFIe+KFitu71p2H+Lz3hvF8gjc7CAA1uQQX+nSr69RCLQhMca7uG8avFs9BguoIxPmW2DCGPMZELRwAzX7KKPCqaBjnUha6s/7CjCZtdh3fjmz8mJBHvi+Gd+H8eyoeA4gO3gdMqERvyNO4voEpOU7w5MxN9MLh0GbmFTRibP2MfTZO524OZqbZ6Az8itjqZGQgWP94EyWwPu2U3EKWT/0k0zrYWSRib+uAxtkQfS59Uzfni7CX1VAuocXJuBU7m+XO9uyFd5Lh+AKMdnv+ovk7L0E0PUqxA8F6ZBClhS+LZ0Rw9EzWHpJWJ9o2aIT1EIXG5/ow6j/XS71cv5Cucjn9QBznV724Gn5luKt1JXMuNLcw6eYAwv6pc7YVp8o/4vNTsJ2P9dDBgDenclkJFOSfLOJlMI9wLlJOCekRH80kAAAAA');
