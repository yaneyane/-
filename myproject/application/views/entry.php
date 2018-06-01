/*现可以通过  http://localhost/myproject/index.php/Entry/view/entry   访问*/

<!DOCTYPE html>
<html>
<head>
    <script src="entry.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>进入小程序主页面</title>
</head>
<body>

<p>这是小程序最开始的页面</p>

/*
    此处需要两个按钮：管理员入口 抽奖
    需要使用js来跳转
*/

<button type="button" id="s" onclick = "test()">管理员入口</button>
<span id="dianji">点击</span>

<button type="button" id="s" onclick=" test1()">参与抽奖</button>
<span id="dianji">点击</span>

<button type="button" id="s" onclick=" test2()">查看情况</button>
<span id="dianji">点击</span>

</body>
</html>
