<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        // グループがない場合にグループを作成する
        if ($user->groups()->count() === 0) {
            $group = \App\Group::create(['name' => '新しいグループ']);
            $group_user = \App\GroupUser::create(['user_id' => $user->id, 'group_id' => $group->id]);
        }
        $group = $user->groups[0];
        // ショップがない場合にショップを作成する
        if ($group->shops()->count() === 0) {
            $shop = \App\Shop::create(['name' => '新しい店舗']);
            $group_shop = \App\GroupShop::create(['group_id' => $group->id, 'shop_id' => $shop->id]);
        }
        $shop = $group->shops[0];
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $customers = Customer::where(function($query) use($keyword) {
                $query->orWhere('name', 'like', '%'.$keyword.'%')
                    ->orWhere('kana', 'like', '%'.$keyword.'%');
            })
            ->whereHas('shops', function($q) use($shop) {
                $q->where('shops.id', '=', $shop->id);
            //})->simplePaginate(10);
            })->paginate(10);
        }else{//キーワードが入力されていない場合
            $customers = Customer::whereHas('shops', function($q) use($shop) {
                $q->where('shops.id', '=', $shop->id);
            })->paginate(10);
        }
        return view('home.index', compact('customers', 'keyword'));
    }

    public function regist(Request $request)
    {
        return view('home.regist');
    }
}
