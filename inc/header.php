<!doctype html>
<html>
<head>
    <title>Uploading Image File with PHP</title>
    <style>
        body{font-family: verdana; background: #1f1f1f;}
        .phpcoding{width: 900px;margin: 0 auto; background: #ddd;}
        .headeroption, .footeroption{background: #444444;color: #7c9bfb;
        text-align: center;padding: 15px 0px;width: 100%;float: left;margin-bottom: 30px;}
		.headeroption img{display:inline-block;margin:0px 10px 0px 15px;float: left;}
		.headeroption h3{display:inline-block;margin: 0;float: left;line-height: 41px;}
        .footeroption p{margin: 0;color: #d6bd09}
        .mainoption{min-height: 350px;padding: 20px; background: #353535;}
        .myform{width: 500px;margin: 0 auto;
            padding: 10px 20px 20px;}
        input[type="submit"],input[type="file"]{cursor: pointer}
        .error{text-align: center; color: lightcoral}
        .success{text-align: center; color: #06960E }
        .up_img{width: 100%; text-align: center;}
        .up_img img{width: 300px;}
        .back_to{text-align: center;margin-top: 30px;}
        .all_img{text-align: center;margin-top: 12px;float: right;padding-right: 15px;}
        .button{text-align: center;background: #126fb1;color: white;padding:10px 30px;text-decoration: none;
            border-radius: 20px;}
        table{margin: auto;
            background: silver;
            padding: 15px;
            text-align: center; }
        table th{background: #fff;padding: 10px;}
        table td{background: #dddddd;padding: 10px;}
        table td a{text-decoration: none;}
		.btn1{background: #580e9c;border-color: #490786;color: #fff;padding: 5px 20px;font-size: 16px;}
    </style>
</head>
<body>
<div class="phpcoding">
    <section class="headeroption">
        <img src="media/php.png" /><h3> Uploading Image File with PHP</h3>
		<div class="all_img"><a class="button" href="image.php">All Image</a></div>
    </section>

    <section class="mainoption">