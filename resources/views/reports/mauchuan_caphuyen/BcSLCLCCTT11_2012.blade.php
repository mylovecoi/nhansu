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
        <td style="width: 20%">
            <b>BM01/BNV</b>
            </br>(Ban hành kèm theo Thông tư số 11/2012/TT-BNV ngày 17 tháng 12 năm 2012 của Bộ Nội vụ)
        </td>
        <td>
            <p style="text-align: center; font-weight: bold; font-size: 20px;">BÁO CÁO SỐ LƯỢNG, CHẤT LƯỢNG CÔNG CHỨC TỪ CẤP HUYỆN TRỞ LÊN NĂM 2017</p>
            <p style="text-align: center; font-style: italic">Ngày báo cáo {{getDayVn($thongtin['ngaybaocao'])}}</p>
        </td>
        <td style="width: 30%; text-align: left">
            Đơn vị báo cáo: {{$m_dv->tendv}}
            </br>Đơn vị nhận báo cáo: {{$m_dv->tenct}}
            </br>Đơn vị tính: người
        </td>
    </tr>
</table>


<table id="noidung" cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <thead>
    <tr>
        <th style="width: 2%" rowspan="4">STT</th>
        <th rowspan="4">Khối phòng ban</br>Đơn vị</th>
        <th style="width: 2%" rowspan="4">Tổng số biên chế được giao</th>
        <th style="width: 2%" rowspan="4">Tổng số công chức hiện có</th>
        <th colspan="4">Trong đó</th>
        <th colspan="5">Chia theo ngạch viên chức</th>
        <th colspan="20">Chia theo trình độ</th>
        <th colspan="7">Chia theo độ tuổi</th>
    </tr>
    <tr>
        <th style="width: 2%" rowspan="3">Đảng viên</th>
        <th style="width: 2%" rowspan="3">Phụ nữ</th>
        <th style="width: 2%" rowspan="3">Dân tộc ít người</th>
        <th style="width: 2%" rowspan="3">Tôn giáo</th>

        <th rowspan="3" style="width: 2%">Chuyên viên cao cấp và TĐ</th>
        <th rowspan="3" style="width: 2%">Chuyên viên chính và TĐ</th>
        <th rowspan="3" style="width: 2%">Chuyên viên và tương đương</th>
        <th rowspan="3" style="width: 2%">Cán sự và tương đương</th>
        <th rowspan="3" style="width: 2%">Nhân viên</th>

        <th colspan="6">Chuyên môn</th>
        <th colspan="4">Chính trị</th>
        <th colspan="2">Tin học</th>
        <th colspan="4">Ngoại ngữ</th>
        <th rowspan="3">Chứng chỉ tiếng dân tộc</th>
        <th colspan="3">QLNN</th>

        <th rowspan="3" style="width: 2%">Dưới 30</th>
        <th rowspan="3" style="width: 2%">Từ 31 đến 40</th>
        <th rowspan="3" style="width: 2%">Từ 41 đến 50</th>
        <th colspan="3">Trên 51 đến 60</th>
        <th rowspan="3" style="width: 2%">Trên tuổi nghỉ hưu</th>
    </tr>

    <tr>
        <th rowspan="2" style="width: 2%">Tiến sĩ</th>
        <th rowspan="2" style="width: 2%">Thạc sĩ</th>
        <th rowspan="2" style="width: 2%">Đại học</th>
        <th rowspan="2" style="width: 2%">Cao đẳng</th>
        <th rowspan="2" style="width: 2%">Trung cấp</th>
        <th rowspan="2" style="width: 2%">Sơ cấp</th>

        <th rowspan="2" style="width: 2%">Cử nhân</th>
        <th rowspan="2" style="width: 2%">Cao cấp</th>
        <th rowspan="2" style="width: 2%">Trung cấp</th>
        <th rowspan="2" style="width: 2%">Sơ cấp</th>

        <th rowspan="2" style="width: 2%">Trung cấp trở lên</th>
        <th rowspan="2" style="width: 2%">Chứng chỉ</th>

        <th colspan="2">Anh văn</th>
        <th colspan="2">Ngoại ngữ khác</th>

        <th rowspan="2" style="width: 2%">Chuyên viên cao cấp và TĐ</th>
        <th rowspan="2" style="width: 2%">Chuyên viên chính và TĐ</th>
        <th rowspan="2" style="width: 2%">Chuyên viên và tương đương</th>

        <th rowspan="2" style="width: 2%">Tổng số</th>
        <th rowspan="2" style="width: 4%">Nữ từ 51 đến 55</th>
        <th rowspan="2" style="width: 4%">Nam từ 56 đến 60</th>
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
        @for($i=1;$i<=38;$i++)
        <th>{{$i}}</th>
        @endfor
    </tr>
    </thead>
    @foreach($model_kpb as $pb)
        <?php $donvi=$model_dv->where('makhoipb',$pb->makhoipb); ?>
        <tr style="font-weight: bold; text-align: center">
            <td></td>
            <td colspan="39" style="text-align: left">{{$pb->tenkhoipb.' ( '.$donvi->count().' đơn vị)'}}</td>

        </tr>
        <?php $i=1;?>
        @foreach($donvi as $dv)
            <tr style="font-weight: bold; text-align: center; font-style: italic">
                <td>{{$i++}}</td>
                <td colspan="39" style="text-align: left">{{$dv->tendv}}</td>

            </tr>
            <?php $stt=1; ?>

            @foreach($model as $ct)
                @if($ct['madv']==$dv->madv)
                    <tr style="text-align: center">
            <td>-</td>
            <td style="text-align: left">{{$dv->tendv}}</td>
            <td>{{dinhdangso($ct['tong'])}}</td>
            <td>{{dinhdangso($ct['tong'])}}</td>

            <td>{{dinhdangso($ct['dv'])}}</td>
            <td>{{dinhdangso($ct['gt'])}}</td>
            <td>{{dinhdangso($ct['dtin'])}}</td>
            <td><!--$ct['tongiao']-->0</td>

            <td>{{dinhdangso($ct['nb_cvcc'])}}</td>
            <td>{{dinhdangso($ct['nb_cvc'])}}</td>
            <td>{{dinhdangso($ct['nb_cv'])}}</td>
            <td>{{dinhdangso($ct['nb_cs'])}}</td>
            <td>{{dinhdangso($ct['nb_cl'])}}</td>

            <td>{{dinhdangso($ct['ts'])}}</td>
            <td>{{dinhdangso($ct['ths'])}}</td>
            <td>{{dinhdangso($ct['dh'])}}</td>
            <td>{{dinhdangso(0)}}</td>
            <td>{{dinhdangso(0)}}</td>
            <td>{{dinhdangso($ct['cl'])}}</td>

            <td>{{dinhdangso($ct['ct_cc'])}}</td>
            <td>{{dinhdangso($ct['ct_tc'])}}</td>

            <td>{{dinhdangso($ct['th_dh'])}}</td>
            <td></td>
            <td></td>
            <td>{{dinhdangso($ct['th_cc'])}}</td>

            <td>{{dinhdangso($ct['nn_dh'])}}</td>
            <td>{{dinhdangso($ct['nn_cc'])}}</td>
            <td>{{dinhdangso($ct['kh_dh'])}}</td>
            <td>{{dinhdangso($ct['kh_cc'])}}</td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td>{{dinhdangso($ct['t_d30'])}}</td>
            <td>{{dinhdangso($ct['t_d40'])}}</td>
            <td>{{dinhdangso($ct['t_d50'])}}</td>
            <td>{{dinhdangso($ct['t_t50nam']+$ct['t_t50nu'])}}</td>
            <td>{{dinhdangso($ct['t_t50nu'])}}</td>
            <td>{{dinhdangso($ct['t_t50nam'])}}</td>
            <td>{{dinhdangso($ct['t_nh'])}}</td>
        </tr>
                @endif
            @endforeach
        @endforeach
    @endforeach
    <tr style="font-weight: bold; text-align: center">
        <td colspan="2">Tổng cộng</td>

        <td>{{dinhdangso(array_sum(array_column($model,'tong')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'tong')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'dv')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'gt')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'dtin')))}}</td>
        <td>0</td>

        <td>{{dinhdangso(array_sum(array_column($model,'nb_cvcc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cvc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cv')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cs')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nb_cl')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'ts')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'ths')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'dh')))}}</td>
        <td>{{dinhdangso(0)}}</td>
        <td>{{dinhdangso(0)}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'cl')))}}</td>

        <td></td>
        <td></td>
        <td>{{dinhdangso(array_sum(array_column($model,'ct_cc')))}}</td>
        <td></td>

        <td>{{dinhdangso(array_sum(array_column($model,'th_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'th_cc')))}}</td>

        <td>{{dinhdangso(array_sum(array_column($model,'nn_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nn_cc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'kh_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'kh_cc')))}}</td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td>{{dinhdangso(array_sum(array_column($model,'t_d30')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_d40')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_t50')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_t50nu'))+array_sum(array_column($model,'t_t50nam')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_t50nu')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_t50nam')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'t_nh')))}}</td>
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