<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArticleModel {
    public static function semua() {
        $article = DB::table('article')->get();
        return $article;
    }

    public static function simpan($data) {
        $articles = DB::table('article')->insert($data);
        return $articles;
    }

    public static function tampil($id){
        $tampil = DB::table('article')->where('id', $id)->first();
        $tampil->slug = Str::slug($tampil->judul);
        return $tampil;
    }

    public static function update($id, $request) {
        $update = DB::table('article')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"],
                'tag' => $request["tag"],
            ]);
        return $update;
    }

    public static function destroy($id) {
        $delete = DB::table('article')->where('id', $id)->delete();
        return $delete;
    }
}