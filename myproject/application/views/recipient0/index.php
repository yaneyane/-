<!DOCTYPE html>
<html>
<head>
    <script src="entry.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>进入小程序主页面</title>
</head>
<body>
<?php
           for($i=0;$i<$number;$i++)
                {
                    echo '这是活动名称：';
                    echo $result['ActivityName'][$i]
                    echo '<br />';

                    echo '这是活动ID：';
                    echo $result['ActivityID'][$i];
                    echo '<br />';

                    echo '这是活动开始时间：';
                    echo $result['StartTime'][$i];
                    echo '<br />';

                    echo '这是活动结束时间：';
                    echo $result['EndTime'][$i];
                    echo '<br />';

                    echo '这是活动的奖品名字：';
                    echo $result['AwardName'][$i];
                    echo '<br />';

                    echo '这是活动的奖品等级：';
                    echo $result['Type'][$i];
                    echo '<br />';

                    echo '这是活动的奖品照片：';
                    echo $result['BookPhoto'][$i];
                    echo '<br />';

                    echo '这是活动的奖品二维码：';
                    echo $result['QRCode'][$i];
                    echo '<br />';
                    //此处的button跳转到用户填写个人信息界面，同时该页的活动ID以及用户个人openID需要被传递
                    //<button type="button" id="s" onclick = "test()">填写个人信息领取奖品</button>
                      //  <h6><span id="dianji">点击</span></h6>-->
                }
