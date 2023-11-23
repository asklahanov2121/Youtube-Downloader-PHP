<?php
error_reporting(0);

    $red = "\033[0;31m";
    $green = "\033[0;32m";
    $yellow = "\033[0;33m";
    $purple = "\033[1;35m";
    $endcolor = "\033[0m";
    popen('cls', 'w');

    echo "

================================
         ALBERTWINKLER!
         MP3 Downloader
================================$yellow
Youtube URL: $endcolor";
    $aikawas = trim(fgets(STDIN));
    if(strpos($aikawas, "youtube.com") !== false){
    $urlurl = urldecode($aikawas);
    $download = file_get_contents("https://loader.to/ajax/download.php?format=mp3&url=$urlurl", true);
    $z = json_decode($download, true);
    $_COOKIE['title'] = $z['title'];
    $_COOKIE['id'] = $z['id'];
    $idz = $_COOKIE['id'];
    $title = $_COOKIE['title'];

echo "$purple
Title: ($title)$endcolor\n";
echo "
Downloading!\n";

        function makeCurlRequest($idpo) {
            $url = "https://p.oceansaver.in/ajax/progress.php?id=$idpo";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            //$responsez = json_decode($response, true);
            //$kawawaz = $responsez['progress'];

            curl_close($ch);

            return $response;
        }

            $lastItem = ""; 
            $repeats = 0; 

        while (true) {
                $result = makeCurlRequest($idz);
                $responsez = json_decode($result, true);
                $kawawaz = $responsez['progress'];
                $linkdownload = $responsez['download_url'];
                $repeats++;


                if(strpos($result, "1000") !== false) {
                    $lastItem = $kawawaz;
                    $downloaderzzz = $linkdownload;
                    break;
                }

            }

                

                sleep(1);
        
echo "
Processing!\n";
        if($downloaderzzz == null){
echo "$red
Server Error!$endcolor\n";
        }else{
            $mpz = file_get_contents("$linkdownload", true);
            $downloaderzs = file_put_contents("./audio/$title.mp3", $mpz);
            echo "$purple
Success Download! $endcolor";
        }
    }else{
        echo "$red
Invalid Url $endcolor";
    }
    
?>