<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>小区活动捐资及开支情况</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                padding-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><a href="<?php echo U('Donation/listone',array('did'=>$vo['id']));?>" class="list-group-item">
                        <span class="badge">NEW</span>
                        <?php echo ($vo["title"]); ?>
                    </a><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
                </div>
            </div>
        </div>
        <script src="/Public/bootstrap/js/jquery.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>