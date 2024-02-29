<?php
function chuhoa($ten)
{
    return mb_strtoupper($ten, "utf-8");
}

function get_gia($gia)
{
    return number_format($gia, 0, '', '.') . 'VNĐ';
}
