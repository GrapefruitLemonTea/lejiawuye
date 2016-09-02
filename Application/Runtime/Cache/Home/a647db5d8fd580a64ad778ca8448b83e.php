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
                padding-top: 70px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">乐嘉物业</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 text-center">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">资讯管理</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">新增资讯</a></li>
                                        <li><a href="#">资讯列表</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">活动收支</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="<?php echo U('Donation/donationAdd');?>">新增收支</a></li>
                                        <li><a href="<?php echo U('Donation/donationList');?>">收支列表</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">温馨提示</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">新增提示</a></li>
                                        <li><a href="#">提示列表</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-10 col-sm-10">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>表格标题</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                            <td>
                                <a href="<?php echo U('Donation/listone',array('did'=>$vo['id']));?>">
                                    <?php echo ($vo["title"]); ?>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo U('Donation/donationEdit',array('did'=>$vo['id']));?>">
                                    编辑
                                </a>|
                                <a href="<?php echo U('Donation/donationDel',array('did'=>$vo['id']));?>">
                                    删除
                                </a>
                            </td>
                            </tr><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="/Public/bootstrap/js/jquery.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>