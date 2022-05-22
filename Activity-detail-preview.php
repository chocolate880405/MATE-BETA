<?php
session_start();
$pageName = 'activity-preview';
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
    .title{
        margin-bottom: 25px;
    }
    .gg-lh20{
        line-height: 20px;
    }
    .gg-acd-card{
        width: 100%;
        height: 326px;
        padding: 40px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.3);
        display: flex;
        justify-content: space-between;
        flex-direction: row-reverse;
    }
    .gg-acd-img{
        width: 40%;
        height: 95%;
        background-image: url(https://i.beauty321.com/816x/https://il.beauty321.com/gallery/articleIMG/AL_47841.jpg?t=20220502123512);
        background-size: cover;
        background-position: center center;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .fa-house, .fa-location-dot,.fa-phone{
        font-size: 20px;
        color: #F4EDED;
    }
    .gg-ac-head{
        width: 50px;
        height: 50px;
        border-radius: 30px;
        background-image: url(https://www.mirrormedia.com.tw/assets/images/20190304160702-e1b22eec7a81c14d6d7370b0189de756-mobile.jpg);
        background-size: cover;
        background-position: center center;
    }
    .gg-acd-text{
        width: 100%;
        height: 150px;
    }
    .gg-acd-intro1{
        width: 45%;
    }
    .gg-acd-map{
        height: 150px;
        background-color:rgba(255, 255, 255, 0.3) ;
    }
    .gg-acd-intro{
        display: flex;
        justify-content: space-between;
        padding: 40px;
    }
    .gg-acd-warning{
        display: none;
    }
    .gg-acd-btn{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    @media screen and (max-width:1180px){
        .gg-acd-card{
            padding: 20px;
            height: 280px;
        }
        .gg-acd-img{
            width: 35%;
            height: 92%;
        }
        .gg-acd-intro{
            padding: 20px;
        }
        .gg-acd-intro1{
        width: 48%;
    }
    }
    @media screen and (max-width:1080px){
        .gg-acd-card{
            height: 300px;
        }
        .gg-acd-img{
            width: 31%;
            height: 55%;
        }
    }
    @media screen and (max-width:960px){
        .left-nav{
            display: none;
        }
        .gg-acd-warning{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;
        margin-top: 10px;
    }
    .fa-triangle-exclamation{
        font-size: 16px;
        color:#AFAFAF;
    }
        .content{
            width: 90%;
            min-width: 335px;
            margin-top: 0px;
        }
        .title{
        margin-bottom: 20px;
    }
    .gg-mtitle{
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
        .gg-option{
            font-size: 12px;
            line-height: 15px;
            font-weight: 700;
            letter-spacing: 2.5px;
        }
        .gg-smalltle{
        font-size: 16px;
        line-height: 16px;
        font-weight: 700;
        letter-spacing: 2.5px;
    }
        .gg-ac-pd2{
        padding-bottom: 10px;
    }
        .gg-acd-img{
            width: 50%;
            height: 100%;
            margin: 0;
        }
        .gg-acd-card{
            flex-direction: column;
            height:max-content ;
        }
        .gg-acd-img{
            width: 100%;
            height: 195px;
            margin-bottom: 10px;
        }
        .gg-ac-pd3{
        padding-bottom: 10px;
    }
    .gg-acd-text{
        height: max-content;
    }
    .gg-acd-intro{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .gg-acd-intro1{
        width: 100%;
    }
    .gg-mt30{
        margin-top: 30px;
    }
    .gg-acd-big-orange{
        width: max-content;
    padding: 10px 40px;
    border-radius: 20px;
    height: 36px;
    color:#240173;
    background: linear-gradient(226.02deg, #FFDA93 4.21%, #F56638 99.47%);
    font-size: 16px;
    line-height: 16px;
    font-weight: 700;
    letter-spacing: 2.5px;
    }
    .gg-acd-big-white{
        width: max-content;
    padding: 10px 40px;
    border-radius: 20px;
    height: 36px;
    color:#F4EDED;
    background:rgba(255, 255, 255, 0.3);
    font-size: 16px;
    line-height: 16px;
    font-weight: 700;
    letter-spacing: 2.5px;
    }
    .gg-ac-card-section{
            margin-bottom: 136px;
        }
    }
    </style> 
<?php include __DIR__ . '/parts/general-bg.php' ?>

<?php include __DIR__ . '/parts/navbar.php' ?>
    <div class="page d-flex ">
        <div class="left-nav"></div>
        <div class="right-content flex-grow-1 d-flex justify-content-center">
            <div class="content">
                <div class="title">
                    <p class="pc-title-32 text-pink gg-send gg-mtitle">聚會資訊</p>
                </div>
                <div class="gg-acd-card">
                    <div class="gg-acd-img"></div>
                    <div class="d-flex flex-column  justify-content-between mr-2 ">
                        <div class="d-flex flex-column  justify-content-start gg-ac-pd3">
                            <p class="pc-title-32 text-pink gg-mtitle gg-ac-pd2">投影機交流-選擇困難</p>
                            <p class="pc-regular-text-16 text-pink gg-lh20 gg-option">光華商場</p>
                            <p class="pc-regular-text-16 text-pink gg-lh20 gg-option">4月15日(五)，22:00</p>
                            <div class="d-flex  flex-wrap">
                                <div class="btn-tag mr-1 mt-2">多人(8)</div>
                                <div class="btn-tag mr-1 mt-2">我請客</div>
                                <div class="btn-tag mr-1 mt-2">用餐</div>
                                <div class="btn-tag mt-2">每人預算300元</div>
                            </div>
                        </div>
                        
                        <div class="">
                            <div class="d-flex align-items-center gg-ac-pd2">
                                <i class="fa-solid fa-house mr-2"></i>
                                <p class="pc-middle-title-20 text-pink gg-smalltle">主辦人</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="gg-ac-head  mr-2"></div>
                                <div class="d-flex flex-column">
                                    <p class="pc-title-32 text-pink gg-mtitle gg-ac-pd2">我阿林啦</p>
                                    <div class="d-flex">
                                        <div class="btn-tag mr-1">唱歌</div>
                                        <div class="btn-tag mr-1">姊姊</div>
                                        <div class="btn-tag mr-1">胚胚胚</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gg-acd-intro">
                    <div class="gg-acd-intro1">
                        <p class="pc-middle-title-20 text-pink mb-2 gg-smalltle">聚會內容</p>
                        <p class="pc-regular-text-16 text-pink gg-acd-text gg-smallt mb-2">最近想買投影機~想請教業界人士的意見，一起逛光華商場，挑選適合我的投影機，會請吃飯!最多4人。</p>
                        <p class="pc-middle-title-20 text-pink mb-2 gg-smalltle gg-mt30">聚會時間</p>
                        <p class="pc-regular-text-16 text-pink gg-smallt">預計開始時間為<br>2022年04月15日(五)，22:00</p>
                        <p class="pc-regular-text-16 text-pink gg-smallt">預估結束時間為<br>2022年04月16日(六)，06:00</p>
                        <p class="pc-regular-text-16 text-pink gg-smallt">最後審核時間為<br>2022年04月14日(四)，22:00</p>
                    </div>
                    <div class="gg-acd-intro1 d-flex flex-column justify-content-between">
                        <div class="">
                            <p class="pc-middle-title-20 text-pink mb-2 gg-smalltle gg-mt30">聚會地點</p>
                            <div class="gg-acd-map mb-2"></div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa-solid fa-location-dot mr-2"></i>
                                <p class="pc-regular-text-16 text-pink gg-smallt">光華商場-100台北市中正區市民大道三段8號</p>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-phone mr-2"></i>
                                <p class="pc-regular-text-16 text-pink gg-smallt">0223917105</p>
                            </div>
                        </div>
                        <div class="gg-acd-warning border-top ">
                            <i class="fa-solid fa-triangle-exclamation mr-1"></i>
                            <div class="gg-smallt text-hint">違規檢舉</div> 
                        </div>
                        <div class="gg-mt30 gg-ac-card-section  gg-acd-btn">
                            <div class="btn-pc-big-white gg-acd-big-white mb-3">返回編輯</div>
                            <div class="btn-pc-big-orange gg-acd-big-orange">建立聚會</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include __DIR__ . '/parts/scripts-bg.php' ?>
<script></script>
<?php include __DIR__ . '/parts/html-foot.php' ?>