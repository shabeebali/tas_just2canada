<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page(Request $request, $urlKey = NULL)
    {
        if(count($request->segments()) == 0) {
            $pageModel = Page::where('url_key','home')->first();
            return view('frontend.page',['content' => $pageModel->content])->withShortcodes();
        } elseif($urlKey) {
            $pageModel = Page::where('url_key',$urlKey)->first();
            if($pageModel) {
                return view('frontend.page',['content' => $pageModel->content])->withShortcodes();
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }
}
