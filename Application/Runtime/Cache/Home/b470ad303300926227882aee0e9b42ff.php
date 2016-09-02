<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
    <head>
        <title><?php echo ($result["title"]); ?></title>
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
                    <div class="form-group">
                        <div id="content">
                            <?php echo (htmlspecialchars_decode($result["content"])); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/Public/bootstrap/js/jquery.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>