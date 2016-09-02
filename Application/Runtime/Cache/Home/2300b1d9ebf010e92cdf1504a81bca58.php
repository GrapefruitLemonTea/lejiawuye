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
                                        <th>序号</th>
                                        <th>房号</th>
                                        <th>姓名</th>
                                        <th>电话</th>
                                        <th>儿童年龄</th>
                                        <th>两人三足</th>
										<th>踩气球</th>
										<th>吹气球</th>
										<th>跳绳</th>
										<th>吹乒乓球过河</th>
										<th>涂鸦</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="">
                                        <td><?php echo ($vo["id"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo ($vo["room_num"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo ($vo["name"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo ($vo["tel"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo ($vo["age"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo ($vo["act1"]); ?>&nbsp;&nbsp;</td>
										<td><?php echo ($vo["act2"]); ?>&nbsp;&nbsp;</td>
										<td><?php echo ($vo["act3"]); ?>&nbsp;&nbsp;</td>
										<td><?php echo ($vo["act4"]); ?>&nbsp;&nbsp;</td>
										<td><?php echo ($vo["act5"]); ?>&nbsp;&nbsp;</td>
										<td><?php echo ($vo["act6"]); ?>&nbsp;&nbsp;</td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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