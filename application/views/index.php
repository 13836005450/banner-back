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
                <p>menu：&nbsp;&nbsp;&nbsp;&nbsp;<input id="menu" type="text" name="menu" value=""></p>
                <p>banner1：<input type="text" id="banner1" name="banner1" value=""></p>
                <p>banner2：<input type="text" id="banner2" name="banner2" value=""></p>
                <p>banner3：<input type="text" id="banner3" name="banner3" value=""></p>
                <p>banner4：<input type="text" id="banner4" name="banner4" value=""></p>
                <p>电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="tel" name="tel" value=""></p>
                <input type="submit" value="提交">
            </form>
        </div>
    </div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
    $(function () {

        $.get(
            'welcome/getAllUri',
            {},
            function (data) {

                var res = JSON.parse(data);
                console.log(res)
                $('#menu').val(res[0].uri);
                $('#banner1').val(res[1].uri);
                $('#banner2').val(res[2].uri);
                $('#banner3').val(res[3].uri);
                $('#banner4').val(res[4].uri);
                $('#tel').val(res[5].uri);
            }
        )
    });
</script>
</body>
</html>