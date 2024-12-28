<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\AltMenu;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AltMenuController extends Controller
{
    public function altmenu($menu, $altMenu, $id)
    {
        $menuSorgusu = Str::title(str_replace('-', ' ', $menu));
        $altMenuId = Product::where('category_id', $id)->get();
        $menuSorgu = Menu::where('menu', $menuSorgusu)->get();


        $altmenu = AltMenu::where('menu_id', $menuSorgu[0]->id)->get();

        $data = [
            'altMenuProduct' => $altMenuId,
            'menu' => $menuSorgu,
            'altmenu' => $altmenu
        ];

        return view('menu', ['data' => $data]);
    }
}
