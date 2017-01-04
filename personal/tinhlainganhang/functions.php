<?php
define('SO_DOT_GIAI_NGAN', 7);

function convert_date($vn_date, $include_day = true, $first = false, $sep = '-')
{
    $rt = '';
    if ($vn_date != '') {
        $tmp = explode('/', $vn_date);
        $d = $tmp[0];
        $m = $tmp[1];
        $y = $tmp[2];
        if ($include_day) {
            if ($first) {
                $rt = new DateTime($y . $sep . $m . $sep . '01');
            } else {
                $rt = new DateTime($y . $sep . $m . $sep . $d);
            }
        } else {
            if ($sep != '-') {
                $rt = $y . $sep . $m;
            } else {
                $rt = new DateTime($y . $sep . $m);
            }
        }
    }
    return $rt;
}