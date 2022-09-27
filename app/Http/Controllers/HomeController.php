<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{

    public function welcome()
    {
        $action = 'welcome';
        $content = Article::query()->take(3)->get();
        return view('welcome', compact('action', 'content'));
    }
    public function content($action)
    {
        $actArr = ['new' => Article::CAT_NEWS, 'help' => Article::CAT_HELP, 'service' => Article::CAT_SERVICE];
        $cat = $actArr[$action];
        $content = Article::query()->where('category', $cat)->paginate(8);

        $service = Article::query()->where('category', Article::CAT_SERVICE)->take(10)->get(['id', 'title']);

        $sidebar = Article::query()
            ->where('category', $cat)
            ->orderByDesc('hot_desc')
            ->take(10)
            ->get(['id', 'title']);
        $webTitle = Article::MAPPING_CAT[$cat];

        return view('content', compact('action', 'content', 'sidebar', 'service', 'webTitle'));
    }

    public function scanner()
    {
        $phone = request('phone');
        $monitor = mt_rand(3, 20);
        return view('loading', ['phone' => $phone, 'monitor' => $monitor]);
    }
    public function do_query()
    {
        return view('app');
    }
    public function detail($id)
    {
        $action = 'new';
        $content = Article::query()->findOrFail($id);
        $cat = Article::CAT_NEWS;
        $sidebar = Article::query()
            ->where('category', $cat)
            ->orderByDesc('hot_desc')
            ->take(10)
            ->pluck('id', 'title');
        $article['prev'] = Article::query()->where('id', '<', $id)->orderBy('id', 'desc')->first(['id', 'title']);
        $article['next'] = Article::query()->where('id', '>', $id)->orderBy('id', 'asc')->first(['id', 'title']);
        return view('detail', compact('action', 'content', 'sidebar', 'article'));
    }
    public function center()
    {
        $action = 'center';
        $widget_code = $this->db_config['widget_code'];
        return view('center', compact('action', 'widget_code'));
    }
    public function chat()
    {
        $action = 'chat';
        $widget_code = $this->db_config['widget_code'];
        return view('chat', compact('action', 'widget_code'));
    }
}
