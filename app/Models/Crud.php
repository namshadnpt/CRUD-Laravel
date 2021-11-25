<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Crud extends Model
{

    public function save_data($data = [], $id = 0)
    {
        try {
            if ($id > 0) {
                $key = DB::table('cruds')
                    ->where('id', $id)
                    ->update($data);
            } else {
                $key = DB::table('cruds')->insertGetId($data);
            }
            return $key;
        } catch (Exception $e) {
            // dd($e);
            // exit;
        }
    }

    public function get_list_data()
    {
        try {
            return DB::table('cruds')
                ->select('*')
                ->orderBy('id', 'DESC')
                ->get();
        } catch (Exception $e) {
        }
    }

    public function get_row($id = 0)
    {
        try {
            return DB::table('cruds')
                ->where('id', '=', $id)
                ->first();
        } catch (Exception $e) {
        }
    }

    public function delete_row($id = 0)
    {
        try {
            return DB::table('cruds')
                ->where('id', '=', $id)
                ->delete();
        } catch (Exception $e) {
        }
    }
}
