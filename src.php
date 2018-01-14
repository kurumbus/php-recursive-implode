function implode_recursive($array, $glue = '.') {
    $return = '';

    foreach ($array as $key => $value) {
        if (! is_int($key)) {
            $return .= $key.$glue;
        }

        if (is_array($value)) {
            $return .= implode_recursive($value, $glue) . $glue;
        } else {
            $return .= $value . $glue;
        }
    }

    $return = substr($return, 0, 0-strlen($glue));

    return $return;
}

$array = [['k1'=>['v1','v2']],['k2'=>'v3'], ['k3' => ['k4'=>['v4','k5'=>['v5']]]], 'k6'=>'v6'];
echo(implode_recursive($array));
//// Should return "k1.v1.v2.k2.v3.k3.k4.v4.k5.v5.k6.v6"
