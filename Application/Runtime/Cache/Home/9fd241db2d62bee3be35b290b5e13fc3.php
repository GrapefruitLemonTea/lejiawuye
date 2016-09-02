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
                            <h3 class="panel-title">报名人数统计</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr class="info">
                                        <th>序号</th>
										<th>楼宇</th>
                                        <th>房号</th>
                                        <th>姓名</th>
                                        <th>电话</th>
                                </thead>
                                <tbody>
								<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="">
                                        <td><?php echo ($vo["id"]); ?>&nbsp;&nbsp;</td>
										<td><?php echo ($vo["block"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo ($vo["room"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo ($vo["name"]); ?>&nbsp;&nbsp;</td>
                                        <td><?php echo (substr($vo["tel"],0,3)); ?>########&nbsp;&nbsp;</td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
									    <tr class="">
                                        <td colspan="5">报名总数：<?php echo ($sum); ?>&nbsp;&nbsp;</td>
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