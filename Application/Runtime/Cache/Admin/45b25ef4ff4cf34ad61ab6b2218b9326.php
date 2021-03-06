<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        系统设置
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">商城设置</h3>
                </div>
                <!-- form start -->
                <form action="<?php echo U('Admin/Config/configSet');?>" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商城名称</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($config["name"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">微信自动登录</label>

                            <div class="col-md-7">
                                <label class="radio-inline"><input name="oauth" type="radio"
                                    <?php if($config["oauth"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="oauth" type="radio"
                                    <?php if($config["oauth"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">微信网页授权调试模式</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="oauth_debug" type="radio"
                                    <?php if($config["oauth_debug"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="oauth_debug" type="radio"
                                    <?php if($config["oauth_debug"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">账户支付</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="balance_payment" type="radio"
                                    <?php if($config["balance_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="balance_payment" type="radio"
                                    <?php if($config["balance_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">微信支付</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="wechat_payment" type="radio"
                                    <?php if($config["wechat_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="wechat_payment" type="radio"
                                    <?php if($config["wechat_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">支付宝支付</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="alipay_payment" type="radio"
                                    <?php if($config["alipay_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="alipay_payment" type="radio"
                                    <?php if($config["alipay_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">货到付款</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="cool_payment" type="radio"
                                    <?php if($config["cool_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="cool_payment" type="radio"
                                    <?php if($config["cool_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公众号二维码</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($config['qrcode'])): ?><img
                                                src="/Public/Admin/dist/img/noimage.gif">
                                            <?php else: ?>
                                            <img src="<?php echo ($config["qrcode"]); ?>"><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2"></label>

                            <div class="col-sm-10">
                                <a class="btn btn-default" href="<?php echo U('Admin/Wechat/getQRCode');?>">生成公众号二维码
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">客服电话</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" name="tel" value="<?php echo ($config["tel"]); ?>" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" name="address" value="<?php echo ($config["address"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($config["remark"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">提现手续费比例</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="tx_fee" placeholder="" value="<?php echo ($config["tx_fee"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">推荐店铺ID</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="recommend_shop" placeholder="格式:A,B"
                                       value="<?php echo ($config["recommend_shop"]); ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
</section>