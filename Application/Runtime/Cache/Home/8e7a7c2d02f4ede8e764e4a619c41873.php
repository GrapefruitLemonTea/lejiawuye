<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">各项目报名人数统计</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr class="info">
                                        <th>两人三足</th>
                                        <th>踩气球</th>
                                        <th>吹气球</th>
                                        <th>跳绳</th>
                                        <th>吹乒乓球过河</th>
                                        <th>涂鸦</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td><?php echo ($act1); ?>&nbsp;&nbsp;人已报</td>
                                        <td><?php echo ($act2); ?>&nbsp;&nbsp;人已报</td>
                                        <td><?php echo ($act3); ?>&nbsp;&nbsp;人已报</td>
                                        <td><?php echo ($act4); ?>&nbsp;&nbsp;人已报</td>
                                        <td><?php echo ($act5); ?>&nbsp;&nbsp;人已报</td>
                                        <td><?php echo ($act6); ?>&nbsp;&nbsp;人已报</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="/Public/bootstrap/js/jquery.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>