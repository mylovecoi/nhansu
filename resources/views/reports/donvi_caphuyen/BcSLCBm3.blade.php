<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$pageTitle}}</title>
    <style type="text/css">
        body {
            font: normal 14px/16px time, serif;
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
<body style="font:normal 14px Times, serif;">

<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:0 auto 25px; text-align: center;">
    <tr>
        <td  style="text-align: left">
            <b>Đơn vị chủ quản: {{$m_dv->tenct}}</b>
        </td>
    </tr>
    <tr>
        <td style="text-align: left">
            <b>Đơn vị: {{$m_dv->tendv}}</b>
        </td>
    </tr>
</table>
<p style="text-align: center; font-weight: bold; font-size: 20px;">BÁO CÁO ĐỘI NGŨ CÁN BỘ</p>
<p style="text-align: center; font-style: italic">Ngày báo cáo {{getDayVn($thongtin['ngaybaocao'])}}</p>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <thead>
    <tr>
        <th style="width: 7%" rowspan="2">STT</th>
        <th rowspan="2">Khối phòng ban</br>Đơn vị</th>
        <th style="width: 20%" colspan="3">Tổng số</th>
        <th style="width: 35%" colspan="5">Phân loại cán bộ</th>
        <th style="width: 15%" colspan="2">Đảng viên</th>
    </tr>
    <tr>
        <th style="width: 7%">Tổng</th>
        <th style="width: 7%">Nữ</th>
        <th style="width: 7%">Dân<br>tộc</th>
        <th style="width: 7%">Trên<br>ĐH</th>
        <th style="width: 7%">Đại<br>học</th>
        <th style="width: 7%">Cao<br>đẳng</th>
        <th style="width: 7%">Trung<br>cấp</th>
        <th style="width: 7%">Khác</th>
        <th style="width: 7%">Tổng</th>
        <th style="width: 7%">Nữ</th>
    </tr>
    </thead>
    @foreach($model_kpb as $pb)
        <?php $donvi=$model_dv->where('makhoipb',$pb->makhoipb); ?>
            <tr style="font-weight: bold; text-align: center">
            <td></td>
            <td style="text-align: left">{{$pb->tenkhoipb.' ( '.$donvi->count().' đơn vị)'}}</td>
                <td>{{dinhdangso($donvi->sum('tongcong'))}}</td>
                <td>{{dinhdangso($donvi->sum('nu'))}}</td>
                <td>{{dinhdangso($donvi->sum('thieuso'))}}</td>
                <td>{{dinhdangso($donvi->sum('trendh'))}}</td>
                <td>{{dinhdangso($donvi->sum('daihoc'))}}</td>
                <td>{{dinhdangso($donvi->sum('caodang'))}}</td>
                <td>{{dinhdangso($donvi->sum('trungcap'))}}</td>
                <td>{{dinhdangso($donvi->sum('khac'))}}</td>
                <td>{{dinhdangso($donvi->sum('dangvien'))}}</td>
                <td>{{dinhdangso($donvi->sum('dangviennu'))}}</td>
        </tr>
        <?php $stt=1;?>
        @foreach($donvi as $ct)
            <tr style="text-align: center">
                <td>{{$stt++}}</td>
                <td style="text-align: left">{{$ct->tendv}}</td>
                <td>{{dinhdangso($ct->tongcong)}}</td>
                <td>{{dinhdangso($ct['nu'])}}</td>
                <td>{{dinhdangso($ct['thieuso'])}}</td>
                <td>{{dinhdangso($ct['trendh'])}}</td>
                <td>{{dinhdangso($ct['daihoc'])}}</td>
                <td>{{dinhdangso($ct['caodang'])}}</td>
                <td>{{dinhdangso($ct['trungcap'])}}</td>
                <td>{{dinhdangso($ct['khac'])}}</td>
                <td>{{dinhdangso($ct['dangvien'])}}</td>
                <td>{{dinhdangso($ct['dangviennu'])}}</td>
            </tr>
        @endforeach
    @endforeach

    <tr style="font-weight: bold; text-align: center">
        <td></td>
        <td>Tổng cộng ({{$model_dv->count()}} đơn vị)</td>
        <td>{{dinhdangso($model_dv->sum('tongcong'))}}</td>
        <td>{{dinhdangso($model_dv->sum('nu'))}}</td>
        <td>{{dinhdangso($model_dv->sum('thieuso'))}}</td>
        <td>{{dinhdangso($model_dv->sum('trendh'))}}</td>
        <td>{{dinhdangso($model_dv->sum('daihoc'))}}</td>
        <td>{{dinhdangso($model_dv->sum('caodang'))}}</td>
        <td>{{dinhdangso($model_dv->sum('trungcap'))}}</td>
        <td>{{dinhdangso($model_dv->sum('khac'))}}</td>
        <td>{{dinhdangso($model_dv->sum('dangvien'))}}</td>
        <td>{{dinhdangso($model_dv->sum('dangviennu'))}}</td>
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