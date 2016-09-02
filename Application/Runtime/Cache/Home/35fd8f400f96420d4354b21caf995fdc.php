<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
    <head>
        <title>捷龙盛世2016年中秋节活动报名</title>
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
                            <h3 class="panel-title">中秋节博饼报名</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="/index.php/Home/Festival/add" method="post">
							<div class="form-group">
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" name="code" value="<?php echo ($code); ?>">
                                    </div>
                                </div>
								 <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">楼宇</span>
                                        <select class="form-control" name="block">
										   <option value="0">请选择楼栋</option>
										   <option value="1">1号楼</option>
										   <option value="2">2号楼</option>
										   <option value="3">3号楼</option>
										   <option value="4">4号楼</option>
										   <option value="5">5号楼</option>
										   <option value="6">6号楼</option>
										   <option value="7">7号楼</option>
										   <option value="8">8号楼</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">房号</span>
                                        <input type="text" class="form-control" name="room" placeholder="例：1001" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">姓名</span>
                                        <input type="text" class="form-control" name="name" placeholder="请输入业主姓名！" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                     <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">手机号</span>
                                        <input type="text" class="form-control" name="tel" placeholder="请输入电话！" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">备注</span>
                                        <input type="text" class="form-control" name="remarks" placeholder="可不填！" aria-describedby="basic-addon1">
                                    </div>
                                </div>
								<div class="form-group">
                                <button type="submit" class="btn btn-default">提交</button>
								</div>
                            	<blockquote>
							报名截止：2016.09.02-2016.09.14</br>
							活动时间：2016.09.29</br>
							<a href="#">注意事项：先选择楼宇再填写房号，例如：8号楼1001，先在楼宇处选择”8号楼“，然后在房号处填入”1001“</a>
							</blockquote>
							</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script src="/Public/bootstrap/js/jquery.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>