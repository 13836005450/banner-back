<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>网址更换</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container">
        <h2>网址更换系统</h2>
        <div class="website-setting">
            <form action="welcome/updateUri" method="post">
                <p>menu：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="menu"></p>
                <p>banner1：<input type="text" name="banner1"></p>
                <p>banner2：<input type="text" name="banner2"></p>
                <p>banner3：<input type="text" name="banner3"></p>
                <p>banner4：<input type="text" name="banner4"></p>
                <p>电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tel"></p>
                <input type="submit" value="提交">
            </form>
        </div>
    </div>
</body>
</html>