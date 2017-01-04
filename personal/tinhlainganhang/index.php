<?php
include_once 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width"/>
        <title>Công cụ tính lãi suất khi vay tiền tại Ngân Hàng</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-50980976-8', 'auto');
            ga('send', 'pageview');

        </script>
        <div class="container-fluid">
            <br/>
            <div class="row">
                <div class="col-xs-3">
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="tienvay">Tổng tiền vay</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" onkeyup="number_format(this)" value="<?php echo isset($_POST['tienvay']) ? $_POST['tienvay'] : '';?>" name="tienvay" id="tienvay">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="tgvay">Thời gian vay</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" style="width: 60px; display: inline;" value="<?php echo isset($_POST['tgvay']) ? $_POST['tgvay'] : 180;?>" name="tgvay" id="tgvay">
                                <span>tháng</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="laisuat">Lãi suất / năm</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" style="width: 60px; display: inline" name="laisuat" id="laisuat"  value="<?php echo isset($_POST['laisuat']) ? $_POST['laisuat'] : 5;?>">
                                <span>%</span>
                            </div>
                        </div>
                        <?php
                        for ($a = 1; $a<=SO_DOT_GIAI_NGAN; $a++) {
                            $default_date = '';
                            if ($a == 1) {
                                $default_date = date('d/m/Y');
                            }
                        ?>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="duno">Giải ngân đợt <?php echo $a;?></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" onkeyup="number_format(this)" name="giaingan_<?php echo $a;?>" id="giaingan_<?php echo $a;?>" value="<?php echo isset($_POST['giaingan_' . $a]) ? $_POST['giaingan_' . $a] : '';?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="ngaygiaingan_<?php echo $a;?>">Ngày giải ngân</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control d" readonly name="ngaygiaingan_<?php echo $a;?>" id="ngaygiaingan_<?php echo $a;?>" value="<?php echo isset($_POST['ngaygiaingan_' . $a]) ? $_POST['ngaygiaingan_' . $a] : $default_date;?>">
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-7">
                                <button type="submit" class="btn btn-success">Tính</button>
                            </div>
                        </div>
                    </form>
                    <div class="alert alert-info">
                        <i>Lưu ý:</i>
                        <ul>
                            <li>Phương pháp tính <b>"Gốc cố định, lãi giảm dần"</b></li>
                            <li>BIDV tính lãi ngày dựa trên lãi suất của năm với <b>1 năm = 360 ngày</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-9">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kỳ trả</th>
                                <th>Tháng</th>
                                <th>Giải ngân (VNĐ)</th>
                                <th>Dư nợ đầu kỳ (VNĐ)</th>
                                <th>Vốn phải trả (VNĐ)</th>
                                <th>Lãi phải trả (VNĐ)</th>
                                <th>Vốn + lãi (VNĐ)</th>
                            </tr>
                        </thead>
                        <?php
                        $replace = array('.', ',');
                        $duno = 0;
                        if (sizeof($_POST) > 0) {
                            $thang = intval($_POST['tgvay']);
                            $tienvay = $_POST['tienvay'];
                            $laisuat = $_POST['laisuat'];
                            for ($a = 1; $a <=SO_DOT_GIAI_NGAN; $a++) {
                                if ($_POST['ngaygiaingan_' . $a] && $_POST['giaingan_' . $a] != '') {
                                    $tmp_date = convert_date($_POST['ngaygiaingan_' . $a], false, false, '_');
                                    ${"giaingan_$tmp_date"} = str_replace($replace, '', $_POST['giaingan_' . $a]);
                                    ${"thanggiaingan_$tmp_date"} = $_POST['ngaygiaingan_' . $a];
                                    if (${"giaingan_$tmp_date"} > 0 && $duno == 0) {
                                        $duno = ${"giaingan_$tmp_date"};
                                        $thangbatdau = convert_date(${"thanggiaingan_$tmp_date"}, true, false);
                                    }
                                }
                            }

                            $tienvay = str_replace($replace, '', $tienvay);
                            $duno = str_replace($replace, '', $duno);
                            if ($thang > 12*20) {
                                $thang = 12*20;
                            }
                            $von_phai_tra = $tienvay / $thang;

                        ?>
                        <tbody>
                        <?php
                        $tong_von = 0;
                        $tong_lai = 0;
                        $tong_giai_ngan = 0;
                        $time_pay = $thangbatdau;
                        for ($i = 1; $i <= $thang; $i++) {
                            if ($i > 1) {
                                $duno = $duno - $von_phai_tra;
                                $time_pay = $time_pay->add(new DateInterval('P1M'));
                            }
                            if ($duno <= 0) {
                                break;
                            }
                            $y_m = $time_pay->format('Y_m');
                            if (isset(${"giaingan_$y_m"})) {
                                $giaingan = ${"giaingan_$y_m"};
                            } else {
                                $giaingan = 0;
                            }
                            $tong_giai_ngan += $giaingan;
                            if ($i > 1) {
                                $duno += $giaingan;
                            }
                            $num_days = cal_days_in_month(CAL_GREGORIAN, $time_pay->format('m'), $time_pay->format('Y'));
                            if ($i == 1) {
                                $d = $time_pay->format('d');
                                $num_days = $num_days - $d + 1;
                            }

                            $lai_theo_ngay = $laisuat / 100 / 360  * $duno;
                            $lai_phai_tra = $lai_theo_ngay * $num_days;
                            $tong_von += $von_phai_tra;
                            $tong_lai += $lai_phai_tra;
                            $von_lai = $von_phai_tra + $lai_phai_tra;

                        ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $time_pay->format('m/Y');?> <span style="font-style: italic; color: blue;"><small>(<?php echo $num_days;?> ngày)</small></span></td>
                                <td><?php echo number_format($giaingan, 0, '.', ',');?></td>
                                <td><?php echo number_format($duno, 0, '.', ',');?></td>
                                <td><?php echo number_format($von_phai_tra, 0, '.', ',');?></td>
                                <td><?php echo number_format($lai_phai_tra, 0, '.', ',');?> <span style="font-style: italic; color: darkred;"><small>(lãi ngày <?php echo number_format($lai_theo_ngay, 2, '.', ',');?>)</small></span></td>
                                <td><?php echo number_format($von_lai, 0, '.', ',');?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">Tổng</th>
                                <th><?php echo number_format($tong_giai_ngan, 0, '.', ',');?></th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th><?php echo number_format($tong_lai, 0, '.', ',');?></th>
                                <th><?php echo number_format($tong_von + $tong_lai, 0, '.', ',');?></th>
                            </tr>
                            <tr>
                                <td colspan="7">Lãi trung bình mỗi tháng: <span class="label label-success"><?php echo number_format($tong_lai / $thang, 0, '.', ',');?> VNĐ</span></td>
                            </tr>
                        </tfoot>
                        <?php } ?>
                    </table>
                </div>
            </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="bootstrap-datepicker/locales/bootstrap-datepicker.vi.min.js"></script>
        <script type="text/javascript" src="js/my_js.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.d').datepicker({
                    language: "vi",
                    format: "dd/mm/yyyy",
                    autoclose: true
                });
            });
        </script>
    </body>
</html>