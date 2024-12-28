<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Admin;
use App\Models\Users;
use App\Models\Orders;
use App\Models\AltMenu;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin(Request $req)
    {
        $username = $req->username;
        $password = $req->password;

        $adminSorgu = Admin::find('1');

        if(($username == $adminSorgu->username) && ($password == $adminSorgu->password)) {
            Session::put('admin', $adminSorgu->id);

            return redirect()->to('/admin/home');
        } else {
            return redirect()->to('/admin')->with('error', 'Email veya Parola Yanlış.');
        }
    }

    public function adminHome()
    {
        $products = Product::count();
        $orders = Orders::count();
        $ordersTamam = Orders::where('orders', 'Tamamlandı')->count();
        $ordersOnay = Orders::where('orders', 'Onay Bekliyor')->count();
        $users = Users::count();

        return view('adminhome', [
            'products' => $products,
            'orders' => $orders,
            'ordersTamam' => $ordersTamam,
            'ordersOnay' => $ordersOnay,
            'users' => $users
        ]);
    }

    public function adminUsers()
    {
        $users = Users::all();

        return view('adminusers', [
            'users' => $users
        ]);
    }

    public function adminProducts()
    {
        $products = Product::all();

        return view('adminproducts', [
            'products' => $products
        ]);
    }

    public function adminSettings()
    {
        return view('adminsettings');
    }

    public function userDelete($id)
    {
        $userDelete = Users::find($id);
        $userDelete->delete();

        return redirect()->to('/admin/users');
    }

    public function productDelete($id)
    {
        $productDelete = Product::find($id);

        if($productDelete) {
            $productDelete->delete();
        }

        return redirect()->to('/admin/products');
    }

    public function orderDelete($id)
    {
        $orderDelete = Orders::find($id);

        if ($orderDelete) {
            $orderDelete->delete();
        }

        return redirect()->to('/admin/orders');
    }

    public function adminAddProduct()
    {
        $menus = Menu::all();
        $altmenus = AltMenu::all();

        return view('adminproductadd', [
            'menus' => $menus,
            'altmenus' => $altmenus
        ]);
    }

    public function productAdd(Request $req)
    {
        $menu = $req->menu;
        $altmenu = $req->altmenu;
        $isim = $req->isim;
        $marka = $req->marka;
        $eskiFiyat = $req->eskiFiyat;
        $fiyat = $req->fiyat;
        $beden = $req->beden;
        $adet = $req->adet;
        $kargo = $req->kargo;
        $urunDetay = $req->urunDetay;
        $urunOzellik = $req->urunOzellik;

        if ($req->hasFile('resim')) {
            $image = $req->file('resim');
            $imageExtension = $image->hashName();
            $newImage = $image->store('assets/images', 'public');

            Storage::setVisibility($newImage, 'public');
        }

        Product::insert([
            'menu_id' => $menu,
            'category_id' => $altmenu,
            'isim' => $isim,
            'marka' => $marka,
            'eskiFiyat' => $eskiFiyat,
            'fiyat' => $fiyat,
            'beden' => $beden,
            'adet' => $adet,
            'kargo' => $kargo,
            'resim' => $imageExtension,
            'urunDetay' => $urunDetay,
            'urunOzellik' => $urunOzellik
        ]);

        return redirect()->to('/admin/products');
    }

    public function settingAdd(Request $req)
    {
        if ($req->hasFile('resim')) {
            $image = $req->file('resim');
            $imageExtension = $image->hashName();
            $newImage = $image->store('assets/images', 'public');

            Storage::setVisibility($newImage, 'public');
        }

        Settings::where('id', 1)->update([
            'logo' => $imageExtension
        ]);

        return redirect()->to('/admin/products');
    }

    public function adminOrders()
    {
        $orders = Orders::all();
        $users = Users::all();

        return view('adminorders', [
            'orders' => $orders,
            'users' => $users
        ]);
    }

    public function orderView($id)
    {
        $order = Orders::find($id);

        return view('adminorderview', [
            'order' => $order
        ]);
    }

    public function orderEdit($id)
    {
        $order = Orders::find($id);

        return view('adminorderedit', [
            'order' => $order
        ]);
    }

    public function orderStatusChange(Request $req, $id)
    {
        Orders::where('id', $id)->update([
            'orders' => $req->siparis
        ]);

        return redirect()->to('/admin/orders');
    }
}
