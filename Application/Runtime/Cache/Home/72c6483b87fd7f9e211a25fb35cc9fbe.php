<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
    <head>
        <title>捷龙盛世2016年六一儿童节活动报名</title>
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
                            <h3 class="panel-title">活动报名</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="/index.php/Home/Activity/activeAdd" method="post">
							<blockquote>
							报名截止：2016.05.28</br>
							活动时间：2016.05.29</br>
							<a href="http://www.lejiawuye.top:81/index.php/Home/Donation/listone/did/9.html">游戏项目及规则</a>
							</blockquote>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">房号</span>
                                        <input type="text" class="form-control" name="room_num" placeholder="例：8#1001" aria-describedby="basic-addon1">
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
                                        <span class="input-group-addon" id="basic-addon1">儿童年龄</span>
                                        <input type="text" class="form-control" name="age" placeholder="请输入儿童年龄！" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">活动</span>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="act1" value="1">
                                                两人三足
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="act2" value="1">
                                                踩气球
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="act3" value="1">
                                                吹气球
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="act4" value="1">
                                                跳绳
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="act5" value="1">
                                                吹乒乓球过河
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="act6" value="1">
                                                涂鸦
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">备注</span>
                                        <input type="text" class="form-control" name="remarks" placeholder="可不填！" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">提交</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script src="/Public/bootstrap/js/jquery.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>