<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index() {
        //Query Builders
        // $posts = DB::select('select * from posts where id = :id;', [
        //     'id' => 3
        // ]);
        $posts = DB::table('posts')
            ->where('id', 1)
            ->delete();
            // ->update([
            //     'updated_at' => now(),
            // ]);
            // ->insert([
            //     'id' => '6',
            //     'title' => 'Have a nice day',
            //     'description' => 'To day is a great day, i have a nice day',
            //     'created_at' => now()
            // ]);
            //->max('id');
            //->sum('id');
            //->avg('id');
            //->count();
            //->find(3);//find by id
            //->whereNotNull('id')
            //->oldest()
            //->orderBy('created_at', 'desc')
            // ->whereBetween('id', [1, 3])
            // ->where('created_at', '>', now()->subDay() )
            // ->orWhere('id', '<', 2)
            // ->select('title')
            //->first();
            //->get();
        dd($posts);
        return view('posts.index', compact('posts'));
    }
}
