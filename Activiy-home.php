<?php
session_start();
$pageName = 'Activity';
$title = 'Mate';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>
    <style>
        body {
        background-color: rgb(163, 163, 163);
        min-width: 375px;
    }

    div,
    p {
        margin-bottom: 0px;
    }

    .page {
        width: 100%;
        height: 100%;
    }

    .left-nav {
        width: 316px;
        min-width: 316px;
        background-color: rgb(119, 196, 255);
        height: 100vh;
    }

    .right-content {
        background-color: rgb(183, 115, 246);
    }

    .content {
        width: 80%;
        max-width: 904px;
        margin-top: 110px;
        /*待討論*/
        background-color: rgb(29, 36, 88);
        overflow: hidden;
    }
    .gg-ac-top{
        width: 100%;
        height: 370px;
    }
    .gg-ac-top-img{
        width: 100%;
        height: 370px;
        text-align: end;
        padding: 20px;
        background-image: url(https://img.technews.tw/wp-content/uploads/2021/11/01175505/3381-e1635760577714.jpg);
        background-color: rgba(135, 135, 135, 0.6);
        background-blend-mode: multiply;
        background-size: cover;
        background-position: center center;
    }
    .gg-ac-middle{
        display: flex;
        justify-content:space-between;
        align-items: end;
        border-bottom: 3px solid #F4EDED;
        padding-bottom: 15px;
        margin-bottom: 36px;
    }    
    .gg-ac-btn, .gg-ac-btn1{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 148px;
        height: 45px;
        padding:5px 15px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 30px;
    }
    .fa-circle-pause , .fa-filter{
        font-size:25px;
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
    }
    .gg-ac-card{
        display: flex;
        flex-direction: column;
        width: 30%;
        height: 385px;
        margin-bottom: 36px;
        background: rgba(255, 255, 255, 0.3);
        color:#F4EDED;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
    }
    .gg-card-image{
        background-image: url(https://i.beauty321.com/816x/https://il.beauty321.com/gallery/articleIMG/AL_47841.jpg?t=20220502123512);
        background-size: cover;
        background-position: center center;
        background-color: rgba(135, 135, 135, 0.6);
        background-blend-mode: multiply;
        width: 100%;
        height: 240px;
        
    }
    .gg-ac-tag{
        position: absolute;
        width: 75px;
        height: 35px;
        background: linear-gradient(45deg, #F66F40, #FFD38D);
        right:0;
        top:20px;
    }
    .fa-fire-flame-curved{
        font-size: 28px;
        color: #F4EDED;
    }
    .gg-ac-head{
        width: 36px;
        height: 36px;
        border-radius: 20px;
        background-image: url(https://www.mirrormedia.com.tw/assets/images/20190304160702-e1b22eec7a81c14d6d7370b0189de756-mobile.jpg);
        background-size: cover;
        background-position: center center;
    }
    .gg-ac-name{
        display: flex;
    }
    .gg-ac-head1{
        display: none;
        position: absolute;
        width: 36px;
        height: 36px;
        border-radius: 20px;
        background-image: url(https://www.mirrormedia.com.tw/assets/images/20190304160702-e1b22eec7a81c14d6d7370b0189de756-mobile.jpg);
        background-size: cover;
        background-position: center center;
        right:15px;
        bottom:15px;
    }
    @media screen and (max-width:1280px){
        .gg-ac-card{
        width: 46%;
        height: 385px;
    }
        .gg-ac-dn{
            display: none;
    }
    .gg-ac-btn1{
        width: 45px;
        height: 45px;
        padding:10px 10px 0;
    }
    }
    @media screen and (max-width:960px){
        .left-nav{
            display: none;
        }
        .content{
            width: 90%;
            min-width: 335px;
            margin-top: 0px;
        }
        
        .gg-ac-dn1{
            display: none;
    }
        .gg-mtitle{
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
        .gg-ac-middle{
        padding-bottom: 15px;
        margin-bottom: 20px;
    }    
        .gg-ac-card{
        flex-direction: row;
        width: 100%;
        height:120px;
        margin-bottom: 20px;
    }
    .gg-card-image{
        width: 120px;
        height:120px;
    }
        .btn-tag1{
        width: max-content;
        height: 22px;
        padding: 8px 14px 4px;
        border-radius: 20px;
        color:#F4EDED;
        background-color: rgba(255, 255, 255, 0.3);
        font-weight: 700;
        font-size: 12px;
        line-height: 6px;
        letter-spacing: 2.5px;
    }
    .gg-ac-btn{
        width: 90px;
        height: 30px;
        padding:5px;
    }
    .gg-ac-btn1{
        width: 30px;
        height: 30px;
        padding:0 5px;
    }
    .fa-circle-pause , .fa-filter{
        font-size:20px;
    }
    .gg-ac-pd1{
        padding-bottom: 5px;
    }
    .gg-ac-head1{
        display: block;
    }
    }
    @media screen and (max-width:540px){
        .gg-ac-top{
            height: 216px;
            border-radius: 10px;
            overflow: hidden;
        }
        .gg-ac-top-img{
            width: 100%;
            height: 216px;
            border-radius: 10px;
            overflow: hidden;
        }
        .gg-smallt{
                font-weight: 400;
                font-size: 12px;
                line-height: 22px;
                letter-spacing: 2.5px;
            }
    .gg-smalltle{
        font-size: 16px;
        line-height: 16px;
        font-weight: 700;
        letter-spacing: 2.5px;
    }
    .gg-ac-card{
        height:90px;
        margin-bottom: 20px;
    }
    .gg-card-image{
        width: 90px;
        height:90px;
    }
    .gg-ac-tag{
        width: 55px;
        height: 20px;
        top:20px;
    }
    .fa-fire-flame-curved{
        font-size: 16px;
    }
    .gg-option1{
            font-size: 12px;
            line-height: 15px;
            font-weight: 700;
            letter-spacing: 2.5px;
        }
        .gg-ac-tag{
            top:10px;
        }
    }
    </style> 
<?php include __DIR__ . '/parts/general-bg.php' ?>

<?php include __DIR__ . '/parts/navbar.php' ?>

    <div class="page d-flex ">
        <div class="left-nav"></div>
        <div class="right-content flex-grow-1 d-flex justify-content-center">
            <div class="content">
                <div class="gg-ac-top">
                    <div class="gg-ac-top-img d-flex justify-content-end flex-column align-items-end">
                        <p class="pc-title-32 text-pink gg-mtitle">新北之夜-元宇宙交流會</p>
                        <p class="pc-middle-title-20 text-pink gg-option">台北市大安區農會大樓<br>2022/05/05(四) 14:00~17:00</p>
                    </div>
                </div>
                <div class="gg-ac-middle">
                    <div class="gg-ac-choose d-flex align-items-end">
                        <p class="pc-title-32 text-pink gg-mtitle gg-ac-pd1">最新聚會</p>
                        <div class="btn-pc-white mr-1 mb-1 btn-tag1">雙人</div>
                        <div class="btn-pc-orange mb-1 btn-tag1">多人</div>
                    </div>
                    <div class="gg-ac-select d-flex pt-3">
                        <div class="gg-ac-btn mr-1">
                            <i class="fa-regular fa-circle-pause"></i>
                            <p class="pc-small-title-16 text-pink gg-option">建立聚會</p>
                        </div>
                        <div class="gg-ac-btn1">
                            <i class="fa-solid fa-filter"></i>
                            <p class="pc-small-title-16 text-pink gg-ac-dn">條件篩選</p>
                        </div>
                    </div>
                </div>
                <div class="gg-ac-card-section d-flex flex-wrap justify-content-between">
                    <div class="gg-ac-card ">
                        <div class="gg-card-image">
                            <div class="gg-ac-tag d-flex px-1 justify-content-between">
                                <i class="fa-solid fa-fire-flame-curved"></i>
                                <p class="pc-middle-title-20 text-blue gg-option1">200</p>
                            </div>
                        </div>
                        <div class="p-1 d-flex flex-column justify-content-around">
                            <p class="pc-middle-title-20 mb-1 gg-smalltle">投影機交流-選擇困難</p>
                            <p class="pc-regular-text-16 gg-smallt">光華商場</p>
                            <p class="pc-regular-text-16 mb-1 gg-smallt">4月15日(五)，12:00</p>
                            <div class="gg-ac-name gg-ac-dn1">
                                <div class="gg-ac-head mr-1"></div>
                                <p class="pc-regular-text-16">我阿林啦</p>
                            </div>
                            <div class="gg-ac-head1 mr-1"></div>
                        </div>
                    </div>
                    <div class="gg-ac-card ">
                        <div class="gg-card-image">
                            <div class="gg-ac-tag d-flex px-1 justify-content-between">
                                <i class="fa-solid fa-fire-flame-curved"></i>
                                <p class="pc-middle-title-20 text-blue gg-option1">200</p>
                            </div>
                        </div>
                        <div class="p-1 d-flex flex-column justify-content-around">
                            <p class="pc-middle-title-20 mb-1 gg-smalltle">投影機交流-選擇困難</p>
                            <p class="pc-regular-text-16 gg-smallt">光華商場</p>
                            <p class="pc-regular-text-16 mb-1 gg-smallt">4月15日(五)，12:00</p>
                            <div class="gg-ac-name gg-ac-dn1">
                                <div class="gg-ac-head mr-1"></div>
                                <p class="pc-regular-text-16">我阿林啦</p>
                            </div>
                            <div class="gg-ac-head1 mr-1"></div>
                        </div>
                    </div>
                    <div class="gg-ac-card ">
                        <div class="gg-card-image">
                            <div class="gg-ac-tag d-flex px-1 justify-content-between">
                                <i class="fa-solid fa-fire-flame-curved"></i>
                                <p class="pc-middle-title-20 text-blue gg-option1">200</p>
                            </div>
                        </div>
                        <div class="p-1 d-flex flex-column justify-content-around">
                            <p class="pc-middle-title-20 mb-1 gg-smalltle">投影機交流-選擇困難</p>
                            <p class="pc-regular-text-16 gg-smallt">光華商場</p>
                            <p class="pc-regular-text-16 mb-1 gg-smallt">4月15日(五)，12:00</p>
                            <div class="gg-ac-name gg-ac-dn1">
                                <div class="gg-ac-head mr-1"></div>
                                <p class="pc-regular-text-16">我阿林啦</p>
                            </div>
                            <div class="gg-ac-head1 mr-1"></div>
                        </div>
                    </div>
                    <div class="gg-ac-card ">
                        <div class="gg-card-image">
                            <div class="gg-ac-tag d-flex px-1 justify-content-between">
                                <i class="fa-solid fa-fire-flame-curved"></i>
                                <p class="pc-middle-title-20 text-blue gg-option1">200</p>
                            </div>
                        </div>
                        <div class="p-1 d-flex flex-column justify-content-around">
                            <p class="pc-middle-title-20 mb-1 gg-smalltle">投影機交流-選擇困難</p>
                            <p class="pc-regular-text-16 gg-smallt">光華商場</p>
                            <p class="pc-regular-text-16 mb-1 gg-smallt">4月15日(五)，12:00</p>
                            <div class="gg-ac-name gg-ac-dn1">
                                <div class="gg-ac-head mr-1"></div>
                                <p class="pc-regular-text-16">我阿林啦</p>
                            </div>
                            <div class="gg-ac-head1 mr-1"></div>
                        </div>
                    </div>
                    <div class="gg-ac-card ">
                        <div class="gg-card-image">
                            <div class="gg-ac-tag d-flex px-1 justify-content-between">
                                <i class="fa-solid fa-fire-flame-curved"></i>
                                <p class="pc-middle-title-20 text-blue gg-option1">200</p>
                            </div>
                        </div>
                        <div class="p-1 d-flex flex-column justify-content-around">
                            <p class="pc-middle-title-20 mb-1 gg-smalltle">投影機交流-選擇困難</p>
                            <p class="pc-regular-text-16 gg-smallt">光華商場</p>
                            <p class="pc-regular-text-16 mb-1 gg-smallt">4月15日(五)，12:00</p>
                            <div class="gg-ac-name gg-ac-dn1">
                                <div class="gg-ac-head mr-1"></div>
                                <p class="pc-regular-text-16">我阿林啦</p>
                            </div>
                            <div class="gg-ac-head1 mr-1"></div>
                        </div>
                    </div>
                    <div class="gg-ac-card ">
                        <div class="gg-card-image">
                            <div class="gg-ac-tag d-flex px-1 justify-content-between">
                                <i class="fa-solid fa-fire-flame-curved"></i>
                                <p class="pc-middle-title-20 text-blue gg-option1">200</p>
                            </div>
                        </div>
                        <div class="p-1 d-flex flex-column justify-content-around">
                            <p class="pc-middle-title-20 mb-1 gg-smalltle">投影機交流-選擇困難</p>
                            <p class="pc-regular-text-16 gg-smallt">光華商場</p>
                            <p class="pc-regular-text-16 mb-1 gg-smallt">4月15日(五)，12:00</p>
                            <div class="gg-ac-name gg-ac-dn1">
                                <div class="gg-ac-head mr-1"></div>
                                <p class="pc-regular-text-16">我阿林啦</p>
                            </div>
                            <div class="gg-ac-head1 mr-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include __DIR__ . '/parts/scripts-bg.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>