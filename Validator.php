<?php
class Validator {

    //Pure method - tāpēc static
    static public function string($data, $min = 0, $max = INF) {
        $data = trim($data);

        return  is_string($data) 
                && strlen($data) >= $min 
                && strlen($data) <= $max;
    }

    static public function category($category, $categoryList) {
        return in_array($category, $categoryList);
    }
}
?>