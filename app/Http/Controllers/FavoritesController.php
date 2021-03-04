<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り追加するアクション。
     *
     * @param  $id  お気に入り投稿のid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証ユーザが、idの投稿をお気に入り追加する
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();        
    }

    /**
     * 投稿をお気に入り削除するアクション。
     *
     * @param  $id  お気に入り投稿のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証ユーザが、idの投稿をお気に入り削除する
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
