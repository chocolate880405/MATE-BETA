<?php include("html-head.php"); ?>
    <style>
        body{
            background-color: rgb(163, 163, 163);
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
            background-color: rgb(119, 196, 255);
            height: 100vh;
        }
        .right-content {
            background-color: rgb(183, 115, 246);
        }
        .content{
            width: 80%;
            max-width:904px;
            margin-top: 110px;/*待討論*/
            background-color: rgb(29, 36, 88);
            overflow: hidden;
        }
        .title{
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<?php include("navbar.php"); ?>
    <div class="page d-flex ">
        <div class="left-nav"></div>
        <div class="right-content flex-grow-1 d-flex justify-content-center">
            <div class="content">
                <div class="title">
                    <p class="pc-title-32 text-pink">我是標題</p>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>