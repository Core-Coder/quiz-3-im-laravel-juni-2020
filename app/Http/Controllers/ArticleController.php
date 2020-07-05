<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public function index() {
        $artikel = ArticleModel::semua();
        return view('index', compact('artikel'));
    }

    public function create() {
        return view('form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $artikel = ArticleModel::simpan($data);
        return redirect('/artikel');
    }

    public function show($id){
        $tampil = ArticleModel::tampil($id);
        return view('show', compact('tampil'));
    }

    public function edit($id) {
        $artikel = ArticleModel::tampil($id);
        return view('edit', compact('artikel'));
    }

    public function update($id, Request $request) {
        $update = ArticleModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $delete = ArticleModel::destroy($id);
        return redirect('/artikel');
    }
}

