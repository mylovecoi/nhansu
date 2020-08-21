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
            <b>Mẫu số 03</b>
        </td>
    </tr>
    <tr>
        <td style="text-align: left;width: 60%">
            <b>Đơn vị: {{$m_dv->tendv}}</b>
        </td>
        <td  style="text-align: center; font-style: italic">
            (Ban hành kèm theo Thông tư số 09/2004/TT-BNV ngày 19/02/2004 của Bộ Nội vụ)
        </td>
    </tr>
</table>
<p style="text-align: center; font-weight: bold; font-size: 20px;">BÁO CÁO DANH SÁCH VIÊN CHỨC THEO HỆ THỐNG TỔ CHỨC</p>
<p style="text-align: center; font-style: italic">Ngày báo cáo {{getDayVn($thongtin['ngaybaocao'])}}</p>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <thead>
    <tr style="padding-left: 2px;padding-right: 2px">
        <th style="width: 2%;padding-left: 2px;padding-right: 2px" rowspan="4">STT</th>
        <th style="width: 7%;padding-left: 2px;padding-right: 2px" rowspan="4">Họ và tên</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="4">Ngày sinh</th>
        <th rowspan="4">Quê quán</th>
        <th style="width: 7%;padding-left: 2px;padding-right: 2px" rowspan="4">Chức vụ</th>
        <th style="width: 7%;padding-left: 2px;padding-right: 2px" rowspan="4">Đơn vị công tác</th>
        <th rowspan="2" colspan="3">Ngạch, bậc lương hiện hưởng</th>
        <th colspan="14">Trình độ đào tạo</th>
        <th rowspan="2" colspan="2">Chức danh khoa học</th>
        <th style="width: 2%;padding-left: 2px;padding-right: 2px" rowspan="4">Đảng viên</th>
        <th style="width: 2%;padding-left: 2px;padding-right: 2px" rowspan="4">Phụ nữ</th>
        <th style="width: 2%;padding-left: 2px;padding-right: 2px" rowspan="4">Dân tộc ít người</th>
    </tr>
    <tr style="padding-left: 2px;padding-right: 2px">
        <th colspan="6">Chuyên môn</th>
        <th colspan="2">Chính trị</th>
        <th colspan="2">Tin học</th>
        <th colspan="4">Ngoại ngữ</th>
    </tr>
    <tr style="padding-left: 2px;padding-right: 2px">
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Mã ngạch</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Hệ số lương</th>
        <th rowspan="2" style="width: 6%;padding-left: 2px;padding-right: 2px">Thời gian hưởng</th>

        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Tiến sĩ</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Thạc sĩ</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Đại học</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Cao đẳng</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Trung học</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Còn lại</th>

        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Cao cấp</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Trung cấp</th>

        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Đại học</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Chứng chỉ</th>

        <th colspan="2">Anh văn</th>
        <th colspan="2">Ngoại ngữ khác</th>

        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Giáo sư</th>
        <th rowspan="2" style="width: 2%;padding-left: 2px;padding-right: 2px">Phó giáo sư</th>
    </tr>

    <tr style="padding-left: 2px;padding-right: 2px">
        <th style="width: 2%;padding-left: 2px;padding-right: 2px">Đại học</th>
        <th style="width: 2%;padding-left: 2px;padding-right: 2px">Chứng chỉ</th>

        <th style="width: 2%;padding-left: 2px;padding-right: 2px">Đại học</th>
        <th style="width: 2%;padding-left: 2px;padding-right: 2px">Chứng chỉ</th>
    </tr>

    <tr>
        @for($i=1;$i<=28;$i++)
        <th>{{$i}}</th>
        @endfor
    </tr>
    </thead>
    @foreach($model_kpb as $pb)
        <?php $donvi=$model_dv->where('makhoipb',$pb->makhoipb); ?>
        <tr style="font-weight: bold; text-align: center">
            <td></td>
            <td colspan="27" style="text-align: left">{{$pb->tenkhoipb.' ( '.$donvi->count().' đơn vị)'}}</td>

        </tr>
        <?php $i=1;?>
        @foreach($donvi as $dv)
            <tr style="font-weight: bold; text-align: center; font-style: italic">
                <td>{{$i++}}</td>
                <td colspan="27" style="text-align: left">{{$dv->tendv}}</td>

            </tr>
            <?php $stt=1; ?>

            @foreach($model as $ct)
                @if($ct['madv']==$dv->madv)
                    <tr>
                        <td>{{$stt++}}</td>
                        <td>{{$ct['tencanbo']}}</td>
                        <td>{{getDayVn($ct['ngaysinh'])}}</td>
                        <td>{{$ct['qqxa'].'-'.$ct['qqhuyen'].'-'.$ct['qqtinh']}}</td>
                        <td>{{$ct['tencv']}}</td>
                        <td>{{$ct['tenpb']}}</td>
                        <td>{{$ct['msngbac']}}</td>
                        <td>{{$ct['heso']}}</td>
                        <td>{{getDayVn($ct['ngaytu'])}}</td>
                        <td>{{dinhdangso($ct['ts'])}}</td>
                        <td>{{dinhdangso($ct['ths'])}}</td>
                        <td>{{dinhdangso($ct['dh'])}}</td>
                        <td>{{dinhdangso($ct['cd'])}}</td>
                        <td>{{dinhdangso($ct['th'])}}</td>
                        <td>{{dinhdangso($ct['cl'])}}</td>
                        <td>{{dinhdangso($ct['ct_cc'])}}</td>
                        <td>{{dinhdangso($ct['ct_tc'])}}</td>
                        <td>{{dinhdangso($ct['th_dh'])}}</td>
                        <td>{{dinhdangso($ct['th_cc'])}}</td>
                        <td>{{dinhdangso($ct['nn_dh'])}}</td>
                        <td>{{dinhdangso($ct['nn_cc'])}}</td>
                        <td>{{dinhdangso($ct['kh_dh'])}}</td>
                        <td>{{dinhdangso($ct['kh_cc'])}}</td>
                        <td>{{dinhdangso(0)}}</td>
                        <td>{{dinhdangso(0)}}</td>
                        <td>{{dinhdangso($ct['dv'])}}</td>
                        <td>{{dinhdangso($ct['gt'])}}</td>
                        <td>{{dinhdangso($ct['dtin'])}}</td>
                    </tr>
                    @endif
                @endforeach
            @endforeach
    @endforeach
    <tr style="font-weight: bold; text-align: center">
        <td colspan="9">Tổng cộng</td>
        <td>{{dinhdangso(array_sum(array_column($model,'ts')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'ths')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'cd')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'th')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'cl')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'ct_cc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'ct_tc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'th_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'th_cc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nn_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'nn_cc')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'kh_dh')))}}</td>
        <td>{{dinhdangso(array_sum(array_column($model,'kh_cc')))}}</td>
        <td>{{dinhdangso(0)}}</td>
        <td>{{dinhdangso(0)}}</td>
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