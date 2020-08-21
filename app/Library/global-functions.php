<?php
function getPermissionDefault($level) {
    $roles = array();
    $model = array_column( \App\dmbaomat::select('macapdo','default_val')->where('level',$level)->get()->toarray(),'default_val','macapdo');
    $roles[] = array(
        'data' => array(
            'units' => 0,
            'create' => 1,
            'edit' => 1,
            'delete' => 1,
            'reports'=> 0
        ),
        'system' => array(
            'information' => 1,
            'create' => 0,
            'edit' => 0,
            'delete' => 0
        ),'view' =>$model
    );
    return json_encode($roles[0]);
}

function getDayVn($date) {
    if ($date == NULL || $date == null || $date == '' || $date == '0000-00-00') {
        return '';
    } else {
        return date('d/m/Y', strtotime($date));
    }
}

function getDateTime($date) {
    if($date != '')
        return $date;
    else
        return NULL;
}

function getDbl($obj) {
    $obj=str_replace(',','',$obj);
    $obj=str_replace('.','',$obj);
    if(is_numeric($obj)){
        return $obj;
    }else {
        return 0;
    }
}

function chkDbl($obj) {
    //$obj=str_replace(',','',$obj);
    //$obj=str_replace('.','',$obj);
    if(is_numeric($obj)){
        return $obj;
    }else {
        return 0;
    }
}

function can($module = null, $action = null)
{
    $permission = !empty(session('admin')->permission) ? session('admin')->permission : getPermissionDefault(session('admin')->level);
    $permission = json_decode($permission, true);
    //check permission
    if(isset($permission[$module][$action]) && $permission[$module][$action] == 1) {
        return true;
    }else{
        return false;
    }
}

function canGeneral($module = null, $action =null)
{
    $model = \App\GeneralConfigs::first();
    $setting = json_decode($model->setting, true);

    if(isset($setting[$module][$action]) && $setting[$module][$action] ==1 )
        return true;
    else
        return false;
}

function canDvCc($module = null, $action = null)
{
    $permission = !empty(session('ttdnvt')->dvcc) ? session('ttdnvt')->dvcc : getDvCcDefault('T');
    $permission = json_decode($permission, true);

    //check permission
    if(isset($permission[$module][$action]) && $permission[$module][$action] == 1) {
        return true;
    }else
        return false;
}

function canDV($perm=null,$module = null, $action = null){
    if($perm == ''){
        return false;
    }else {
        $permission = json_decode($perm,true);
        if (isset($permission[$module][$action]) && $permission[$module][$action] == 1) {
            return true;
        } else
            return false;
    }
}

function getGeneralConfigs() {
    return \App\GeneralConfigs::all()->first()->toArray();
}

function getDouble($str)
{
    $sKQ = 0;
    $str = str_replace(',','',$str);
    $str = str_replace('.','',$str);
    //if (is_double($str))
    $sKQ = $str;
    return floatval($sKQ);
}

function canDVVT($setting = null,$module = null, $action = null){
    $setting = json_decode($setting, true);

    //check permission
    if(isset($setting[$module][$action]) && $setting[$module][$action] == 1) {
        return true;
    }else
        return false;
}

function canshow($module = null, $action = null)
{
    $permission = !empty(session('admin')->dvvtcc) ? session('admin')->dvvtcc : '{"dvvt":{"vtxk":"1","vtxb":"1","vtxtx":"1","vtch":"1"}}';
    $permission = json_decode($permission, true);

    //check permission
    if(isset($permission[$module][$action]) && $permission[$module][$action] == 1) {
        return true;
    }else
        return false;
}

function chuyenkhongdau($str)
{
    if (!$str) return false;
    $utf8 = array(
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'd' => 'đ|Đ',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'i' => 'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'y' => 'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
    );
    foreach ($utf8 as $ascii => $uni) $str = preg_replace("/($uni)/i", $ascii, $str);
     return $str;
}

function chuanhoachuoi($text)
{
    $text = strtolower(chuyenkhongdau($text));
    $text = str_replace("ß", "ss", $text);
    $text = str_replace("%", "", $text);
    $text = preg_replace("/[^_a-zA-Z0-9 -]/", "", $text);
    $text = str_replace(array('%20', ' '), '-', $text);
    $text = str_replace("----", "-", $text);
    $text = str_replace("---", "-", $text);
    $text = str_replace("--", "-", $text);
    return $text;
}

function chuanhoatruong($text)
{
    $text = strtolower(chuyenkhongdau($text));
    $text = str_replace("ß", "ss", $text);
    $text = str_replace("%", "", $text);
    $text = preg_replace("/[^_a-zA-Z0-9 -]/", "", $text);
    $text = str_replace(array('%20', ' '), '_', $text);
    $text = str_replace("____", "_", $text);
    $text = str_replace("___", "_", $text);
    $text = str_replace("__", "_", $text);
    return $text;
}

function removespace($text)
{
    $text = trim($text);
    $text = str_replace(array('%20', ' '), '_', $text);
    $text = str_replace("____", "_", $text);
    $text = str_replace("___", "_", $text);
    $text = str_replace("__", "_", $text);
    $text = str_replace("_", " ", $text);
    return $text;
}

function getPhanTram1($giatri, $thaydoi){
    $kq=0;
    if($thaydoi==0||$giatri==0){
        return '';
    }
    if($giatri<$thaydoi){
        $kq=round((($thaydoi-$giatri)/$giatri)*100,2).'%';
    }else{
        $kq='-'.round((($giatri-$thaydoi)/$giatri)*100,2).'%';
    }
    return $kq;
}

function getPhanTram2($giatri, $thaydoi){
    if($thaydoi==0||$giatri==0){
        return '';
    }
    return round(($thaydoi/$giatri)*100,2).'%';
}

function getConditions($inputs, $exists, $table)
{
    $b_dk = false;
    $s_sql = '';
    if(!is_array($inputs)) return $s_sql;

    foreach ($inputs as $key => $value) {
        if (in_array($key,$exists) || $value == '') continue;
        if ($b_dk) {
            $s_sql .= ' and ';
        }
        if (strtotime($value)) {
            if($key=='tungay'){$s_sql .= $table.'.'.$key . ">='" . $value . "'";}
            else{$s_sql .= $table.'.'.$key . "<='" . $value . "'";}
        } else {
            $s_sql .= $table.'.'.$key . "='" . $value . "'";
        }
        $b_dk = true;
    }
    return $s_sql;
}
function convert2date($ngaythang){
    if($ngaythang==''){
        return null;
    }
    return date('Y-m-d', strtotime(str_replace('/', '-', $ngaythang)));
}

//$unit = 1 => đơn vị tính đồng
//$unit = 2 => đơn vị tính nghìn đồng
//$unit = 3 => đơn vị tính triệu đồng
function dinhdangso ($number , $decimals = 0, $unit = '1' , $dec_point = ',' , $thousands_sep = '.' ) {
    if(!is_numeric($number) || $number == 0){return '';}
    $r = $unit;

    switch ($unit) {
        case 2:{
            $decimals = 3;
            $r = 1000;
            break;
        }
        case 3:{
            $decimals = 5;
            $r = 1000000;
            break;
        }
    }

    $number = round($number / $r , $decimals);
    return number_format($number, $decimals ,$dec_point, $thousands_sep);
}

function trim_zeros($str) {
    if(!is_string($str)) return $str;
    return preg_replace(array('`\.0+$`','`(\.\d+?)0+$`'),array('','$1'),$str);
}

function dinhdangsothapphan ($number , $decimals = 0) {
    if(!is_numeric($number) || $number == 0){return '';}
    $number = round($number , $decimals);
    $str_kq = trim_zeros(number_format($number, $decimals ));
    for ($i = 0; $i < strlen($str_kq); $i++){
        if($str_kq[$i]== '.'){
            $str_kq[$i]= ',';
        }elseif($str_kq[$i]== ','){
            $str_kq[$i]= '.';
        }
    }
    //$a_so = str_split($str_kq);

    //$str_kq = str_replace(",", ".", $str_kq);
    //$str_kq = str_replace(".", ",", $str_kq);
    return $str_kq;
    //return number_format($number, $decimals ,$dec_point, $thousands_sep);
    //làm lại hàm chú ý đo khi các số thập phân nếu làm tròn thi ko bỏ dc số 0 đằng sau dấu ,
    // round(5.4,4) = 5,4000
}

?>