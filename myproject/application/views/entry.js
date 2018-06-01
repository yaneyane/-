function test()//发送客户端请求
{
    window.location.href='http://localhost/myproject/index.php/activity';
}

function test1()//跳转到用户看见的可参与活动的列表界面
//上述页面可以通过打开safari，输入 http://localhost/myproject/index.php/activity00/index 访问 界面内直接打开无效
{
    window.location.href='http://localhost/myproject/index.php/activity00/index';
}

function test2()//跳转到用户个人看见自己的中奖活动信息的界面
//此处需要传递参数openID，以表明用户身份，现只做一个跳转以示逻辑
//若为空白文件，很可能是没插数据
//上述页面可以通过打开safari，输入 http://localhost/myproject/index.php/recipient0/index 访问 界面内直接打开无效
{
    window.location.href='http://localhost/myproject/index.php/activity1/index';
}