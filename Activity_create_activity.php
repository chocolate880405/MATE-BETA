<?php
session_start();
$pageName = 'Activity_Create_activity';
$title = 'Mate';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>
    <style>
        /* --------------- */
        body{
            background-color: rgb(163, 163, 163);
            min-width: 375px;
        }
        div,p{
            margin-bottom: 0px;
        }
        .page{
            width: 100%;
            height: 100%;
        }
        .left-nav{
            width: 316px;
            min-width: 316px;
            background-color: rgb(119, 196, 255);
            height: 100vh;
        }
        .right-content {
            background-color: #a38cda;
        }
        .content{
            width: 80%;
            max-width:904px;
            margin-top: 110px;/*待討論*/
            background-color: #240173;
            overflow: hidden;
        }
        .content1{
            display: none;
            width: 80%;
            max-width:904px;
            background-color: #240173;
            overflow: hidden;
            margin-top: 34px;
        }
        .gg-mt50{
            margin-top: 50px;
        }
        .gg-blur{
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 9;
            background-color: rgba(36, 0, 115, 0.63);
            display: none;
        }
        .title{
            margin-bottom: 50px;
        }
        .gg-mr50{
            margin-right:50px ;
        }
        .gg-mb50,.gg-mbb50{
            margin-bottom:50px ;
        }
        .gg-ad-image{
            width: 100%;
            height: 360px;
            background-color:rgba(255, 255, 255, 0.3) ;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .gg-ad-image-place{
            width:30%;
            height:max-content;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .gg-svg{
            width: 48%;
            height: 48%;
            border-radius: 5px;
            border: 1px solid #F4EDED;
        }
        .gg-date-title{
            width: 100%;
        }
        .gg-date{
            margin-right:50px;
            min-width:335px;
            margin-bottom: 50px;
        }
        .gg-time{
            min-width: 335px;
            margin-bottom: 50px;
        }
        .gg-date-tb, .gg-date-tb1, .gg-time-title{
            margin-bottom:20px;
        }
        .gg-date-page{
            width: 100%;
            height: 272px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.3);
        }
        .gg-time-page{
            width: 100%;
            min-width: 335px;
            height: 272px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.3);
        }
        .gg-circle-white{
            background-color:rgba(255, 255, 255, 0.3) ;
            height: 33px;
            width: 33px;
            color: #F4EDED;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
            margin-right: 10px;
        }
        #map,#member,#name,#start-date,#end-date,#date-line,#money{
            height: 33px;
            width: 245px;
            border-radius: 10px;
            background-color:rgba(255, 255, 255, 0.3) ;
            padding-left: 10px;
            color: #F4EDED;
            font-size: 14px;
            line-height: 25px;
            letter-spacing: 2.5px;
            font-weight: 700;
        }
        .toggle-btn {
            width: 50px;
            height: 25px;
            margin-top: 6px;
            margin-left:10px;
            border-radius: 50px;
            position: relative;
            background-color: #AFAFAF;
            cursor: pointer;
        }
        .toggle-btn.active {
            background-color: #f6ac45 ;
        }
        .toggle-btn.active .round-btn {
            left: 25px;
        }
        .toggle-btn .round-btn {
            width: 24px;
            height: 24px;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            top: 1px;
            transition: all 0.3s ease-in-out;
        }
        .toggle-btn .cb-value {
            position: absolute;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: 9;
            cursor: pointer;
        }
        #food-name{
            height: 33px;
            width: 253px;
            margin-left:10px;
            border-radius: 10px;
            background-color:rgba(255, 255, 255, 0.3) ;
            padding-left: 10px;
            color: #F4EDED;
            font-size: 14px;
            line-height: 25px;
            letter-spacing: 2.5px;
            font-weight: 700;
        }
        ::-webkit-input-placeholder {
            color: #AFAFAF;
            font-size: 14px;
            line-height: 25px;
            letter-spacing: 2.5px;
            font-weight: 700;
        }
        .gg-food-money{
            width: 245px;  
            height: 33px;
            margin-left:10px;
            border-radius: 10px;
            background-color:rgba(255, 255, 255, 0.3) ; 
        }
        select{
            width: 240px;
            height: 33px;
            padding-left: 10px;
            color: #F4EDED;
            background: transparent;
            outline: none;
            border: none;
            font-size: 14px;
            line-height: 25px;
            letter-spacing: 2.5px;
            font-weight: 700;
        }
        .selectBox option {
            background: #664D9D;
            color: #F4EDED;
            outline: none;
            border: none;
            z-index: -2;
            font-size: 14px;
            line-height: 25px;
            letter-spacing: 2.5px;
            font-weight: 700;
        }
        #speaker,#detail{
            width: 100%;
            height: 130px;
            border-radius: 10px;
            background-color:rgba(255, 255, 255, 0.3) ;
            font-size: 14px;
            color: #F4EDED;
            line-height: 25px;
            letter-spacing: 2.5px;
            font-weight: 700;
            padding-left: 10px;
            resize: none;
        }
        .gg-mr-10{
            margin-right:10px ;
        }
        .gg-icon{
            position: absolute;
            width: 42px;
            height: 42px;
            border-radius: 25px;
            overflow: hidden;
            top:-60px;
            right:-61px;
        }
        .fa-circle-xmark{
            font-size: 42px;
            color: #FFD38D;
            background-color: #062767;
        }
        .gg-card{
            display: none;
            z-index: 10;
            width: 580px;
            height:fit-content;
            background-image: linear-gradient(226.02deg, rgba(255, 103, 249, 1) 4.21%, rgba(83, 56, 245, 1) 99.47%),linear-gradient(45deg, #F66F40,#FFD38D);
            border-radius: 10px;
            border:3px solid transparent;
            background-origin: border-box;
            background-clip: content-box, border-box;
            position: fixed;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        .gg-card.active{
            display: block;
            
        }
        .gg-content{
            position: relative;
            margin: 40px;
        }
        .gg-name-image{
            display: flex;
            justify-content:start;
        }
        .gg-image{
            width: 45%;
            min-width: 100px;
            height: 140px;
            background-image: url(https://greatgame.asia/wp-content/uploads/2020/10/5312385.jpg);
            background-size: cover;
            background-position: center center;
            margin-right:10px ;
        }
        .gg-name{
            width: 45%;
            min-width: 250px;
        }
        .gg-tag{
            width: 100%;
            display: none;
        }
        .gg-tag1{
            display: flex;
        }
        .gg-mb10{
            margin-bottom: 10px;
        }
        .gg-mt10{
            margin-top: 10px;
        }
        .gg-mr10{
            margin-right: 10px;
        }
        .btn-linear-orange{
            background-image: linear-gradient( #D45BF8,  #D45BF8),linear-gradient(45deg, #F66F40,#FFD38D);
        }
        .speak{
            width: 100%;
            background: rgba(255, 255, 255, 0.3);
            min-height: 140px;
            border-radius: 10px;
            color:#F4EDED;
            padding: 10px;
        }
        .selectBox{
            width: 100%;
        }
        @media screen and (max-width: 960px) {
        .left-nav {
            display: none;
        }
        .content1{
            display: block;
            width: 90%;
            min-width: 340px;
        }
        .content{
            width: 90%;
            min-width: 335px;
            margin-top: 0px;
        }
        .gg-flex-col{
            flex-direction: column;
        }
        .gg-ad-image{
            height: 172px;
        }
        .gg-ad-image-place{
            width: 120px;
            height: 120px;
        }
        .gg-icon{
            top:-50px;
            right:-55px;
        }
        .gg-date{
            max-width: 335px;
            margin-right: 0;
            margin-bottom: 20px;
        }
        .gg-send{
            font-size: 20px;
    line-height: 21px;
    font-weight: 700;
    letter-spacing: 2.5px;
            }
            
        .gg-option{
            font-size: 12px;
            line-height: 15px;
            font-weight: 700;
            letter-spacing: 2.5px;
        }
        .gg-mb50{
            margin-bottom:20px ;
        }
        .gg-time-page{
            height: 215px;
        }
        .gg-food-money{
            width: 260px;  
        }
        #map,#member,#name,#start-date,#end-date,#date-line,#money {
            margin-left: 0px;
            font-weight: 400;
            font-size: 12px;
            line-height: 22px;
            letter-spacing: 2.5px;
            width: 260px;
        }
        .gg-date-tb1,.gg-date-tb, .gg-time-title{
            margin-bottom: 10px;
        }
        .gg-pstitle{
            font-size: 16px;
            line-height: 30px;
            letter-spacing: 2.5px;
            font-weight: 700;
        }
        .btn-pc-white{
            padding: 2px 22px;
            height: 29px;
            font-size: 14px;
            line-height: 25px;
            font-weight: 700;
            letter-spacing: 2.5px;
        }
        .btn-pc-orange{
            padding: 2px 22px;
            height: 29px;
            font-size: 14px;
            line-height: 25px;
            font-weight: 700;
            letter-spacing: 2.5px;
        }
        .gg-time {
            margin-bottom: 20px;
        }
        #food-name, #speaker{
            font-weight: 400;
            font-size: 12px;
            line-height: 22px;
            letter-spacing: 2.5px;
        }
        select, .selectBox option{
            font-weight: 400;
            font-size: 12px;
            line-height: 22px;
            letter-spacing: 2.5px;
            width: 255px;
        }
        ::-webkit-input-placeholder {
            font-weight: 400;
            font-size: 12px;
            line-height: 22px;
            letter-spacing: 2.5px;
        }
        .btn-pc-big-white,.btn-pc-big-orange{
            padding: 10px 40px;
            height: 36px;
            font-size: 16px;
            line-height: 16px;
            font-weight: 700;
            letter-spacing: 2.5px;
        }
        .gg-food-money{
            margin-left: 0;
            margin-bottom: 10px;
        }
        .gg-mr50{
            margin-right:30px ;
        }
        .gg-mbb50{
            margin-bottom: 136px;
        }
        .gg-card{
            width: 335px;
        }
        .gg-name{
            width: 250px;
        }
        .gg-content{
            margin:30px;
        }
        .gg-image{
            width: 80px;
            height: 80px;
            }
            .gg-tag{
                display: flex;
                margin-top: 10px;
            }
            .gg-tag1{
                display: none;
            }
            .gg-card-title{
                font-size: 20px;
                line-height: 21px;
                font-weight: 700;
                letter-spacing: 2.5px;
            }
            .gg-smallt{
                font-weight: 400;
                font-size: 12px;
                line-height: 22px;
                letter-spacing: 2.5px;
            }
            .gg-text{
                font-size: 14px;
                line-height: 25px;
                font-weight: 700;
                letter-spacing: 2.5px;
            }
            
    }
    @media screen and (max-width:400px) {
        .gg-mr50{
            margin-right:10px ;
        }
        
        }
        @media screen and (max-width:446px) {
            #map,#member,#name,#start-date,#end-date,#date-line,#money {
            width: 100%;
        }
        .gg-mr-10{
            margin-right:0;
        }
        .gg-food-money{
            margin-left: 0;
            margin-bottom: 10px;
            width: 100%;
        }
        select{
            width: 100%;
        }
        }
        @media screen and (max-width:1240px) {
            .gg-time{
                max-width: 335px;
            }
        }
    </style>
<?php include __DIR__ . '/parts/general-bg.php' ?>

<?php include __DIR__ . '/parts/navbar.php' ?>
    <div class="gg-blur"></div>
    <!-- ----------------- -->
    <div class="page d-flex ">
        <div class="left-nav"></div>
        <div class="right-content flex-grow-1 d-flex justify-content-center align-items-center flex-column">
            <!-- <div class="content1">
                <div class="gg-logo"></div>
            </div> -->
            <div class="content">
                <div class="title d-flex flex-wrap justiy-content-between">
                    <div class="mr-3">
                        <p class="pc-title-32 text-pink gg-send">建立聚會</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="pc-hint-14 text-hint gg-option">! 代幣數不足，前往儲值頁面</p>
                    </div>
                </div>
                <div class="gg-ad-image gg-mb50">
                    <div class="gg-ad-image-place d-flex flex-wrap">
                        <div class="gg-svg mb-2">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.46 283.46" style="enable-background:new 0 0 283.46 283.46;" xml:space="preserve">
                                <image style="overflow:visible;" width="289" height="276" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAAEZCAYAAAAzAyjYAAAACXBIWXMAABPWAAAT1gGxNhB1AAAA
                            GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACntJREFUeNrs3Ylt29gWBmCKpJY4
                            E2A6iDt4U4JdySgdPFdgu5KnVGKXoBI0HQSDONHC5d1LZwaZTLxopZbvAxzKASwQV+TPc664JAkA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAwKnrGILdqMryrq6qi7quk+anqpole7pjdDpJmqbxRdIJy/D7bZplN0ZG
                            EB2UsijuysXioiqKJCyFzhEIQZSkeZ5k3W58fZvluWASRPtpMZ3eFbPZRVmWSSJ8jnfHCVVSHgMp
                            z2+7g4FAEkT7oZjP70IIXYRKSACdWJWU9/uxSlIhCaJ2zR4e7kIQXcR5H05T3us1YaQ6EkStmH7+
                            3MwFCSGEkSASQgijQ25xDcFq4qR0VRRCiH8ILXo8VeO6LApBtEyAG4LlxXOCZg8PF1X8Zgx+EE/X
                            sG2oiLZu/vWrDY3nDlTxBMjrUDWrigTR9qqhuiy1ZDxfFRVFbN8NhCDa3hyAs6R5STxQZd2uuSJB
                            tKUgms0S1RCvbdHigQtBtNkNq6ruQu9/oSLitVVRvNaQl/nWbJkNK2xUQoglDlxJR/WsItq0eCGr
                            IOL1R646yXq930OLNjQYgmijRzhY0nlo0c4NgyDaaM/vynqWL4xsM4Jow6U2IIgAQQQgiABBBCCI
                            AEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABB
                            BCCIAEEEIIgAQQQgiABBBOvrdDpJmmXNEgQRrci63aQ7GIw7WfbJaCCI2P0GFyqhvN8fZ73ehxBI
                            405qE0QQscuWLIRODKHw8kOapuNYFWV5/kmLhiBiNyEUwiZWQHVdf8h7vXGz8aXpVXg90qIhiNiJ
                            OC8Uwuiqf3Y2/v7/Q4V0pUXDp8/2N7Jv80LdN29+Wvlo0RBEbLcl+2Fe6KcboRZNEBkCthZCP5kX
                            eooWTRDBVjw1L/QULdrpyg0BWznC5XnTkoXlq9ut2KIVs1lSVdWwLopfjaKKCFZvyUJ71Q0hFJZP
                            zgudTItW1zYIQcTOQ+i7eaHQZo1XeY9ja9HqqrJhCCJ2GkShJQshdNV782a88kb5+C3aUVRFYSxi
                            q2nDEETssiXrDQZJ/+3btd8rtGiXnSy79y2aIIKlhCoohtFlqGjuN/F+MdDiyZAIIniVbqiEQhty
                            meX5/cY2zhBq3X7/XhgJIo6tfdrCTcnSbjfOg1yGiuh+0+urRRNEHKGwYye9s7NkUzv2JueFtGiC
                            iBMQz3SO7VPe63VCgNxvoira9LyQFk0QccwfdDzJMIRGrIaiOKezblW0jXmhl1o0YSSIOFCx8unG
                            dqzT+btyCVXR5TpV0V/V1TbmhZ5r0cJ6H9xN9107J4h4rCbimXX/qlxWrYp+rK52WNVdhoroNobg
                            wexgoYI7pPUVRGzFX5VLCJ1/VS6rVEU/q652HKo3dZLcHkKLFkO+XCxuwwHgxpYoiE73w31F5dJ8
                            g7bETv1UdbVLh9CixaCME/mDd+9siK/ZrgzBcXpt5RIC5XL6+fNdXVUXL12c+Vx1teOAvYm3Cwnr
                            c13M58+ub5rnt/2zs51UJGVR3ITxvg6DfhvX0VaoInKEWaJyiUfu9IW5orbmhQ6pRYstWFifjhAS
                            RKxQuYSd59mzl9ueFzrkFg1BdJof6IqVy3NV0T7MCz3Voh3at2gIoqO3TuXyVFW0L/NCh9SiIYhO
                            2rqVy49V0b7NC2nRBBH7/kHmzRegV+FnvMbbXIWqqLkzYtypm2Bb/z13YRTWefRtDBBEtNKSxeAI
                            gRFaqFFooVZ+SGFob8bx72MllMUKI02vQiCNwu97/eDDsH6TsK7xK/ORFu1Aq3lDcOAhFOeFBoMm
                            REJ7snZgxPDJB4P/hRbvY6w0siUeB9TqhtzrTcqi+CN5fByRp2cIIna8AzY3m49BtKHqYhx26A/h
                            5eRQQui7EI3t2fusLIflYmHjEETsQvMk1RBCsXJJN/jc+FUfA7QPLVoxn8cWLamzbPhXxYggYntH
                            /7ho5oXyfv+TEflni5aF9qyuqlEcH6MiiNhGCG14XugIQ3oUxui+DhVSqO4mRkQQsZ2j/kbnhY5N
                            bNHCQgAd0mdmCA7LtuaFQEXEa1uOuDAvtEPFbDasyvL3sixff0pAaJ1DSxhb54+heh0ZRUF0PCFk
                            XmjnZg8Pw8Vsdh2C6HzZ85KqoojV6/liOo2fmzASREfyQZkX2qkQPsMQItchUM7rVU6ODH9Tzufn
                            oYq9jidYxrO+jerTzBEdAPNCu1fGAKqq1ULo7yyqk+Y9YkWFIDrolsy8UFsVUVJv6DKR2uUmWrOD
                            DiHzQqiIaP0oYV4IQUSbzAuhNWMvlGX5n7qu/zv78uVoWs0mYOM9jrJs4hNGEO25OFkadthhWVVH
                            dQV5HSeBk+T99PPn28EvvwgjBNFe77Dx6vFjrPKS5k6Qw1gZLabT2+5gIIwwR0Q71V4I2mHl/BpU
                            RLQaRkXRXJMFgoj2gujI5r7QmnGgnHGMioh2hWpIPYQgot1SPF5DpzVDa0brFZEgQhABgghAEAGC
                            CEAQAYIIQBAB+8IJjRysxXR6Hq/gj1fzb1pdVe83cQlKvJ1LVRTvv/7558Wm1/HbQxwneb8/EUTQ
                            gtnDQwyg63g7kW1cs1YXRXNh7rriXQbiOiadznDT6/gtgEfHcF8nQbSE5kzg+ONizVbFKig+/LBc
                            LIbbqIY2Gmjx2WZbWsfqsSqKN5n7I7y8OeTP1BzRMoOVy+092btjdbH3IbQLZai4ivn8ffg5F0Sn
                            EkRp6vqofaiI4m10VaXfHyCbYBZEp9KaPT5fzKN9QBC1J/Tj8TljY7evAEHUbhj1etozEEStV0Xj
                            Tppqz0AQtSfv9Zpn0XdSQweCqN0wUhWBIGq/Ksq6XVURCKJ2dQeDcQijTyauYQMHd0OwYoKn6VU8
                            qzUYlvP5r06wA0HUinhe0d9htFj8Wm/gIkkQRKweRnX9W1j+Fpaqoy3TDv+grifh38lBdxg+xc2E
                            0eDdu8u83x/FeaM0y+wsL4VJvG4vjNNKf5tlkzC+E2P8OI5VWX7Me72RIKLRPzu76r19O+6+edNc
                            qW9HeTa8k7zbXW2jTdO4031MVwyyYxLHIBwADz9Q7RLbE45Ud1VRXMSrxeMtK8whPR7BQ9UYQ/oy
                            HMXv13mvxXR6E8b3ulgsTm5smwDq9eLyNgTRjSCCIzT78qUJuTKE3DpitRIC4zb83BhVrRkgiAAE
                            ESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESzFo6AEEbQuPvIo
                            TdffPWKgbeJ9BBGcZkU0Cv+M1nmIY/O3397HiL4w3oYAfm728HAeFtd1VQ2rJR/gGEMoPpG2TpLb
                            /tnZxGgKIljZYjo9DyF0Hp/Um9T1a8upJItBlGWTvN8XQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAj+L8AAlESIu8wmfX4AAAAASUVO
                            RK5CYII=" transform="matrix(0.5585 0 0 0.5663 61.0222 63.5762)">
                                </image>
                            </svg>
                        </div>
                        <div class="gg-svg mb-2">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.46 283.46" style="enable-background:new 0 0 283.46 283.46;" xml:space="preserve">
                                <image style="overflow:visible;" width="289" height="276" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAAEZCAYAAAAzAyjYAAAACXBIWXMAABPWAAAT1gGxNhB1AAAA
                            GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACntJREFUeNrs3Ylt29gWBmCKpJY4
                            E2A6iDt4U4JdySgdPFdgu5KnVGKXoBI0HQSDONHC5d1LZwaZTLxopZbvAxzKASwQV+TPc664JAkA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAwKnrGILdqMryrq6qi7quk+anqpole7pjdDpJmqbxRdIJy/D7bZplN0ZG
                            EB2UsijuysXioiqKJCyFzhEIQZSkeZ5k3W58fZvluWASRPtpMZ3eFbPZRVmWSSJ8jnfHCVVSHgMp
                            z2+7g4FAEkT7oZjP70IIXYRKSACdWJWU9/uxSlIhCaJ2zR4e7kIQXcR5H05T3us1YaQ6EkStmH7+
                            3MwFCSGEkSASQgijQ25xDcFq4qR0VRRCiH8ILXo8VeO6LApBtEyAG4LlxXOCZg8PF1X8Zgx+EE/X
                            sG2oiLZu/vWrDY3nDlTxBMjrUDWrigTR9qqhuiy1ZDxfFRVFbN8NhCDa3hyAs6R5STxQZd2uuSJB
                            tKUgms0S1RCvbdHigQtBtNkNq6ruQu9/oSLitVVRvNaQl/nWbJkNK2xUQoglDlxJR/WsItq0eCGr
                            IOL1R646yXq930OLNjQYgmijRzhY0nlo0c4NgyDaaM/vynqWL4xsM4Jow6U2IIgAQQQgiABBBCCI
                            AEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABB
                            BCCIAEEEIIgAQQQgiABBBOvrdDpJmmXNEgQRrci63aQ7GIw7WfbJaCCI2P0GFyqhvN8fZ73ehxBI
                            405qE0QQscuWLIRODKHw8kOapuNYFWV5/kmLhiBiNyEUwiZWQHVdf8h7vXGz8aXpVXg90qIhiNiJ
                            OC8Uwuiqf3Y2/v7/Q4V0pUXDp8/2N7Jv80LdN29+Wvlo0RBEbLcl+2Fe6KcboRZNEBkCthZCP5kX
                            eooWTRDBVjw1L/QULdrpyg0BWznC5XnTkoXlq9ut2KIVs1lSVdWwLopfjaKKCFZvyUJ71Q0hFJZP
                            zgudTItW1zYIQcTOQ+i7eaHQZo1XeY9ja9HqqrJhCCJ2GkShJQshdNV782a88kb5+C3aUVRFYSxi
                            q2nDEETssiXrDQZJ/+3btd8rtGiXnSy79y2aIIKlhCoohtFlqGjuN/F+MdDiyZAIIniVbqiEQhty
                            meX5/cY2zhBq3X7/XhgJIo6tfdrCTcnSbjfOg1yGiuh+0+urRRNEHKGwYye9s7NkUzv2JueFtGiC
                            iBMQz3SO7VPe63VCgNxvoira9LyQFk0QccwfdDzJMIRGrIaiOKezblW0jXmhl1o0YSSIOFCx8unG
                            dqzT+btyCVXR5TpV0V/V1TbmhZ5r0cJ6H9xN9107J4h4rCbimXX/qlxWrYp+rK52WNVdhoroNobg
                            wexgoYI7pPUVRGzFX5VLCJ1/VS6rVEU/q652HKo3dZLcHkKLFkO+XCxuwwHgxpYoiE73w31F5dJ8
                            g7bETv1UdbVLh9CixaCME/mDd+9siK/ZrgzBcXpt5RIC5XL6+fNdXVUXL12c+Vx1teOAvYm3Cwnr
                            c13M58+ub5rnt/2zs51UJGVR3ITxvg6DfhvX0VaoInKEWaJyiUfu9IW5orbmhQ6pRYstWFifjhAS
                            RKxQuYSd59mzl9ueFzrkFg1BdJof6IqVy3NV0T7MCz3Voh3at2gIoqO3TuXyVFW0L/NCh9SiIYhO
                            2rqVy49V0b7NC2nRBBH7/kHmzRegV+FnvMbbXIWqqLkzYtypm2Bb/z13YRTWefRtDBBEtNKSxeAI
                            gRFaqFFooVZ+SGFob8bx72MllMUKI02vQiCNwu97/eDDsH6TsK7xK/ORFu1Aq3lDcOAhFOeFBoMm
                            REJ7snZgxPDJB4P/hRbvY6w0siUeB9TqhtzrTcqi+CN5fByRp2cIIna8AzY3m49BtKHqYhx26A/h
                            5eRQQui7EI3t2fusLIflYmHjEETsQvMk1RBCsXJJN/jc+FUfA7QPLVoxn8cWLamzbPhXxYggYntH
                            /7ho5oXyfv+TEflni5aF9qyuqlEcH6MiiNhGCG14XugIQ3oUxui+DhVSqO4mRkQQsZ2j/kbnhY5N
                            bNHCQgAd0mdmCA7LtuaFQEXEa1uOuDAvtEPFbDasyvL3sixff0pAaJ1DSxhb54+heh0ZRUF0PCFk
                            XmjnZg8Pw8Vsdh2C6HzZ85KqoojV6/liOo2fmzASREfyQZkX2qkQPsMQItchUM7rVU6ODH9Tzufn
                            oYq9jidYxrO+jerTzBEdAPNCu1fGAKqq1ULo7yyqk+Y9YkWFIDrolsy8UFsVUVJv6DKR2uUmWrOD
                            DiHzQqiIaP0oYV4IQUSbzAuhNWMvlGX5n7qu/zv78uVoWs0mYOM9jrJs4hNGEO25OFkadthhWVVH
                            dQV5HSeBk+T99PPn28EvvwgjBNFe77Dx6vFjrPKS5k6Qw1gZLabT2+5gIIwwR0Q71V4I2mHl/BpU
                            RLQaRkXRXJMFgoj2gujI5r7QmnGgnHGMioh2hWpIPYQgot1SPF5DpzVDa0brFZEgQhABgghAEAGC
                            CEAQAYIIQBAB+8IJjRysxXR6Hq/gj1fzb1pdVe83cQlKvJ1LVRTvv/7558Wm1/HbQxwneb8/EUTQ
                            gtnDQwyg63g7kW1cs1YXRXNh7rriXQbiOiadznDT6/gtgEfHcF8nQbSE5kzg+ONizVbFKig+/LBc
                            LIbbqIY2Gmjx2WZbWsfqsSqKN5n7I7y8OeTP1BzRMoOVy+092btjdbH3IbQLZai4ivn8ffg5F0Sn
                            EkRp6vqofaiI4m10VaXfHyCbYBZEp9KaPT5fzKN9QBC1J/Tj8TljY7evAEHUbhj1etozEEStV0Xj
                            Tppqz0AQtSfv9Zpn0XdSQweCqN0wUhWBIGq/Ksq6XVURCKJ2dQeDcQijTyauYQMHd0OwYoKn6VU8
                            qzUYlvP5r06wA0HUinhe0d9htFj8Wm/gIkkQRKweRnX9W1j+Fpaqoy3TDv+grifh38lBdxg+xc2E
                            0eDdu8u83x/FeaM0y+wsL4VJvG4vjNNKf5tlkzC+E2P8OI5VWX7Me72RIKLRPzu76r19O+6+edNc
                            qW9HeTa8k7zbXW2jTdO4031MVwyyYxLHIBwADz9Q7RLbE45Ud1VRXMSrxeMtK8whPR7BQ9UYQ/oy
                            HMXv13mvxXR6E8b3ulgsTm5smwDq9eLyNgTRjSCCIzT78qUJuTKE3DpitRIC4zb83BhVrRkgiAAE
                            ESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESzFo6AEEbQuPvIo
                            TdffPWKgbeJ9BBGcZkU0Cv+M1nmIY/O3397HiL4w3oYAfm728HAeFtd1VQ2rJR/gGEMoPpG2TpLb
                            /tnZxGgKIljZYjo9DyF0Hp/Um9T1a8upJItBlGWTvN8XQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAj+L8AAlESIu8wmfX4AAAAASUVO
                            RK5CYII=" transform="matrix(0.5585 0 0 0.5663 61.0222 63.5762)">
                                </image>
                            </svg>
                        </div>
                        <div class="gg-svg">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.46 283.46" style="enable-background:new 0 0 283.46 283.46;" xml:space="preserve">
                                <image style="overflow:visible;" width="289" height="276" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAAEZCAYAAAAzAyjYAAAACXBIWXMAABPWAAAT1gGxNhB1AAAA
                            GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACntJREFUeNrs3Ylt29gWBmCKpJY4
                            E2A6iDt4U4JdySgdPFdgu5KnVGKXoBI0HQSDONHC5d1LZwaZTLxopZbvAxzKASwQV+TPc664JAkA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAwKnrGILdqMryrq6qi7quk+anqpole7pjdDpJmqbxRdIJy/D7bZplN0ZG
                            EB2UsijuysXioiqKJCyFzhEIQZSkeZ5k3W58fZvluWASRPtpMZ3eFbPZRVmWSSJ8jnfHCVVSHgMp
                            z2+7g4FAEkT7oZjP70IIXYRKSACdWJWU9/uxSlIhCaJ2zR4e7kIQXcR5H05T3us1YaQ6EkStmH7+
                            3MwFCSGEkSASQgijQ25xDcFq4qR0VRRCiH8ILXo8VeO6LApBtEyAG4LlxXOCZg8PF1X8Zgx+EE/X
                            sG2oiLZu/vWrDY3nDlTxBMjrUDWrigTR9qqhuiy1ZDxfFRVFbN8NhCDa3hyAs6R5STxQZd2uuSJB
                            tKUgms0S1RCvbdHigQtBtNkNq6ruQu9/oSLitVVRvNaQl/nWbJkNK2xUQoglDlxJR/WsItq0eCGr
                            IOL1R646yXq930OLNjQYgmijRzhY0nlo0c4NgyDaaM/vynqWL4xsM4Jow6U2IIgAQQQgiABBBCCI
                            AEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABB
                            BCCIAEEEIIgAQQQgiABBBOvrdDpJmmXNEgQRrci63aQ7GIw7WfbJaCCI2P0GFyqhvN8fZ73ehxBI
                            405qE0QQscuWLIRODKHw8kOapuNYFWV5/kmLhiBiNyEUwiZWQHVdf8h7vXGz8aXpVXg90qIhiNiJ
                            OC8Uwuiqf3Y2/v7/Q4V0pUXDp8/2N7Jv80LdN29+Wvlo0RBEbLcl+2Fe6KcboRZNEBkCthZCP5kX
                            eooWTRDBVjw1L/QULdrpyg0BWznC5XnTkoXlq9ut2KIVs1lSVdWwLopfjaKKCFZvyUJ71Q0hFJZP
                            zgudTItW1zYIQcTOQ+i7eaHQZo1XeY9ja9HqqrJhCCJ2GkShJQshdNV782a88kb5+C3aUVRFYSxi
                            q2nDEETssiXrDQZJ/+3btd8rtGiXnSy79y2aIIKlhCoohtFlqGjuN/F+MdDiyZAIIniVbqiEQhty
                            meX5/cY2zhBq3X7/XhgJIo6tfdrCTcnSbjfOg1yGiuh+0+urRRNEHKGwYye9s7NkUzv2JueFtGiC
                            iBMQz3SO7VPe63VCgNxvoira9LyQFk0QccwfdDzJMIRGrIaiOKezblW0jXmhl1o0YSSIOFCx8unG
                            dqzT+btyCVXR5TpV0V/V1TbmhZ5r0cJ6H9xN9107J4h4rCbimXX/qlxWrYp+rK52WNVdhoroNobg
                            wexgoYI7pPUVRGzFX5VLCJ1/VS6rVEU/q652HKo3dZLcHkKLFkO+XCxuwwHgxpYoiE73w31F5dJ8
                            g7bETv1UdbVLh9CixaCME/mDd+9siK/ZrgzBcXpt5RIC5XL6+fNdXVUXL12c+Vx1teOAvYm3Cwnr
                            c13M58+ub5rnt/2zs51UJGVR3ITxvg6DfhvX0VaoInKEWaJyiUfu9IW5orbmhQ6pRYstWFifjhAS
                            RKxQuYSd59mzl9ueFzrkFg1BdJof6IqVy3NV0T7MCz3Voh3at2gIoqO3TuXyVFW0L/NCh9SiIYhO
                            2rqVy49V0b7NC2nRBBH7/kHmzRegV+FnvMbbXIWqqLkzYtypm2Bb/z13YRTWefRtDBBEtNKSxeAI
                            gRFaqFFooVZ+SGFob8bx72MllMUKI02vQiCNwu97/eDDsH6TsK7xK/ORFu1Aq3lDcOAhFOeFBoMm
                            REJ7snZgxPDJB4P/hRbvY6w0siUeB9TqhtzrTcqi+CN5fByRp2cIIna8AzY3m49BtKHqYhx26A/h
                            5eRQQui7EI3t2fusLIflYmHjEETsQvMk1RBCsXJJN/jc+FUfA7QPLVoxn8cWLamzbPhXxYggYntH
                            /7ho5oXyfv+TEflni5aF9qyuqlEcH6MiiNhGCG14XugIQ3oUxui+DhVSqO4mRkQQsZ2j/kbnhY5N
                            bNHCQgAd0mdmCA7LtuaFQEXEa1uOuDAvtEPFbDasyvL3sixff0pAaJ1DSxhb54+heh0ZRUF0PCFk
                            XmjnZg8Pw8Vsdh2C6HzZ85KqoojV6/liOo2fmzASREfyQZkX2qkQPsMQItchUM7rVU6ODH9Tzufn
                            oYq9jidYxrO+jerTzBEdAPNCu1fGAKqq1ULo7yyqk+Y9YkWFIDrolsy8UFsVUVJv6DKR2uUmWrOD
                            DiHzQqiIaP0oYV4IQUSbzAuhNWMvlGX5n7qu/zv78uVoWs0mYOM9jrJs4hNGEO25OFkadthhWVVH
                            dQV5HSeBk+T99PPn28EvvwgjBNFe77Dx6vFjrPKS5k6Qw1gZLabT2+5gIIwwR0Q71V4I2mHl/BpU
                            RLQaRkXRXJMFgoj2gujI5r7QmnGgnHGMioh2hWpIPYQgot1SPF5DpzVDa0brFZEgQhABgghAEAGC
                            CEAQAYIIQBAB+8IJjRysxXR6Hq/gj1fzb1pdVe83cQlKvJ1LVRTvv/7558Wm1/HbQxwneb8/EUTQ
                            gtnDQwyg63g7kW1cs1YXRXNh7rriXQbiOiadznDT6/gtgEfHcF8nQbSE5kzg+ONizVbFKig+/LBc
                            LIbbqIY2Gmjx2WZbWsfqsSqKN5n7I7y8OeTP1BzRMoOVy+092btjdbH3IbQLZai4ivn8ffg5F0Sn
                            EkRp6vqofaiI4m10VaXfHyCbYBZEp9KaPT5fzKN9QBC1J/Tj8TljY7evAEHUbhj1etozEEStV0Xj
                            Tppqz0AQtSfv9Zpn0XdSQweCqN0wUhWBIGq/Ksq6XVURCKJ2dQeDcQijTyauYQMHd0OwYoKn6VU8
                            qzUYlvP5r06wA0HUinhe0d9htFj8Wm/gIkkQRKweRnX9W1j+Fpaqoy3TDv+grifh38lBdxg+xc2E
                            0eDdu8u83x/FeaM0y+wsL4VJvG4vjNNKf5tlkzC+E2P8OI5VWX7Me72RIKLRPzu76r19O+6+edNc
                            qW9HeTa8k7zbXW2jTdO4031MVwyyYxLHIBwADz9Q7RLbE45Ud1VRXMSrxeMtK8whPR7BQ9UYQ/oy
                            HMXv13mvxXR6E8b3ulgsTm5smwDq9eLyNgTRjSCCIzT78qUJuTKE3DpitRIC4zb83BhVrRkgiAAE
                            ESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESzFo6AEEbQuPvIo
                            TdffPWKgbeJ9BBGcZkU0Cv+M1nmIY/O3397HiL4w3oYAfm728HAeFtd1VQ2rJR/gGEMoPpG2TpLb
                            /tnZxGgKIljZYjo9DyF0Hp/Um9T1a8upJItBlGWTvN8XQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAj+L8AAlESIu8wmfX4AAAAASUVO
                            RK5CYII=" transform="matrix(0.5585 0 0 0.5663 61.0222 63.5762)">
                                </image>
                            </svg>
                        </div>
                        <div class="gg-svg">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.46 283.46" style="enable-background:new 0 0 283.46 283.46;" xml:space="preserve">
                                <image style="overflow:visible;" width="289" height="276" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAAEZCAYAAAAzAyjYAAAACXBIWXMAABPWAAAT1gGxNhB1AAAA
                            GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACntJREFUeNrs3Ylt29gWBmCKpJY4
                            E2A6iDt4U4JdySgdPFdgu5KnVGKXoBI0HQSDONHC5d1LZwaZTLxopZbvAxzKASwQV+TPc664JAkA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAwKnrGILdqMryrq6qi7quk+anqpole7pjdDpJmqbxRdIJy/D7bZplN0ZG
                            EB2UsijuysXioiqKJCyFzhEIQZSkeZ5k3W58fZvluWASRPtpMZ3eFbPZRVmWSSJ8jnfHCVVSHgMp
                            z2+7g4FAEkT7oZjP70IIXYRKSACdWJWU9/uxSlIhCaJ2zR4e7kIQXcR5H05T3us1YaQ6EkStmH7+
                            3MwFCSGEkSASQgijQ25xDcFq4qR0VRRCiH8ILXo8VeO6LApBtEyAG4LlxXOCZg8PF1X8Zgx+EE/X
                            sG2oiLZu/vWrDY3nDlTxBMjrUDWrigTR9qqhuiy1ZDxfFRVFbN8NhCDa3hyAs6R5STxQZd2uuSJB
                            tKUgms0S1RCvbdHigQtBtNkNq6ruQu9/oSLitVVRvNaQl/nWbJkNK2xUQoglDlxJR/WsItq0eCGr
                            IOL1R646yXq930OLNjQYgmijRzhY0nlo0c4NgyDaaM/vynqWL4xsM4Jow6U2IIgAQQQgiABBBCCI
                            AEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABBBCCIAEEEIIgAQQQgiABB
                            BCCIAEEEIIgAQQQgiABBBOvrdDpJmmXNEgQRrci63aQ7GIw7WfbJaCCI2P0GFyqhvN8fZ73ehxBI
                            405qE0QQscuWLIRODKHw8kOapuNYFWV5/kmLhiBiNyEUwiZWQHVdf8h7vXGz8aXpVXg90qIhiNiJ
                            OC8Uwuiqf3Y2/v7/Q4V0pUXDp8/2N7Jv80LdN29+Wvlo0RBEbLcl+2Fe6KcboRZNEBkCthZCP5kX
                            eooWTRDBVjw1L/QULdrpyg0BWznC5XnTkoXlq9ut2KIVs1lSVdWwLopfjaKKCFZvyUJ71Q0hFJZP
                            zgudTItW1zYIQcTOQ+i7eaHQZo1XeY9ja9HqqrJhCCJ2GkShJQshdNV782a88kb5+C3aUVRFYSxi
                            q2nDEETssiXrDQZJ/+3btd8rtGiXnSy79y2aIIKlhCoohtFlqGjuN/F+MdDiyZAIIniVbqiEQhty
                            meX5/cY2zhBq3X7/XhgJIo6tfdrCTcnSbjfOg1yGiuh+0+urRRNEHKGwYye9s7NkUzv2JueFtGiC
                            iBMQz3SO7VPe63VCgNxvoira9LyQFk0QccwfdDzJMIRGrIaiOKezblW0jXmhl1o0YSSIOFCx8unG
                            dqzT+btyCVXR5TpV0V/V1TbmhZ5r0cJ6H9xN9107J4h4rCbimXX/qlxWrYp+rK52WNVdhoroNobg
                            wexgoYI7pPUVRGzFX5VLCJ1/VS6rVEU/q652HKo3dZLcHkKLFkO+XCxuwwHgxpYoiE73w31F5dJ8
                            g7bETv1UdbVLh9CixaCME/mDd+9siK/ZrgzBcXpt5RIC5XL6+fNdXVUXL12c+Vx1teOAvYm3Cwnr
                            c13M58+ub5rnt/2zs51UJGVR3ITxvg6DfhvX0VaoInKEWaJyiUfu9IW5orbmhQ6pRYstWFifjhAS
                            RKxQuYSd59mzl9ueFzrkFg1BdJof6IqVy3NV0T7MCz3Voh3at2gIoqO3TuXyVFW0L/NCh9SiIYhO
                            2rqVy49V0b7NC2nRBBH7/kHmzRegV+FnvMbbXIWqqLkzYtypm2Bb/z13YRTWefRtDBBEtNKSxeAI
                            gRFaqFFooVZ+SGFob8bx72MllMUKI02vQiCNwu97/eDDsH6TsK7xK/ORFu1Aq3lDcOAhFOeFBoMm
                            REJ7snZgxPDJB4P/hRbvY6w0siUeB9TqhtzrTcqi+CN5fByRp2cIIna8AzY3m49BtKHqYhx26A/h
                            5eRQQui7EI3t2fusLIflYmHjEETsQvMk1RBCsXJJN/jc+FUfA7QPLVoxn8cWLamzbPhXxYggYntH
                            /7ho5oXyfv+TEflni5aF9qyuqlEcH6MiiNhGCG14XugIQ3oUxui+DhVSqO4mRkQQsZ2j/kbnhY5N
                            bNHCQgAd0mdmCA7LtuaFQEXEa1uOuDAvtEPFbDasyvL3sixff0pAaJ1DSxhb54+heh0ZRUF0PCFk
                            XmjnZg8Pw8Vsdh2C6HzZ85KqoojV6/liOo2fmzASREfyQZkX2qkQPsMQItchUM7rVU6ODH9Tzufn
                            oYq9jidYxrO+jerTzBEdAPNCu1fGAKqq1ULo7yyqk+Y9YkWFIDrolsy8UFsVUVJv6DKR2uUmWrOD
                            DiHzQqiIaP0oYV4IQUSbzAuhNWMvlGX5n7qu/zv78uVoWs0mYOM9jrJs4hNGEO25OFkadthhWVVH
                            dQV5HSeBk+T99PPn28EvvwgjBNFe77Dx6vFjrPKS5k6Qw1gZLabT2+5gIIwwR0Q71V4I2mHl/BpU
                            RLQaRkXRXJMFgoj2gujI5r7QmnGgnHGMioh2hWpIPYQgot1SPF5DpzVDa0brFZEgQhABgghAEAGC
                            CEAQAYIIQBAB+8IJjRysxXR6Hq/gj1fzb1pdVe83cQlKvJ1LVRTvv/7558Wm1/HbQxwneb8/EUTQ
                            gtnDQwyg63g7kW1cs1YXRXNh7rriXQbiOiadznDT6/gtgEfHcF8nQbSE5kzg+ONizVbFKig+/LBc
                            LIbbqIY2Gmjx2WZbWsfqsSqKN5n7I7y8OeTP1BzRMoOVy+092btjdbH3IbQLZai4ivn8ffg5F0Sn
                            EkRp6vqofaiI4m10VaXfHyCbYBZEp9KaPT5fzKN9QBC1J/Tj8TljY7evAEHUbhj1etozEEStV0Xj
                            Tppqz0AQtSfv9Zpn0XdSQweCqN0wUhWBIGq/Ksq6XVURCKJ2dQeDcQijTyauYQMHd0OwYoKn6VU8
                            qzUYlvP5r06wA0HUinhe0d9htFj8Wm/gIkkQRKweRnX9W1j+Fpaqoy3TDv+grifh38lBdxg+xc2E
                            0eDdu8u83x/FeaM0y+wsL4VJvG4vjNNKf5tlkzC+E2P8OI5VWX7Me72RIKLRPzu76r19O+6+edNc
                            qW9HeTa8k7zbXW2jTdO4031MVwyyYxLHIBwADz9Q7RLbE45Ud1VRXMSrxeMtK8whPR7BQ9UYQ/oy
                            HMXv13mvxXR6E8b3ulgsTm5smwDq9eLyNgTRjSCCIzT78qUJuTKE3DpitRIC4zb83BhVrRkgiAAE
                            ESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESCIAAQRIIgABBEgiAAEESzFo6AEEbQuPvIo
                            TdffPWKgbeJ9BBGcZkU0Cv+M1nmIY/O3397HiL4w3oYAfm728HAeFtd1VQ2rJR/gGEMoPpG2TpLb
                            /tnZxGgKIljZYjo9DyF0Hp/Um9T1a8upJItBlGWTvN8XQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAj+L8AAlESIu8wmfX4AAAAASUVO
                            RK5CYII=" transform="matrix(0.5585 0 0 0.5663 61.0222 63.5762)">
                                </image>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="gg-date-title d-flex gg-flex-col ">
                    <div class="d-flex align-items-center gg-date-tb">
                        <p class="pc-middle-title-20 text-pink gg-pstitle gg-mr10">聚會人數</p>
                    </div>
                    <div class="d-flex flex-wrap">
                        <input type="number" name="member" id="member" placeholder="輸入參加人數" step="1" min="2"
                        max="20" class="gg-date-tb1 gg-mr-10">
                        <div class="d-flex align-items-center gg-date-tb">
                            <div class="btn-pc-white mr-2">雙人</div>
                            <div class="btn-pc-orange">多人</div>
                        </div>
                    </div>
                    
                </div>
                <div class="d-flex gg-flex-col">
                    <div class="d-flex align-items-center gg-date-tb">
                        <p class="pc-middle-title-20 text-pink gg-pstitle gg-mr10">聚會名稱</p>
                    </div>
                    <input type="text" name="name" id="name" placeholder="輸入聚會名稱" class="gg-date-tb1 gg-mr10">
                </div>
                <div class="gg-mb50 d-flex gg-flex-col flex-wrap">
                    <div class="d-flex align-items-center gg-date-tb">
                        <p class="pc-middle-title-20 text-pink gg-pstitle gg-mr10">聚會內容</p>
                    </div>
                    <textarea id="detail" name="detail" rows="4" cols="50" placeholder="輸入聚會內容"></textarea>
                </div>
                <div class="d-flex gg-flex-col">
                    <div class="d-flex align-items-center gg-date-tb">
                        <p class="pc-middle-title-20 text-pink gg-pstitle gg-mr10">開始時間</p>
                    </div>
                    <input type="datetime-local" name="date" id="start-date" placeholder="輸入開始時間" class="gg-date-tb1 gg-mr10">
                </div>
                <div class="d-flex gg-flex-col">
                    <div class="d-flex align-items-center gg-date-tb">
                        <p class="pc-middle-title-20 text-pink gg-pstitle gg-mr10">結束時間</p>
                    </div>
                    <input type="datetime-local" name="date" id="end-date" placeholder="輸入結束時間" class="gg-date-tb1 gg-mr10">
                </div>
                <div class="d-flex gg-flex-col">
                    <div class="d-flex align-items-center gg-date-tb">
                        <p class="pc-middle-title-20 text-pink gg-pstitle gg-mr10">審核時間</p>
                    </div>
                    <input type="datetime-local" name="date" id="date-line" placeholder="輸入審核期限" class="gg-date-tb1 gg-mr10">
                </div>
                <div class=" gg-mb50">
                    <div class="d-flex flex-wrap gg-flex-col">
                        <p class="pc-middle-title-20 text-pink gg-date-tb1 gg-pstitle gg-mr10">選擇地點</p>
                        <div class="d-flex">
                            <input type="text" name="map" id="map" placeholder="輸入地點" class="gg-date-tb1">
                            <div class="d-flex">
                                <div class="gg-circle-white d-flex gg-date-tb1"><i class="fa-solid fa-magnifying-glass"></i></div>
                                <div class="btn-pc-orange gg-date-tb1">確認</div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="gg-time-page"></div>
                </div>
                <div class="d-flex">
                    <div class="d-flex align-items-center gg-date-tb">
                        <p class="pc-middle-title-20 text-pink gg-pstitle">用餐需求</p>
                    </div>
                    <div class="toggle-btn active">
                        <input type="checkbox"  checked class="cb-value" />
                        <span class="round-btn"></span>
                    </div>
                </div>
                <div class="gg-food-need">
                    <div class="d-flex gg-flex-col">
                        <div class="d-flex align-items-center gg-date-tb">
                            <p class="pc-middle-title-20 text-pink gg-pstitle">用餐餐費</p>
                        </div>
                        <div class="gg-food-money">
                            <div id="selections">
                                <label class="selectBox">
                                <select>
                                    <option>各付各的</option>
                                    <option>平均分攤</option>
                                    <option>我請客</option>
                                    <option>你買單</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gg-flex-col">
                        <div class="d-flex align-items-center gg-date-tb">
                            <p class="pc-middle-title-20 text-pink gg-pstitle gg-mr10">用餐預算</p>
                        </div>
                        <input type="number" name="money" id="money" placeholder="每人平均費用(台幣)" step="50"
                        min="0"
                        max="10000" class="gg-date-tb1 gg-mr10">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <p class="pc-middle-title-20 text-pink gg-pstitle">推廣模式
                            </p>
                        </div>
                        <div class="toggle-btn">
                            <input type="checkbox"  checked class="money-need" />
                            <span class="round-btn"></span>
                        </div>
                    </div>
                    
                    <p class="pc-regular-text-16 ml-2 text-hint gg-option">5金鑰即可享有發燒置頂</p>
                </div>
                <div class="d-flex gg-date-title justify-content-center gg-mbb50 gg-mt50">
                    <div class="btn-pc-big-white gg-mr50 gg-send-card">聚會預覽</div>
                    <div class="btn-pc-big-orange">建立聚會</div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/parts/scripts-bg.php' ?>


    <script>
        $('.cb-value').click(function() {
        var mainParent = $(this).parent('.toggle-btn');
        if($(mainParent).find('input.cb-value').is(':checked')) {
            $(mainParent).addClass('active');
            $('.gg-food-need').css('display','block');
        } else {
            $(mainParent).removeClass('active');
            $('.gg-food-need').css('display','none');
        }

        })
    </script>
    <script>
        $('.money-need').click(function() {
        var mainParent = $(this).parent('.toggle-btn');
        if($(mainParent).find('input.money-need').is(':checked')) {
            $(mainParent).addClass('active');
        } else {
            $(mainParent).removeClass('active');
        }

        })
    <script>
        function opencard(){
            console.log(this,'1');
            if($('.gg-card').hasClass('active')){
                $('.gg-blur').css('display','none');
                $('.gg-card').removeClass('active');
            }else{
            $('.gg-card').addClass('active');
            $('.gg-blur').css('display','block');
            }
        }
        $('.gg-send-card').click(function(){
            opencard();
        })
        $('.gg-icon').click(function(){
            opencard();
        })    
            
    </script>
    <script></script>
<?php include __DIR__ . '/parts/html-foot.php' ?>
