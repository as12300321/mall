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
                    <h3 class="box-title">新增城市</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Home/Config/addCity');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="0"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">省份</label>

                            <div class="col-sm-10">
                                <select name="province_id" class="form-control">
                                    <?php if(is_array($provincelist)): $i = 0; $__LIST__ = $provincelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$provincelist): $mod = ($i % 2 );++$i;?><option value="<?php echo ($provincelist["id"]); ?>"><?php echo ($provincelist["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">城市</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($city["name"]); ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>

                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block btn-default" onclick="history.go(-1)">取消</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>
<script type="text/javascript">
    if ('<?php echo ($city); ?>') {
        $('input[name="id"]').val('<?php echo ($city["id"]); ?>');
        $('select[name="province_id"]').val('<?php echo ($city["province_id"]); ?>');
    }
</script>