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
<p style="text-align: center; font-weight: bold; font-size: 20px;">BÁO CÁO CHẤT LƯỢNG ĐẢNG VIÊN</p>
<p style="text-align: center; font-style: italic">Ngày báo cáo {{getDayVn($thongtin['ngaybaocao'])}}</p>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <thead>
    <tr>
        <th style="width: 4%" rowspan="2">STT</th>
        <th rowspan="2">Khối phòng ban</br>Đơn vị</th>
        <th style="width: 5%" rowspan="2">Tổng số</th>
        <th style="width: 22.5%" colspan="5">Chia theo trình độ chuyên môn</th>
        <th style="width: 22.5%" colspan="5">Chia theo độ tuổi</th>
        <th style="width: 22.5%" colspan="5">Chia theo tuổi đảng</th>
        <th style="width: 4.5%" rowspan="2">Phụ<br>nữ</th>
        <th style="width: 4.5%" rowspan="2">Dân tộc<br>ít người</th>
    </tr>
    <tr>
        <th style="width: 4.5%">Trên<br>ĐH</th>
        <th style="width: 4.5%">Đại<br>học</th>
        <th style="width: 4.5%">Cao<br>đẳng</th>
        <th style="width: 4.5%">Trung<br>cấp</th>
        <th style="width: 4.5%">Khác</th>

        <th style="width: 4.5%">Dưới 31</th>
        <th style="width: 4.5%">Từ 31-40</th>
        <th style="width: 4.5%">Từ 41-50</th>
        <th style="width: 4.5%">Từ 51-55</th>
        <th style="width: 4.5%">Trên 55</th>

        <th style="width: 4.5%">Dưới 5</th>
        <th style="width: 4.5%">Từ 5-10</th>
        <th style="width: 4.5%">Từ 11-20</th>
        <th style="width: 4.5%">Từ 21-30</th>
        <th style="width: 4.5%">Trên 30</th>
    </tr>
    </thead>
    @foreach($model_kpb as $pb)
        <?php $donvi=$model_dv->where('makhoipb',$pb->makhoipb); ?>
            <tr style="font-weight: bold; text-align: center">
            <td></td>
            <td style="text-align: left">{{$pb->tenkhoipb.' ( '.$donvi->count().' đơn vị)'}}</td>
            <td>{{dinhdangso($donvi->sum('tongcong'))}}</td>
            <td>{{dinhdangso($donvi->sum('trendh'))}}</td>
            <td>{{dinhdangso($donvi->sum('daihoc'))}}</td>
            <td>{{dinhdangso($donvi->sum('caodang'))}}</td>
            <td>{{dinhdangso($donvi->sum('trungcap'))}}</td>
            <td>{{dinhdangso($donvi->sum('khac'))}}</td>
            
            <td>{{dinhdangso($donvi->sum('d31'))}}</td>
            <td>{{dinhdangso($donvi->sum('d40'))}}</td>
            <td>{{dinhdangso($donvi->sum('d50'))}}</td>
            <td>{{dinhdangso($donvi->sum('d55'))}}</td>
            <td>{{dinhdangso($donvi->sum('dk'))}}</td>
            
            <td>{{dinhdangso($donvi->sum('dv5'))}}</td>
            <td>{{dinhdangso($donvi->sum('dv10'))}}</td>
            <td>{{dinhdangso($donvi->sum('dv20'))}}</td>
            <td>{{dinhdangso($donvi->sum('dv30'))}}</td>
            <td>{{dinhdangso($donvi->sum('dvk'))}}</td>
            
            <td>{{dinhdangso($donvi->sum('nu'))}}</td>
            <td>{{dinhdangso($donvi->sum('thieuso'))}}</td>
        </tr>
            <?php $stt=1;?>
            @foreach($donvi as $ct)
                <tr style="text-align: center">
                    <td>{{$stt++}}</td>
                    <td style="text-align: left">{{$ct->tendv}}</td>
                    <td>{{dinhdangso($ct->tongcong)}}</td>
                    <td>{{dinhdangso($ct->trendh)}}</td>
                    <td>{{dinhdangso($ct->daihoc)}}</td>
                    <td>{{dinhdangso($ct->caodang)}}</td>
                    <td>{{dinhdangso($ct->trungcap)}}</td>
                    <td>{{dinhdangso($ct->khac)}}</td>

                    <td>{{dinhdangso($ct->d31)}}</td>
                    <td>{{dinhdangso($ct->d40)}}</td>
                    <td>{{dinhdangso($ct->d50)}}</td>
                    <td>{{dinhdangso($ct->d55)}}</td>
                    <td>{{dinhdangso($ct->dk)}}</td>

                    <td>{{dinhdangso($ct->dv5)}}</td>
                    <td>{{dinhdangso($ct->dv10)}}</td>
                    <td>{{dinhdangso($ct->dv20)}}</td>
                    <td>{{dinhdangso($ct->dv30)}}</td>
                    <td>{{dinhdangso($ct->dvk)}}</td>

                    <td>{{dinhdangso($ct->nu)}}</td>
                    <td>{{dinhdangso($ct->thieuso)}}</td>
                </tr>
            @endforeach
    @endforeach

    <tr style="font-weight: bold; text-align: center">
        <td></td>
        <td>Tổng cộng</td>
        <td>{{dinhdangso($model_dv->sum('tongcong'))}}</td>
        <td>{{dinhdangso($model_dv->sum('trendh'))}}</td>
        <td>{{dinhdangso($model_dv->sum('daihoc'))}}</td>
        <td>{{dinhdangso($model_dv->sum('caodang'))}}</td>
        <td>{{dinhdangso($model_dv->sum('trungcap'))}}</td>
        <td>{{dinhdangso($model_dv->sum('khac'))}}</td>

        <td>{{dinhdangso($model_dv->sum('d31'))}}</td>
        <td>{{dinhdangso($model_dv->sum('d40'))}}</td>
        <td>{{dinhdangso($model_dv->sum('d50'))}}</td>
        <td>{{dinhdangso($model_dv->sum('d55'))}}</td>
        <td>{{dinhdangso($model_dv->sum('dk'))}}</td>

        <td>{{dinhdangso($model_dv->sum('dv5'))}}</td>
        <td>{{dinhdangso($model_dv->sum('dv10'))}}</td>
        <td>{{dinhdangso($model_dv->sum('dv20'))}}</td>
        <td>{{dinhdangso($model_dv->sum('dv30'))}}</td>
        <td>{{dinhdangso($model_dv->sum('dvk'))}}</td>

        <td>{{dinhdangso($model_dv->sum('nu'))}}</td>
        <td>{{dinhdangso($model_dv->sum('thieuso'))}}</td>
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