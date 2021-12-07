<?php

use Illuminate\Support\Facades\DB;

api_expose('save_bag');
function save_bag($data)
{
    if (!is_admin()) {
        return;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
   
    return DB::table('bags')->insert([
        'code' => $data['code'],
        'created_at' => $date,
       
    ]);
}
api_expose('edit_bag');
function edit_bag($data)
{
    if (!is_admin()) {
        return;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    return DB::table('bag')->where('id',$data['edit_id'])->update([
        'code'=> $data['code_edit']
    ]);
}

function get_bag($params = array())
{
    if (is_string($params)) {
        $params = parse_params($params);
    }
    $params['table'] = "bags";
    DB::table('bag')->get();
    return db_get($params);
}

api_expose('delete_bag');
function delete_bag($params)
{
    if (!is_admin()) {
        return;
    }
    if (isset($params['id'])) {
        $table = "bag";
        $id = $params['id'];
        return db_delete($table, $id);
    }
}
