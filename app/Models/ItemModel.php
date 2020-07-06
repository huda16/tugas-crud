<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ItemModel
{
    public static function get_all()
    {
        $items = DB::table('pertanyaan')->get();
        return $items;
    }
    public static function save($data)
    {
        // data _token dibuang
        unset($data["_token"]);
        $new_item = DB::table('pertanyaan')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id)
    {
        $item = DB::table('pertanyaan')->where('id', $id)->first();
        return $item;
    }

    public static function update($id, $request)
    {
        $item = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"],
                'created_at' => $request["created_at"],
                'updated_at' => $request["updated_at"],
            ]);
        return $item;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('pertanyaan')
            ->where('id', $id)
            ->delete();
        return $deleted;
    }
}
