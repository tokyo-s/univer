<?php  /* Starts the session */
session_start(); 
if(!isset($_SESSION['UserData']['Username'])){
header("location:pagini/login.php");  ## login
exit;
}

?>



<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.js"   integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="   crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/des.css">
    </head>
<body>


    <ul>
        <li class='li'><a href = "pagini/index2.html" class='link-nav'>Go second page</a></li> 
        <li class='li'><a href = "pagini/index3.html" class='link-nav'>Go third page</a></li>
        <li class='li'><a href = "pagini/index4.html" class='link-nav'>Go fourth page</a></li>

        <li class='li'><a href="pagini/logout.php" class='link-nav'>Log Out</a></li>

    </ul>


    <h1><i>EVEREST</i></h1>

    <div> 

        <table>
            <tr>
                <td><div class="img_div"><img class = 'img' src="images/Everest1.jpg" alt="Poveşti de Fraţii Grimm - Frumoasa adormită"> </div></td>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mount Everest (Nepali: सगरमाथा, romanized: Sagarmāthā; Tibetan: Chomolungma ཇོ་མོ་གླང་མ) is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas. The China–Nepal border runs across its summit point. Its elevation (snow height) of 8,848.86 m (29,031.7 ft) was most recently established in 2020 by the Nepali and Chinese authorities.</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mount Everest attracts many climbers, including highly experienced mountaineers. There are two main climbing routes, one approaching the summit from the southeast in Nepal (known as the "standard route") and the other from the north in Tibet. While not posing substantial technical climbing challenges on the standard route, Everest presents dangers such as altitude sickness, weather, and wind, as well as significant hazards from avalanches and the Khumbu Icefall. As of 2019, over 300 people have died on Everest, many of whose bodies remain on the mountain.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>The Tibetan name for Everest is Qomolangma (ཇོ་མོ་གླང་མ, lit. "Holy Mother"). The name was first recorded with a Chinese transcription on the 1721 Kangxi Atlas during the reign of Emperor Kangxi of Qing China, and then appeared as Tchoumour Lancma on a 1733 map published in Paris by the French geographer D'Anville based on the former map. It is also popularly romanised as Chomolungma and (in Wylie) as Jo-mo-glang-ma. The official Chinese transcription is 珠穆朗玛峰 (t 珠穆朗瑪峰), whose pinyin form is Zhūmùlǎngmǎ Fēng. While other Chinese names exist, include Shèngmǔ Fēng (t 聖母峰, s 圣母峰, lit. "Holy Mother Peak"), these names largely phased out from May 1952 as the Ministry of Internal Affairs of China issued a decree to adopt 珠穆朗玛峰 as the sole name. Documented local names include "Deodungha" ("Holy Mountain"), but it is unclear whether it is commonly used.</p>
                 </td>
                <td>
                <img src="images/Everest2.jpg" alt="Workplace" usemap="#workmap" width="400" height="379">
                <map name="workmap">
                    <area shape="rect" coords="34,44,270,350" alt="Everest" href="https://www.youtube.com/watch?v=NhBzhi9jPFs">
                    </map>
                </td>
            </tr>
        </table>
        </div>

        <h1><i>Other Mountains</i></h1>

        <div class = "mountains" name = "K2">K2</div>
        <div class = "mountains" name = "Kangchenjunga">Kangchenjunga</div>
        <div class = "mountains" name = "Lhotse">Lhotse</div>
        <div class = "mountains" name = "Makalu">Makalu</div>
        <div class = "mountains" name = "Cho Oyu">Cho Oyu</div>
        <div class = "mountains" name = "Dhaulagiri I">Dhaulagiri I</div>

        <div id='info_mountains'>
            <img id = "img1"/>
            <div id = "div_m"></div>
        </div>

        <div class = "links">
        <table>
            <tr>
                <td><button class = "web-link"><a href = "https://www.facebook.com/vova.stojoc/"><img class="img_link" src = "https://s3-symbol-logo.tradingview.com/facebook--600.png"></a></button></td>
                <td><button class = "web-link"><a href = "https://www.instagram.com/_stoves/"><img class="img_link"  src = "https://www.net-aware.org.uk/siteassets/images-and-icons/application-icons/app-icons-instagram.png?w=585&scale=down"></a></td>
                <td><button class = "web-link"><a href = "https://vk.com/vstojoc"><img class="img_link"  src = "https://site-images.similarcdn.com/url?url=https%3A%2F%2Fplay-lh.googleusercontent.com%2FLmnJkZ_97f5PHg-BE_AkntaS1v3_7MmaUO_m6oWpfKxVOriOsMPf79S52KInIJ0E_S8%3Ds180&h=2cbff1683dbe592b9ab21038cb91c8616c000ad1c727beccaf156a01cc6eea28" ></a></td>
                <td><button class = "web-link"><a href = "https://www.youtube.com/channel/UCxz28xjCJttpLFdF6NR4gjA"><img class="img_link"  src = "https://cdn.icon-icons.com/icons2/2699/PNG/512/youtube_logo_icon_168737.png" ></a></td>
                <td><button class = "web-link"><a href = "https://www.linkedin.com/in/vladimir-stojoc-a5789a1ba/"><img class="img_link"  src = "https://play-lh.googleusercontent.com/kMofEFLjobZy_bCuaiDogzBcUT-dz3BBbOrIEjJ-hqOabjK8ieuevGe6wlTD15QzOqw"></a></td>
                <td><button class = "web-link"><a href = "https://medium.com/@vladimirstojoc"><img class="img_link"  src = "https://cdn4.iconfinder.com/data/icons/social-media-2210/24/Medium-512.png" ></a></td>
            </tr>
        </table>
        </div>
        <script>

            x=document.getElementsByClassName("web-link");
            for (i of x){
                i.onclick=function(){
                alert('You will be redirected to another web-site')} 
            }

            x=document.getElementsByClassName("mountains");
            for (i of x){
                i.onclick=function(){
                for (i of x)
                i.style["background-color"]="#56baed";
                this.style["background-color"]="#fbf2e9"; 
                mountain_name = $(this).attr('name')

                $.ajax({  //get
                type: 'get',
                url: `http://localhost:8001/images/${mountain_name}.jpg`,
                xhrFields: {
                    responseType: "blob",
                },
                success: function (blobData) {
                    const objectURL = URL.createObjectURL(blobData);
                    $('#img1').attr('src', objectURL);
                    $('#img1').css({"width":"650px","height":"400px"});
                    $('#info_mountains').css({"width":"650px","height":"550px","margin":"auto"});
                },
                });


                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var allText = this.responseText;
                        //$('#div_m').html(allText);
                        $('#div_m').text(allText);

                        //$('.links').css({"margin-top":"100px"});

                        console.log(allText)
                    }
                };
                xhttp.open("GET", `http://localhost:8001/texts/${mountain_name}.txt`, true);
                xhttp.send();

            };
            }

            function toDataURL(url, callback) {
                var xhr = new XMLHttpRequest();
                xhr.onload = function() {
                    var reader = new FileReader();
                    reader.onloadend = function() {
                    callback(reader.result);
                    }
                    reader.readAsDataURL(xhr.response);
                };
                xhr.open('GET', url);
                xhr.responseType = 'blob';
                xhr.send();
                }

        //     function encode64(inputStr){
        //     var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        //     var outputStr = "";
        //     var i = 0;
            
        //     while (i> 2){
        //         var enc2 = ((byte1 & 3) << 4) | (byte2 >> 4);
                
        //         var enc3, enc4;
        //         if (isNaN(byte2)){
        //             enc3 = enc4 = 64;
        //         } else{
        //             enc3 = ((byte2 & 15) << 2) | (byte3 >> 6);
        //             if (isNaN(byte3)){
        //             enc4 = 64;
        //             } else {
        //                 enc4 = byte3 & 63;
        //             }
        //         }
        //         outputStr +=  b64.charAt(enc1) + b64.charAt(enc2) + b64.charAt(enc3) + b64.charAt(enc4);
        //     } 
        //     return outputStr;
        // }
        </script>
</body>
</html>