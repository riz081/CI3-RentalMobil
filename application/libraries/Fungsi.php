<?php

class Fungsi
{
    function count_data($table)
    {
        $ci = get_instance();
        $ci->db->from($table);
        return $ci->db->count_all_results();
    }
}
