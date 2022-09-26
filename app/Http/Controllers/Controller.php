<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index($action)
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
}
