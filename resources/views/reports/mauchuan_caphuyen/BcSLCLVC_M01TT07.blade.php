<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$pageTitle}}</title>
    <style type="text/css">
        body {
            font: normal 12px/14px time, serif;
        }

        .header tr td {
            padding-top: 0px;
            padding-bottom: 10px;
        }

        table, p {
            width: 98%;
            margin: auto;
        }

        table tr td:first-child {
            text-align: center;
        }

        td, th {
            padding: 10px;
        }
        
        #noidung td, th {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 1px;
            padding-right: 1px;
        }
        p{
            padding: 5px;
        }
        span{
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>
<body style="font:normal 12px Times, serif;">

<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:0 auto 25px; text-align: center;">
    <tr>
        <td  style="text-align: left;width: 60%">
            <b>Đơn vị chủ quản: {{$m_dv->tenct}}</b>
        </td>
        <td  style="text-align: center;">
            <b>BM01-VC/BNV</b>
        </td>
    </tr>
    <tr>
        <td style="text-align: left;width: 60%">
            <b>Đơn vị: {{$m_dv->tendv}}</b>
        </td>
        <td  style="text-align: center; font-style: italic">
            (Ban hành kèm theo Thông tư số 07/2019/TT-BNV ngày 01 tháng 6 năm 2019 của Bộ trưởng Bộ Nội vụ)
        </td>
    </tr>
</table>
<p style="text-align: center; font-weight: bold; font-size: 20px;">BÁO CÁO SỐ LƯỢNG, CHẤT LƯỢNG VIÊN CHỨC</p>
<p style="text-align: center; font-style: italic">Ngày báo cáo {{getDayVn($thongtin['ngaybaocao'])}}</p>

<table id="noidung" cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <thead>
    <tr>
        <th style="width: 2%" rowspan="4">STT</th>
        <th rowspan="4">Phòng ban</th>
        <th style="width: 2%" rowspan="4">Tổng số</th>

        <th colspan="5">Chia theo lĩnh vực</th>
        <th colspan="5">Chia theo ngạch viên chức</th>
        <th colspan="12">Chia theo trình độ</th>
        <th colspan="5">Chia theo độ tuổi</th>

        <th style="width: 2%" rowspan="4">Đảng viên</th>
        <th style="width: 2%" rowspan="4">Phụ nữ</th>
        <th style="width: 2%" rowspan="4">Dân tộc ít người</th>
    </tr>
    <tr>
        <th rowspan="3" style="width: 2%">Giáo dục</th>
        <th rowspan="3" style="width: 2%">Y tế</th>
        <th rowspan="3" style="width: 2%">NC KH</th>
        <th rowspan="3" style="width: 2%">VH TT</th>
        <th rowspan="3" style="width: 2%">Khác</th>

        <th rowspan="3" style="width: 2%">TĐ CV CC</th>
        <th rowspan="3" style="width: 2%">TĐ CVC</th>
        <th rowspan="3" style="width: 2%">TĐ CV</th>
        <th rowspan="3" style="width: 2%">TĐ CS</th>
        <th rowspan="3" style="width: 2%">Còn lại</th>

        <th colspan="4">Chuyên môn</th>
        <th colspan="2">Chính trị</th>
        <th colspan="2">Tin học</th>
        <th colspan="4">Ngoại ngữ</th>

        <th rowspan="3" style="width: 2%">Dưới 30</th>
        <th rowspan="3" style="width: 2%">Từ 30 đến 50</th>
        <th colspan="2">Trên 50 đến 60</th>
        <th rowspan="3" style="width: 2%">Trên tuổi nghỉ hưu</th>
    </tr>

    <tr>
        <th rowspan="2" style="width: 2%">Tiến sĩ</th>
        <th rowspan="2" style="width: 2%">Thạc sĩ</th>
        <th rowspan="2" style="width: 2%">Đại học</th>
        <th rowspan="2" style="width: 2%">Còn lại</th>
        <th rowspan="2" style="width: 2%">Cao cấp</th>
        <th rowspan="2" style="width: 2%">Trung cấp</th>
        <th rowspan="2" style="width: 2%">Đại học</th>
        <th rowspan="2" style="width: 2%">Chứng chỉ</th>

        <th colspan="2">Anh văn</th>
        <th colspan="2">Ngoại ngữ khác</th>

        <th rowspan="2" style="width: 2%">Tổng số</th>
        <th rowspan="2" style="width: 4%">T.đó: Nữ:54 Nam:59</th>
    </tr>

    <tr>
        <th style="width: 2%">Đại học</th>
        <th style="width: 2%">Chứng chỉ</th>

        <th style="width: 2%">Đại học</th>
        <th style="width: 2%">Chứng chỉ</th>
    </tr>

    <tr>
        <th></th>
        <th>A</th>
        @for($i=1;$i<=31;$i++)
        <th>{{$i}}</th>
        @endfor
    </tr>
    </thead>
    @foreach($model_kpb as $pb)
        <?php $donvi=$model_dv->where('makhoipb',$pb->makhoipb); ?>
        <tr style="font-weight: bold; text-align: center">
            <td></td>
            <td colspan="32" style="text-align: left">{{$pb->tenkhoipb.' ( '.$donvi->count().' đơn vị)'}}</td>

        </tr>
        <?php $i=1;?>
        @foreach($donvi as $dv)
            <tr style="font-weight: bold; text-align: center; font-style: italic">
                <td>{{$i++}}</td>
                <td colspan="32" style="text-align: left">{{$dv->tendv}}</td>

            </tr>
            <?php $stt=1; ?>

            @foreach($model as $ct)
                @if($ct['madv']==$dv->madv)
                    <tr style="text-align: center">
            <td>{{$stt++}}</td>
            <td style="text-align: left">{{$ct['tenpb']}}</td>
            <td>{{dinhdangso($ct['tong'])}}</td>

            <td>{{dinhdangso($ct['lv_gd'])}}</td>
            <td>{{dinhdangso($ct['lv_yt'])}}</td>
            <td>{{dinhdangso($ct['lv_nn'])}}</td>
            <td>{{dinhdangso($ct['lv_vh'])}}</td>
            <td>{{dinhdangso($ct['lv_kh'])}}</td>

            <td>{{dinhdangso($ct['nb_cvcc'])}}</td>
            <td>{{dinhdangso($ct['nb_cvc'])}}</td>
            <td>{{dinhdangso($ct['nb_cv'])}}</td>
            <td>{{dinhdangso($ct['nb_cs'])}}</td>
            <td>{{dinhdangso($ct['nb_cl'])}}</td>

            <td>{{dinhdangso($ct['ts'])}}</td>
            <td>{{dinhdangso($ct['ths'])}}</td>
            <td>{{dinhdangso($ct['dh'])}}</td>
            <td>{{dinhdangso($ct['cl'])}}</td>

            <td>{{dinhdangso($ct['ct_cc'])}}</td>
            <td>{{dinhdangso($ct['ct_tc'])}}</td>

            <td>{{dinhdangso($ct['th_dh'])}}</td>
            <td>{{dinhdangso($ct['th_cc'])}}</td>

            <td>{{dinhdangso($ct['nn_dh'])}}</td>
            <td>{{dinhdangso($ct['nn_cc'])}}</td>
            <td>{{dinhdangso($ct['kh_dh'])}}</td>
            <td>{{dinhdangso($ct['kh_cc'])}}</td>

            <td>{{dinhdangso($ct['t_d30'])}}</td>
            <td>{{dinhdangso($ct['t_d50'])}}</td>
            <td>{{dinhdangso($ct['t_t50nam']+$ct['t_t50nu'])}}</td>
            <td>Nam:{{dinhdangso($ct['t_t50nam'])}}<br>Nữ:{{dinhdangso($ct['t_t50nu'])}}</td>
            <td>{{dinhdangso($ct['t_nh'])}}</td>
            <td>{{dinhdangso($ct['dv'])}}</td>
            <td>{{dinhdangso($ct['gt'])}}</td>
            <td>{{dinhdangso($ct['dtin'])}}</td>
        </tr>
                @endif
            @endforeach
        @endforeach
    @endforeach
    <tr style="font-weight: bold; text-align: center">
        <td colspan="2">Tổng cộng</td>
        <td>{{dinhdangso(array_sum(array_column($model,'tong')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'lv_gd')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'lv_yt')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'lv_nn')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'lv_vh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'lv_kh')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'nb_cvcc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cvc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cv')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cs')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cl')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'ts')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'ths')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'cl')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'ct_cc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'ct_tc')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'th_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'th_cc')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'nn_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nn_cc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'kh_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'kh_cc')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'t_d30')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_d50')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_t50nam'))+array_sum(array_column($model,'t_t50nu')))}}</td>
        <td></td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_nh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'dv')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'gt')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'dtin')))}}</td>
    </tr>
</table>
<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:20px auto; text-align: center;">
    <tr>
        <td style="text-align: left;" width="50%"></td>
        <td style="text-align: center; font-style: italic" width="50%">........,Ngày......tháng.......năm..........</td>
    </tr>
    <tr style="font-weight: bold">
        <td style="text-align: center;" width="50%">Người lập bảng</td>
        <td style="text-align: center;" width="50%">Thủ trưởng đơn vị</td>
    </tr>
    <tr style="font-style: italic">
        <td style="text-align: center;" width="50%">(Ghi rõ họ tên)</td>
        <td style="text-align: center;" width="50%">((Ký tên, đóng dấu))</td>
    </tr>
    <tr>
        <td><br><br><br></td>
    </tr>

    <tr>
        <td style="text-align: center;" width="50%">{{$thongtin['nguoilap']}}</td>
        <td style="text-align: center;" width="50%">{{$m_dv->lanhdao}}</td>
    </tr>
</table>

</body>
</html>