<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        系统首页
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo ($todayNewShop?$todayNewShop:0); ?></h3>

                    <p>今日新店铺</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo U('Admin/Shop/shop',array('day'=>date('Y-m-d')));?>" class="small-box-footer">更多详情 <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo ($yesterdayNewShop?$yesterdayNewShop:0); ?></h3>

                    <p>昨日新店铺</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo U('Admin/Shop/shop',array('day'=>date('Y-m-d', strtotime('-1 day'))));?>"
                   class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo ($shopsCount); ?></h3>

                    <p>店铺总量</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">&nbsp;</a>
            </div>
        </div>
        <!-- ./col -->
    </div>


    <div class="row">
        <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">新店铺走势图</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="newShopLineChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        //Get context with jQuery - using jQuery's .get() method.
        var ctx = $("#newShopLineChart").get(0).getContext("2d");
        //This will get the first returned node in the jQuery collection.

        var data = {
            labels: <?php echo ($date); ?>,
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    data: <?php echo ($newShopLine); ?>
                }
            ]
        }

        new Chart(ctx).Line(data);
    });
</script>