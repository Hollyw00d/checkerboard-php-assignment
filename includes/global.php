<?php
function create_checkerboard()
{
    for ($i = 0; $i < 4; $i++) {
        $red_black = "<div class='red'></div><div class='black'></div>";
        $black_red = "<div class='black'></div><div class='red'></div>";
        $red_first_row = $red_black . $red_black . $red_black . $red_black;
        $black_first_row = $black_red . $black_red . $black_red . $black_red;
        echo $red_first_row . $black_first_row;
    }
}
?>