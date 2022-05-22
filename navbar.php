<style>
    .ed_table{
    position: fixed;
    top: 0;
    left: 0;
    width: 316px;
    height: 100%;
    left: 0px;
    top: 0px;
    background: #09005F;
    font-family: 'Noto Sans', sans-serif;
    font-family: 'Noto Sans TC', sans-serif;
}

.wrapall{
    width: 80%;
    margin: auto;
}

.table_logo{
    width: 102px;
    height: 24px;
    margin: auto;
    margin-top: 34px;

}

.table_logo img{
    width: 100%;
}

.user_photo{
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin: auto;
    margin-top: 49px;
    z-index: 999;
}

.user_photo img{
    width: 100%;
    border-radius: 50%;
}

.user_name{
    margin: auto;
    text-align: center;
    font-weight: 700;
    font-size: 20px;
    letter-spacing: 2.5px;
    color: #F4EDED;
    margin-top: 26px;
}

.user_age{
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    text-align: center;
    letter-spacing: 2.5px;
    color: #F4EDED;
}

.user_career{
    padding: 4px 0px;
    text-align: center;

    background: linear-gradient(45deg, #F66F40, #FFD38D);
    background: -webkit-linear-gradient(45deg, #F66F40, #FFD38D);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    
    font-style: normal;
    font-weight: 700;
    font-size: 12px;
    letter-spacing: 2.5px;
}

.border-image{
    width:105px;
    height:29px;
    border: solid 1px transparent;
    border-radius: 20px;
    background-image: linear-gradient( #09005F,  #09005F),
    linear-gradient(45deg, #F66F40,#FFD38D);
    background-origin: border-box;
    background-clip: content-box, border-box;
    vertical-align: middle;
    margin: auto;
    margin-top: 18px;
}

.keyword_all{
    margin-top: 15px;
    text-align: center;
    
}

.keyword_all .keyword{
    display: inline-block;
    font-style: normal;
    font-weight: 700;
    font-size: 12px;
    color: #F4EDED;
    letter-spacing: 2.5px;
    border: 1px solid  #F4EDED;
    padding: 5px 10px 6px 10px;
    border-radius: 20px;
    margin-right: 5px;
    
}

.coin_all{
    display: flex;
    border: 1px solid #F4EDED;
    border-left: none;
    border-right: none;
    width: 73%;
    margin: auto;
    margin-top:9px;
}

.left, .right{
    margin: 6px;
}

.left{
    margin-right: 17px;
}

.right{
    margin-left: 17px;
}

.middle{
    border: 1px solid #F4EDED;
    border-left: none;
    height: 49px;
    margin-top: 15px;
}

.coinword1{
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 2.5px;
    color:  #F4EDED;
    margin-top: 8px;
}

.coinword2{

font-style: normal;
font-weight: 700;
font-size: 17px;
letter-spacing: 2.5px;
color: #F4EDED;
margin-top: 14px;
}

.coinword3{
    font-style: normal;
    font-weight: 700;
    font-size: 12px;
    letter-spacing: 2.5px;
    color: #09005F;
    padding: 6px 3px 6px 5px;
    background: linear-gradient(45deg, #F66F40, #FFD38D);
    background: -webkit-linear-gradient(45deg, #F66F40, #FFD38D);
    border-radius: 20px;
    margin-top: 10px;
}

.profile_all{
    width: 71%;
    margin: auto;
    margin-top: 17px;
    margin-bottom: 17px;
}

.pro1{
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 2.5px;
    color: #F4EDED;
}

.pro2{
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    letter-spacing: 2.5px;
    line-height: 22px;
    color: #F4EDED;
}

.progress_bar{
    width: 100%;
    height: 8px;
    background: #727272;
    border-radius: 8px;
    position: relative;
    margin-top: 30px;
}

.finished_bar{
    position: absolute;
    bottom: 0;
}

.finished{
    width: 120px;
    height: 8px;
    background: linear-gradient(45deg, #F66F40, #FFD38D);
    border-radius: 8px;
}

.locate_all{
    position: absolute;
    left: 105px;
    bottom: 55px;
}

.locate{
    position: relative;
}


.pin1{
    width: 30px;
    position: absolute;
    top: 0;

}

.pinword{
    position: absolute;
    top: 6px;
    left: 2px;
    color: #09005F;
    font-style: normal;
    font-weight: 700;
    font-size: 12px;
}

.nav_page_all{
    width: 71%;
    margin: auto;
}

.nav_page1{
    border: 1px solid #F4EDED;
    border-left: none;
    border-right: none;
}

.nav_page2{
    border: 1px solid #F4EDED;
    border-left: none;
    border-right: none;
    border-top: none;
}

.nav_inside{
    display: flex;
    text-align: center;
    margin: 16px  27px 16px 27px ;
}

.navword{
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    text-align: center;
    letter-spacing: 4px;
    color: #F4EDED;
    margin-top: 5px;
}

.nav_icon{
    width: 25px;
    margin-right: 20px;
}

.bottom_all{
    position:fixed ;
    bottom: 15px;
    left: 50px;
}

.bottomword{
    font-style: normal;
    font-weight: 700;
    font-size: 12px;
    line-height: 22px;
    letter-spacing: 2.3px;

    color: #8F8F8F;

}

@media screen and (max-height: 950px) {
.profile_all{
    display: none;
}
}

</style>
        <div class="ed_table">
            <div class="wrapall">
                <div class="table_logo">
                    <a href=""><img src="imgs/matelogo-01.png" alt=""></a>
                </div>
                <div class="user_photo">
                    <a href=""><img src="imgs/截圖 2022-04-20 下午10.25.10.png" alt=""></a>
                </div>
                <p class="user_name">KATE</p>
            <h6 class="user_age">23歲</h6>
            <div class="border-image"> <p class="user_career">內湖工程師</p> </div>

            <div class="keyword_all">
                    <div class="line1">
                        <h6 class="keyword">美食</h6>
                        <h6 class="keyword">打籃球</h6>
                        <h6 class="keyword">煮飯</h6>
                    </div>
                    <div class="line2">
                        <h6 class="keyword">旅遊</h6>
                        <h6 class="keyword">電影</h6>
                    </div>
            </div>

            <div class="coin_all">
                <div class="left">
                    <h6 class="coinword1"> 個人金鑰</h6>
                    <h6 class="coinword2">460 個</h6>
                </div>

                <div class="middle"></div>

                <div class="right">
                    <h6 class="coinword1">配對推廣</h6>
                    <h6 class="coinword3">今日熱推</h6>
                </div>

            </div>

            <div class="profile_all">
                <h5 class="pro1">個人資訊完整度</h5>
                <h6 class="pro2">快來完成更多資訊，提高配對準確度！</h6>

                <div class="progress_bar">
                        <div class="finished_bar">
                                <div class="locate_all">
                                    <div class="locate">
                                        <img class="pin1" src="imgs/location-pin-01.png" alt="">
                                        <p class="pinword">72%</p>
                                    </div>
                                </div>
                                <div class="finished"></div>     
                        </div>
                </div>
            </div>

            <div class="nav_page_all">
                <div class="nav_page1">
                    <div class="nav_inside ">
                        <div class="nav_icon">
                            <img src="imgs/category-02.svg" alt="">
                        </div>
                        <h5 class="navword">開始交友</h5>
                    </div>
                </div>
                <div class="nav_page2">
                        <div class="nav_inside ">
                        <div class="nav_icon">
                            <img src="imgs/category-01.svg" alt="">
                        </div>
                        <h5 class="navword">參加聚會</h5>
                        </div>
                    </div>
            </div>

            <div class="bottom_all">
                <h6 class="bottomword">隱私政策｜使用者條款｜聯絡我們</h6>

            </div>
            
                
            </div>
        
            
        </div>
    

