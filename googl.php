<?php
/*
[Usage: php filename.php youtube-url]
[GOO.GL SHORTEN CLI]
[Author: Iansangaji]
[Date: 2018-01-27]
*/
function shorten($url){
	global $argv;
	$post = "url=".urlencode($argv[1])."&captcha_response&security_token=jwT3EvSNTLfurRhkZ4WQux_T_ys%3A1554108447868&typed_url=".urlencode($argv[1])."&botguard_response=!s7ClsJFC0qFtph66SoxEGUruGkJ8b0wCAAAAg1IAAAANDwADFg6TmQlXVa4Y8hebL3shzzw4eSWTi4AKmHQTySMFxpxocP4D5KpDEY0d8VYwVIWH4vZS0cK-PRVV1i6-CMQhjhJrP7UqvHf2hPp1loDc6e5fAXKhMk8G5Z5LL6meAOkRqQlU-o-jcXEkxEcosUDf3j9YBPFv0oj6rVMHjNM2mQg2htK1Ldiw6BaK21-Ete3DRj4UvwBH76Zqv3cagyTBHrruKX-7qQR3kevwHKb6bjQbhylge02j92KOuMGlSqfcUg12AKu3uDq5v7TB0j31oREdQdlDF6Mf4bpemolTmALSJh3_SiIb4mR3lhm76NhK2cC1CZQbk7ULbtMnG561HS2yIPc_QqatjWE6-XMNu-Eb0EfoxBkWYPsZ5Vbz9qxxlYaiWWMOcBqWXWR0kODUyLqddJaeWBVKrTELWrAFL_HHDIMjd4wBqWk6NTpU5Z5E0_1oP2T1pZR9DLB0ThUJIcJpkWtGEe7UGfzTdrDvi7l5AGFuhUWOI-dB01b2Z15fFTiS07S-nT_CPFeHViHE52Z9XMJIsOxE4M2qp5pfIzVebJR9rHA_4WhYsMdfwahU-UiHldndVmiC9qkHNT1EX8eJv_pq_5EMG9yntN4saKCEx5oIrYaynX8Myg2-Lpt-6WnWO6Rjv2rkknBGaJ_8l5wrFG-7I-LkErrJWnO53olgwufkTtakWH9ZQdeoAcAzODD-agXLbczv8rPT7akSOv47IRDV3YJ5OIhFG8nm7FoM9KwiZ4AijD9iYRZjNWd8yvfn8HqwP_xF2jGDzSwtUMEfJ6TJykQVPJogY5TZ1t17nB6uhiSfn1ZeYxFGGJIDp36bGl7dbt1Ld0oE8qgYmHv7aqDRi0oqTD00T8eRMAGooWCGvVoBi691cxQXAlDMfUKHSHW2BdmqX5c5A9LinIdLBHMLO8rvpQEDqS9nfWWjEm-9yK-d5OgBsTFfHx80-kHUtTZiDWg7q-77OBPY1YB8gdJxIvsy3ZCbMnWToj_-BMU8fGGiUtuYfWZcU1PtxdpcHG9r2gAkqg7mD8xhGzeu-bACoEunMBLqrq-TSC-Q2XB3oSQSihVCxUmRHH-xi2Jf7kfeilL9lVmdBcU58DhbEkrq1UE2ZzQv90A3CiHU1htcfkTXxWcDtmFwAfqG2RYXV2KH_NFSyOVGecEHv5bMc8IGLChelJWJLSdiM0v2ZNo1ULCo8CSYOlbRB0Y2xqjMC1LbexMd2tEIDcM5NB2DIf_vUi_GtUZxmLOB-epd-CUXwkVtC6uC52E7sn28ygUPuOMQpTvtpfX3ucGYQGAYs2ZUyCeWYWuJUnFRNZKa2jsN6vyNikS4ZFVctXTOyhRp0VpM6wihn3ATF35JQEdcvng2eKJMLj5gsTBwVzzRaj4HdR-7Wh5ulwYibHT7HoXPu7H9c-810VxqtI_zSLd3w4ZwIGNjiuxNBwHf80vrAK6nZgPutBfk3HHRWPElJL6fypIURE_Msb3b-ErFAcRjpJTP60-7EWQPYMNcEdKK5BUrPgYYzgIwAQzCwQwlcnfOoTf42OqO4BNUiDe0hz7cICDfq9RlGTVOVhp1L5kmX6Ji4qtl_nQEnZSnDUH12gtI2EBGlkh3QCzrkzl4tAIgL5fl-KvqHufbt17Vua3oqeIPUVPHvmcE5L6sEeg-Kbs-ys5eOg1X0MoVha__okacF-PuIi7ybDduTnS9BfV9MYawH3ibqAPGgd5puRIZrkS11pronkvxP6_bDi9BvdE73VBQPOc93FnBif4fNqKe4nZ4pX_R1aQWfSdvTKzA6TswD68j-tdJY-cSuW5jTtlMw_5dJoaBJ3GTGW1qfNPEOwN2S4kAtux_h___vFQbribq5kdCBC2g6H9P-2UHc30gGmVih_W5It0TKpK4PECToSEsdRAuUGFj9-gPmwizlfojwKoq5EyZbiGmaUfmFtH6FbEE7OfJnT4vpmpbc0TFFHQuXj6fGmwde9LHMzc-XWKLuYZ4PGRlLM-iNWnyc5ppZpiC1MXokvgw3YFbKDqPbvm9UTTlXZ-5yqjDrwXSUJRzEpJ_2RHHHhgx9l7qyUAodghUrLbB5jN_2E6_5sTRzSWIQCBtyFxYMW8TkaowHQiKzqUjBk_NwavZl8gj9ZI9TbZXbANkMnbwudM6xQCjEw9gwZ2F5oE52Q4tyL7Fa7STNYqDGtWeMNHfBAHgM9iYLwq_t-eF1oHrj5Yn_HJ6jounX35Nt1THTpu92Sv2c1IM8l2JTk-E-iwP7xByqEw5U8aiwEZ-cnXDqZ3PKuBSbcVgrwqw6mPDp9jC7JJ4ZftaekBHtjbfKiyoL5Wx6ED0X8TK-5WWIbfMlneHatzWDcDtoqZcrYSNC7ymBTsWNWAnCbuCq9U4v74cuVBIYDzgrXCa3Qw70jsWk_HfR1W-dCVo5_J76xch0qVF1bLO6e5OlpUU7MA2y4Yaf9nTVrGet4Ep_d-Lse_G-YgGBL1clriMqeMn7VBR-Q1dlkz8_XLsOcz4SEjg1Z3hA7F_Ax9I6tBWzP1EKNEkR0YaDXCyHa9CIFZPjOUzIZEz8HuLLZxMBAXqIViXaGQoCL6wW67mnKG60BUjK7vKW61CSwiif4T8AcqP5LGWYjaGZoileCHQlzkqcwmWicpXkKG5gsJNsLF1sCEhxZtmjUqWuDzp0xeiJIELpbLj4hMtLvVJ07_qniJ0PDPu2kNjlAK_x2E60YOwr86UNphwgkKy13i75UltwIh1I6S1V3NaSH6R6xkc_mfvWCQ2WBgsRQjloYduylx6y26OQIwaCKf4FOPoWHHH9lXKIy0bxzfuiZPfW87XxDmXbkPqKqqWfn1j5gAIAeQ8n7jyRlPG35z5ClOaU9SRvutQHZ4Zp_Ds9NtajShRixXLPQWhtkmhDBnqCZPPN4AoXrvS8qMxAKUH0_I216B9UxIezypRlAq7IgNLS2Qh9aWdLJFRzehFxVTNOBS8LlJXDZZ2i_XzrQ_4VN0av-66sAlorM7ALAtboF2C8OaW-nmW2eDbNBDjp-ooFEJthZgsjendT1l0so8GF616iTSbcyrQ40fAj43vNYtAkMkp2CklcJxhw6g8YYWmn8dv9OUHEQVcEv42j24y-QyEic9MAqZGLSZuP1mzDCYgqJCdeTi0wL0XYbX691jM6RbN0gr9nUloVwdLV3p5qXtJIm10ez8NYWyyPYZ8";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    $request_headers = array();
    $request_headers[] = 'origin: https://goo.gl' ;
    $request_headers[] = 'accept-language: en-US,en;q=0.9,id;q=0.8';
    $request_headers[] = 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.80 Safari/537.36';
    $request_headers[] = 'content-type: application/x-www-form-urlencoded;charset=UTF-8';
    $request_headers[] = 'accept: */*';
    $request_headers[] = 'referer: https://goo.gl/?pli=1';
    $request_headers[] = 'authority: goo.gl';
    $request_headers[] = 'cookie: authed=1; US_SID=QAfnMfacWhESH_xLWSsZ-2C3t7fdXfi2CrbhkQ7K6L6w-3yj_f02QEQFEiqkVkVxjJSkMQ.';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_POST, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($ch); 
    curl_close($ch);
    return $result;
}
$googl = shorten("https://goo.gl/api/shorten");
$googl = json_decode($googl, true);
echo "YOUTUBE : ".$googl["long_url"]."\n";
echo "SHORTEN : ".$googl["short_url"]."\n";
?>
