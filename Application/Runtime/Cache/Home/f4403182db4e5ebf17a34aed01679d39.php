<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>小区活动捐资管理</title>
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
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">编辑捐资表</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="/index.php/Home/Donation/donationEdit" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">名称</label>
                                    <input type="text" class="form-control" name="title" value="<?php echo ($result["title"]); ?>">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo ($result["id"]); ?>">
                                </div>
                                <div class="form-group">
                                    <textarea id="editor_id" name="content" style="width:700px;height:300px;"><?php echo (htmlspecialchars_decode($result["content"])); ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">提交</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Start of Ueditor-->
        <!-- 编辑器源码文件 -->
        <script charset="utf-8" src="/Public/kindeditor/kindeditor.js"></script>
        <!-- 实例化编辑器 -->
        <script>
         KindEditor.ready(function(K) {
        K.create('#editor_id', {
                allowFileManager : true
        });
         });
        </script>
        <!--End of Ueditor-->
        <script src="/Public/bootstrap/js/jquery.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>