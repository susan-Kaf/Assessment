<?php
    function convert($number, $precision)
    {
        $num_array=explode('.', $number);
        $num_array[1]=substr_replace($num_array[1],'.',$precision,0);
        $num_array[1]=floor($num_array[1]);
        $floor_num= array($num_array[0],$num_array[1]);
        return print_r(implode('.',$floor_num));
    }
    convert(2.99999,2);
    convert(199.99999,4);

?>