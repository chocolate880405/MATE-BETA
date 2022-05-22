<?php
session_start();
$pageName = 'index';
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

    .title {
        margin-bottom: 30px;
        /* 修改 */
        width: 100%;
        text-align: center;
    }
    .gg-giftbox{
        width: 95%;
        height: 520px;
        margin: auto;
    }
    .gg-box1{
        width: 287px;
        height: 238px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        text-align: center;
        padding: 20px;
        margin:10px;
    }
    .gg-box2{
        width: 100%;
        height: 100%;
        justify-content: space-around;
        align-items: center;
    }
    .fa-youtube{
        font-size: 25px;
        padding-top: 3px;
        color: #F4EDED;
        margin-right:10px ;
    }
    .gg-notice{
        margin: 30px;
        text-align:center;
        margin-bottom: 110px;
    }
    @media screen and (max-width:1140px) {
        .gg-box1{
        width: 220px;
        height: 238px;
        padding: 10px;
        margin:10px;
    }
    
    }
    @media screen and (max-width: 960px) {
        .left-nav {
            display: none;
        }    
        .content{
            width: 90%;
            min-width: 335px;
            margin-top: 0px;
        }
        .gg-notice{
        margin-bottom: 136px;
        }
        .gg-box1{
            width: 163px;
            height: 176px;
            margin: 5px;
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
        .gg-ptext{
            font-size: 14px;
            line-height: 25px;
            font-weight: 700;
            letter-spacing: 2.5px;
        }
        .fa-youtube{
        font-size: 20px;
        }
        .title{
            margin-bottom: 10px;
        }
        .gg-giftbox{
        height: 375px;
        }
        .gg-option{
            font-size: 12px;
            line-height: 15px;
            font-weight: 700;
            letter-spacing: 2.5px;  
        }
    }
    
</style>

<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="page d-flex ">
        <div class="left-nav"></div>
        <div class="right-content flex-grow-1 d-flex justify-content-center">
            <div class="content">
                <div class="title d-flex flex-column">
                    <p class="pc-title-32 text-pink gg-mtitle">感情小幫手專區</p>
                    <p class="pc-small-title-16 text-pink gg-smallt">你是否是第一次追尋戀情?<br>
                                                            是否對自己的技巧不自信?<br>
                                                            感情小幫手!包準解決你的問題!</p>
                </div>
                <div class="gg-giftbox d-flex flex-wrap flex-column align-content-center">
                        <div class="gg-box1">
                            <div class="d-flex flex-column gg-box2">
                                <p class="pc-title-32 text-pink gg-mtitle">基礎套裝</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">感情學習影片</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">服裝搭配技巧</p> 
                                </div>
                                <div class="btn-pc-white">金鑰*5</div>
                            </div>
                        </div>
                        <div class="gg-box1">
                            <div class="d-flex flex-column gg-box2">
                                <p class="pc-title-32 text-pink gg-mtitle">新手套裝</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">感情學習影片</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">服裝搭配技巧</p> 
                                </div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">餐桌禮儀教學</p> 
                                </div>
                                <div class="btn-pc-white">金鑰*10</div>
                            </div>
                        </div>
                        <div class="gg-box1">
                            <div class="d-flex flex-column gg-box2">
                                <p class="pc-title-32 text-pink gg-mtitle">進階套裝</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">感情學習影片</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">個性相性分析</p> 
                                </div>
                                <div class="btn-pc-white">金鑰*5</div>
                            </div>
                        </div>
                        <div class="gg-box1">
                            <div class="d-flex flex-column gg-box2">
                                <p class="pc-title-32 text-pink gg-mtitle">老鳥套裝</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">個性相性分析</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">約會必勝話題</p> 
                                </div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    <p class="pc-middle-title-20 text-pink gg-ptext">當日運勢分析</p> 
                                </div>
                                <div class="btn-pc-white">金鑰*10</div>
                            </div>
                        </div>
                </div>
                <div class="d-flex flex-column align-items-center gg-notice">
                    <p class="pc-hint-14 text-hint mb-2 gg-option">本次將消費10代幣，<br>扣除後剩餘代幣數為20</p>
                    <div class="btn-pc-big-orange">送出邀請</div>
                </div>
                
            </div>
        </div>
    </div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<script>
    $('.gg-box1').click(function(){
            console.log(this,1);
            num = $(this).index();
            $('.gg-box1').eq(num).css('background','linear-gradient(226.02deg, #FF67F9 4.21%, #5338F5 99.47%)');
            $('.gg-box1').eq(num).siblings().css('background','rgba(255, 255, 255, 0.3)');
        })
</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>