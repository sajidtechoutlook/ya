<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('32122D4A8D681EA0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/rPDUJ07rbExeL0kSy9+THXLo+iru3OgAvXP+EgG65bOex30HdgPB9u26G1wPYywPpCYdacZInq5WCOFk5WBRRf/WgmFM0XDT3uR8nGi/q7uNfoOF/eQ++AiyAHHE9qgyfOs71kuAx+Mm3EwnI7glNGDBNdNkvs3fa7iExHIgZ9KcN4Q9PeEL/DQAAABABAAAO6Xi0mShxRE+ZYhwgDtVd6nUs03ULmoiVpE6ftd/K6NBi4lcQXEnYxZ8Ihv2ki9k2wxi4IomFbGGKcck1bHyIpuxm/OKfvsI+y2iaVv8M+FudF/dJLpzK39LmjFLDh2I7OL5/GtaZDj/+0XtYhpekSWad9QnLO8tkzAyjuXPU+KGJnhsevT3CRTRXhHqAp6lSmHBjCM5Xk8fztrc++WGFWDlgxVsOJnHIxaA3D8u4V9tdA11vLvvnpcA3YgG0f+40BpUkPfw3tmSRsyGJycVjHXOAuu9VzdZbNSWjrnLklIkQAMLlRZWx6uOHgMzmiTCe+lZJQ4ADYQbuD7gve3OD9T1f0K/U091Vclc/syngF3yQqo2IxTVzsj8/Q2uyLCT9k4Gj9md9RAb4D0vEbHlxiQufkVML1XTaqSATaTXT8mbPq5GfAY52aRleW3/NqeTN908LPzUU0cqYdQiaxgTYpI2H5VzjX+v8pUs2Phzjoy/Sm153x0eY3JonBtocWnVK1boWEggLMxcSQ+h4uPhnRJdKL9DjYnbQS8XRRxw9U34EQMeLLrpQ1yIHbMnzQ56iQt+Gdm787TUOt+hCCXSKld8xBMwtuCl8uPwCroN7mlH8MogTvZ7MPap6F5Y2pG/pYcTFlVB/pbvl01WzEbY358JLm93vzMUhGlszWO4zrEEOU83pYosAz1KQXxB6ih5gPVWqrO8OSjsRMERj9LbGMpV+Uu3krOHQm9Cp3LeP5ZL4LTj4+DIfkf9TTmERDx206MAqZFzDRQKKJVH7ihUcdG39jeBxKWhyjMm60PjX0QIETN+riWu7voqYIsVhnxuLr1j7xJo8QqAxDpG53mzMTHC9jCOMiRbI7bxMNihM9Lk0BxEG5eg7G8X3FDtbT+9hhONidkh4JMcJxw7H1Cjw7aPF124LoSMWlRz4PODicKarxhEIbVLnKRQpOQ8eCtu/OcK/wzoGnbTfqkPFhl3SChL2BHXFlM2w/HN08BEMkL4BE5tQ1qsuHLM1PBLMR8ztwljMoXToep5L0BTTdvo1uNlGzOxS8NViogvj11pvGj1sebh7ZHkQmEDb6rWOuFFCMd+N0rFARqMrM/kGBa3nR0vqo3JGRHHEkctA/u/IFrpnCGBXja56P+E1gdOITZidbML3yK5a228JeY85kzl38C3s/AcP7hgVy8Ru//UQs7Nq9U5zlYXG3Kr9K4s/HvoGsNKoisr8hL4GjujHGjTNHHF8fxBEjs60nY+BJGVSojyS89ivNDAIiciXhH+KYZlL/jKmEja1NlBFwklUkZOLDttUZ62mVeHfyAe6tRewV7SyGX2vUroB/qVe3RqppCRaFtZhxlW2hfPLmKrDfmf0lGEh+p96YWI2q4zBGJ8815q43nfWDuXVTTYdaYovWBn2+WEjqc2LOkvOYt/lMLTOc9G96uboGFtQI6cZh3TAz81AAAAQAQAAEH/3ELuV0kCy1HNrSlKOGV71makY0XpHjfp4NWD8Wg6kn+xAs1FyfL3EOYJVLbuq3Lh+YE7KtRRqNU0idAUukuouycELOx2AQkd7hA+CpFjr9IFux84SlAE+csISfq1zNS8F2PSM77WcLT1v0aW5untBfLNNJcxjYuakqi7eIrmr90J+vPQ7Gp+ik/TwPtCG4jCYeZqf7YVh2hzFTqoEEecDGHL5AYlVVLU+hJiQx/OrQYEW0yKMm9Z8BTHvjgRXj7Ff+fWjNHBtVJId28ob4fL5oGziSw9j3QoFwqd3iWKwl4GggxLs434kGFjng9Hxm3/PmakuD2M9uTE6T832CFD1J4rcuff8AJ5L9bv41F5EBbqhFgc3mtK4fss7pYeGE50tNy6xq8hgidr7g5fx67BUkZQdT8tLK47APt79yehcYxbcAKJOPx7hoLWIIZbgpwjDlBCMbnYT14NEzqrieq1qr2gfosuEjneoNsrfeKEhrF7CZnBRnoKEYKWxD5/Vhn75XijVXmU/jNtdDMLZN6KiY9ooCC79B60k04K3z8PscdiN9QaGVzt5BjJWmsFZ9IgOrcq4d+Uy6G5vPhWKkeNz7DKVMHq48hd9PUdR2LK+klB9tZeNBavGNPXuk3jvrH1w85dHVqyNeOXaLw5gk749JJYHE+KiDE2SnjL1gcesO0Bv4nQDfLIgBUxwe1lsARPGs2A2bhql1j59zuyz3nr9KlUTMyYGxH5sv6vb3p9oK/nCAzLzf3h6+kRFLU8VCTzu0q/qR562t61YtlClSDWqXIwKg1SQAMwx8VWbv0lUk12H01zisGoY9jQR0cAYN6MVU78QTRzIVLqL6LJDW771JUSvqc8W1okM97BImmQk3ZBW0cB5kmsYlOwg4KG69nFLJz8uKtGuGVjCvqESmOy7uRnii90IW4Tv4cO2oEoFGi8eC1XF6C6L+6viKhlgEVDmQFLJ3qXOb/TgzOnbG7UDfbY3fumNBC0ybf+OhNAW16ILKnD4nYV9jz2RmT6cTa/Jn/LWPRkKHmtIj7b3Hmx7D81AeA7OxY7p+aocoFjreGS+15lULrrbEC+ktsExfYuzQ/se9mB+fkpwp2jHmPgfSKswVTufq6S4u5m2g8bg7TZ9+hnNSBkYMv1PjA1JUQmiUMFyAoX+HwtKy03zMf0GSRSL4QvG5YtVnAaUO2dG+vdvA4jVbSB2sQIzhQEsuaCU4PcA9FOY9MwV3cyNHT2JxPQBQnjtHZ+jSN0avIttrek2ciR0OAqEQCKWVuLoPNwIpeXArmxo7ey/udfsA9X+fxVX5Nnfz1bQ3oAAn8YkuYhhWlBNyEM+dVpkVcPpVf5bp++68hEoMUdYIgnlc3jogp2ugGc6mCM2xwdz7kLxiY6M6dNcPBZNGqpbv8uklAqDVdK5/0eXU+hmCKac7cE0E1+IhfeWeTehvUnceVQNgAAAEgEAAD7AR9qtpqQ+WWWztHp1sy9R63qIeRo9q0kFOLF4JwpZXUjLjcRbiOHEDv573w0VVsC4SDgvPrVglTYFUhCNw/cKZBBNbuuOSBdbjzCYMCYQTuYGCGcNAb+WOF7/JZ/XcyljP2Gf5NLAtMYXIP/ECoTZVLjMSMb75jhGQFORUk4OB4NSJOJVJAJhfse6/TSbzXPaJdFkWE5lSEwbu4iYYd5DN+1/WRfNRUBsiXPtyqVO88AqXtlupi6Y7JBiA2BQ2Nih2rTpLZpb/fXH07AhkPZI6uaErWmj1Waxop8RkgVPAFBt2Ksxx8h2J/ua6bRfVNL96bkXweC3ma3Jj0nh2xrQrGbC7QKkf9fyf6LBAgt7w1NdRMZBQ+GBDiYUa3c9xiYob37qb7PupBvySpx4t1usjBNAKeU1QwW0N8lcViAnw1S6f4L2MEZIzBl1o92CWdOtZqZzIjR2XjuMHMo7X8e0Mp/feoPZZPvvlc+eFNQ8JXoQDUsZZm+JGo8+s6158iwVYja1GfQ/lL8aLwWbH+DY0cTlXcvOYQHOvI5czldxOY81X56dze9NBYo9fPEO4yvxlPotAtKLKgtbsXqDKNtz4q0yDaGcIiVUTGim0J0A5rndtm60Kh1OgyTkIHAE7x63aLFRSw/1AP6C5BIq2BJXeXZABEBs6QGVsZhmrv6gL+bn/IAi/xS23JM7UYCzjhoFDtXWxD1VC4Y1qjLgh6IOdqxC0gt+I8XiagXkSdkOWdVtXTAfIGBJp86RixP+BOQpe28hfjUWIKgLbNsSPIoyLHK0cwW7Oukt3t5ygSsIdUG2J7QdotRYSD80iZnJtelPqgSFO7ylb89gGf8G7oFMIWEAy9jAXs3h03A0x4dvtdxsAtZTmQIlM4wKiH5ALLNO9qpo3bhIoqjr/b9V2UdSSI7ELpIg+MkxJPvEZi54RGdlzLScviJC5Xi3Q+zY6Z3dn7VSzEHcWpD3xC+YY7ECr6P2Mlc8pCkOLuOUf2GtyK5dRFscQbfWOowgyRWvrBdTGAzzDfgzGfm6hR0+QZx2dC8Kofp5mLAkKjwAo7u7Yjx6ysLea+yTgaX2bMnhz3I4Gz5DILT55rE5mbv4B2wnV1g51BAcfnrVES7Wnbv8Xy3S8/lIHfLs0/P7OpRt91XXxO9ubYYYn8ghhOER+3y0BiWlrYPe5i5FYcPuQCxPGUc9cjP+N+bvbE7vQR8t7iwgxvV4XvnD7PYbngcuyk8WapyWE2IiTLLTAsFpNayNF1AijSel+JcLaa2WIWQ3N+uashq/qrXB/YOJ0IVmJ5xCi86cEB0pWNJkhtZ9JVfnHjAfISQsxqfHh9B+5nFN9viC6ACOG+FVpFdJDPszqTIB/d6sQjO5B4J4J/VZcbsQfqkn7edJ2sOsggd4fUJN4tLPV34gMk7z7Kx1iMbnF3HMaaJgQDhTfmrb44s3UE+/hFDcb26Uc83NwAAAGAEAADbZSGZfaD//d16jIAWW9kFMPz2+a3VfEp7TJWHErOSXwZwC2A+mDZXYhAZQnD++sV9nuPctm0dcEvwZ/ekCqQZMn9ahjrt3XgBxdRa/Y02e9wq5M7tx53t4JMzGfWW052Q7O/8EGJq/fNxB24d2zOcPT7YHvG9k0aNu9XrrJueyqAiSgbpdlJwWOJYBB/Zos0DdPcxmKNMXxRzb0hz8Cd88fUuD4NTZtknJWxcFd7Jz/VKCTxYBA4oiWDXGXhlyaEopip2s8C6E+Ae8E8yMGhslERj/l3oi1k3/G71qdzHYOheOrbxwC9pEQpN6KV5L1uuKwBmD7QfLKlgEjQD8DamuQd4DZYq946TM6ZvbbaXTmLly3h9g74+R+HsAGZzbj/usQe8N5tPV+u2hwCQGEwK+q3KcdOoaoVQeWJfPH03KPatZaUNvmLdwfr9Nzse7d7yj3wlbn5v3ZLPtsix/62dFZ03NC2ZBmVKTJBhEdu5W2FoO8LzvfpmJgTsVMwtcfEMU9qyskVx4Pr+OSEuj7jcp/Rb5l4QUz3M+8IFxZGfKLXEP0H0LM+zBztdYZVeumLg8PoYTgvWmI8fAN7hrk9QZnvQ7BW0OS00t3VPiPpC8DUadA0qvrRKZsO42brM5TMSslJuiprCejS+uBqtsyY2YcMlvTSf2pmNhC3LAZmGGGOAhYbX97q1JhHz6ixVNrr2ovUfHzdjvpPF0X6BxImBc2+Inudy6Le9HzFWIQqFbn2t9FHDLYoy1RllLCbcbekIVvF9KC0z36QkbSlrdbNzAEYmu+MJfCLxAkG9mQJFSkIKwfr99cxyirAON/FctEs30X9/kxWCkOXt0YGkbpxKtm3k2oYd0++55svruqKYvo/CTAsQ6fmsT3lQ/EWH5U+7TvVChNKnVNclGQG9e6uByz153rcHjU4otb3cdVE0+ph2SRJSnHahE6vWx25EFy9vlTfSKd3tkLy1OokFZhAtvYAUlfOI7jlF6S9NcYVgtDaMeCMxCOFD2KPk4UQMSXxrYmA9ga9LVpUpvS0ft/mBjLuQyedRlJEw0AcDyAVRWNtH7WtNfSQb16PvnolHLYRB0zDfo5uZBZDvWnStyBrYCTY/v9O57Gc+FxFDh3hJBDmckNZ9GDgb1KzJsQ+yvZlAJS5/GAiD8anqCTpDbjBs6Ju1Q5njjhcOlcu0/CySoegdNmXtauv/mfq4xArDjLA2kS0OQzEJw5Ol/AAiq/DeKaOYMXD0cPz8utZmB05Enx2aAypPdEQ/N2vmeCTGiYCx12c5z9A6b+eeAGdOL0t6Aar5oDvj3bcdnC01/qstDizg42FhtPj6xyqI0dAlMa/2vkvSyusPM46sqm99wAM4/RcxX954nB68NXRdYwFWPUG31IN86oO80EayVNyuJ5Po7BDj2h/zdtj/UTH2fxfG4pKpfBkwpVPaV8X9ZrARKf/1iqFnG2WPJBUV9tHCIDvgWQwKg7AW5l5MZv+YaAK4OAAAAGAEAABLbbTtGXhlQNC6/Jc0iHTbaB6eNYv4ClxhGivhqq/jXv4v5NhGxoOL+0MyHBHudYVNr9jqvOIyn0CXBFReXYbZ+0ZZcuerZ2bayO4Z4X99eO8ODlYTrjJ6EnJ+FEkz7DZjIlL7mTRAhHcgXfCnjg2S9Hg9SIqcxB/cq+Q59r0I6arI8oV/ZmIcaHJZi5vtodMsUWzbPXKuZJcU7gy659WqXy31Edn/hn5AKnTNi4p4B5NQT1ybUBA/XR/RDz/umUmFWOOCEeqX8GFF0oGrw9Otyd04geNlAElnwAOd/S2bwX3piUpQ5OdhanuKHhhhWwebW/Qj9nEX1xBfGp3JplT3/glKzWjzkTTsxm3X07pcXcZMV/oz6ecMuYNtoItcm9GcPXlM5RG8hvVmNnrKExSWrVRzFocUMO2l0++ixWD7kRqFCSrcuDaa977qTNS8+gHt2mYKqh+nqMYhIBpQtU8eD5/2gXMxN336JyGUnMR3lQQaP1uoryd3pp0nMQlsq7wy2K7b2JhhdKwo8JPyfkFAyIokaa/MlAUAt8gdNhO37iQZGsK82VVxC4Y94U3+RJGKKQLS8OQRlM2aUch/p7mwrmjM3ZTshQ7ogb1R57CVx2T5efvh1VGsBDSoiH0L8rYtNte2y5+//f2hTHP7jADp/2vJa9q2wBqKSxBggzASdK83a7R5+b7Z51o5ToURJmWgJF6pXp0rgsY3gmX0ohw5pXEbvqBppvvRszbBxMaWFqNBYwZ5QW+F76Qs43HrDk6xWQcl8aqWzew6uPtQtAqlwF3Vi5Vp9YwJmUitgfuUEUTWNs6x9nKmutEQLySlKSWfOVdFjhYqb24jbFAJHNiTvuL1hPPLWHDZxursY2N1kABRHfBrM1h2uWw24p7p0Np87WKegxzO5Zh9T+uWSVm6AyUOuvURZlUqNOfk6uEyMBvdd3hr1hBSiFhd9Pmr+4joq3yIGw3TtI9Wls2s9d/7zMlKacPSiJQLwQiou1aLtsSE2W/60vqskdo1/cvj6ZQB1veWv580lPV1U9/ipniP8Extsgc7xXIt79emZcBxYO4wcrTIOXIJBHsSYwqQNZ044pTl5xS47FvMvZi24MWfzDPsSppZ5ZToCmazJgyRHuNupy+IMLneFYukfl+rbcxnPXRUF+5PbV9RZwYmxDLYu/trnmHgpHfC/5rURztb819lyHsOPnBEdkUOnIDQd0omTphH4Fb5j6V2bi82U2IV1p/V6joRx/u5p2VTfPgCmypDiUmIGHHfqcH+SZVLUStSBbcTNTaTD6f0Z/XwrWpWweC9xeAJPwvSbg8FWcocc9uZksuxNCmxFk21kLxWOdAIZ7Jns+NvDGWIMWd2qSTJcWFftpMP6cBqqNIgltAU7w+Zxc3D463IAuxePYUPjtDh0YQLhY4qVPJqx64pdbQm8DwHr4MBaJVL7RYMZk+ZfwOp8tUm2U0UStleqnPuNxDixyRbrgOEMW5/CtQX1x4bAAAAAA==');
