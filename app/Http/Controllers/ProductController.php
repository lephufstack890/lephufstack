<?php

namespace App\Http\Controllers;

use App\list_products;
use App\product_slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function categoryProduct($id)
    {
        $list_catId = DB::table('cat_products')->where('id', $id)->get();
        $list_product = list_products::where('product_id', $id)->get();
        $imgs = DB::table('cat_products')
            ->where('id', $id)
            ->get();
        $list_title = DB::table('cat_products')
            ->where('id', $id)
            ->get();
        $list_material = list_products::where('product_id', $id)->select('material_id', 'product_id')->distinct()->get();
        $list_color = list_products::where('product_id', $id)->select('color_id', 'product_id')->distinct()->get();
        return view('product.categoryProduct', compact('list_catId', 'list_product', 'imgs', 'list_title', 'list_material', 'list_color'));
    }

    public function detailProduct($id)
    {
        $products = list_products::where('id', $id)->get();
        $slides = product_slides::where('product_slide_id', $id)->get();
        $product_related = list_products::all()->random(3);
        return view('product.detailProduct', compact('products', 'slides', 'product_related'));
    }

    public function get_material(Request $request)
    {
        $product_id = $request->product_id;
        $material_id = $request->material_id;
        $url = "http://localhost:1339/Admin/";
        $filter_material = list_products::where(
            [
                ['material_id', 'like', '%' . $material_id . '%'],
                ['product_id', $product_id]
            ]
        )->get();
        if (count($filter_material) > 0) {
            foreach ($filter_material as $item) {
?>
                <li class="content__fil-item">
                    <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><img src="<?php echo url("$url/" . $item->product_avatar) ?>" alt=""></a>
                    <div class="content__fil-lastname">
                        <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><?php echo $item->product_lastname ?></a>
                    </div>
                    <div class="content__fil-fullname">
                        <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><?php echo $item->product_cat ?> <?php echo $item->product_lastname ?></a>
                    </div>
                    <div class="content__fil-price">
                        <p><?php echo number_format($item->product_newprice, 0, ',', '.') ?>VNĐ</p>
                    </div>
                </li>
            <?php
            }
        }
    }

    public function get_color(Request $request)
    {
        $product_id = $request->product_id;
        $color_id = $request->color_id;
        $url = "http://localhost:1339/Admin/";
        $filter_color = list_products::where(
            [
                ['color_id', 'like', '%' . $color_id . '%'],
                ['product_id', $product_id]
            ]
        )->get();
        if (count($filter_color) > 0) {
            foreach ($filter_color as $item) {
            ?>
                <li class="content__fil-item">
                    <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><img src="<?php echo url("$url/" . $item->product_avatar) ?>" alt=""></a>
                    <div class="content__fil-lastname">
                        <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><?php echo $item->product_lastname ?></a>
                    </div>
                    <div class="content__fil-fullname">
                        <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><?php echo $item->product_cat ?> <?php echo $item->product_lastname ?></a>
                    </div>
                    <div class="content__fil-price">
                        <p><?php echo number_format($item->product_newprice, 0, ',', '.') ?>VNĐ</p>
                    </div>
                </li>
            <?php
            }
        }
    }

    public function get_price(Request $request)
    {
        $product_id = $request->product_id;
        $price = $request->price;
        $url = "http://localhost:1339/Admin/";
        if ($price == 3000000 AND 10000000) {
            $filter_price = list_products::where(
                [
                    ['product_newprice', '>', 3000000],
                    ['product_newprice', '<', 10000000],
                    ['product_id', $product_id]
                ]
            )->get();
        }

        if ($price == 10000000) {
            $filter_price = list_products::where(
                [
                    ['product_newprice', '>', 10000000],
                    ['product_id', $product_id]
                ]
            )->get();
        }

        if ($price == 1000000 AND 2000000) {
            $filter_price = list_products::where(
                [
                    ['product_newprice', '>', 1000000],
                    ['product_newprice', '<', 2000000],
                    ['product_id', $product_id]
                ]
            )->get();
        }

        if (count($filter_price) > 0) {
            foreach ($filter_price as $item) {
            ?>
                <li class="content__fil-item">
                    <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><img src="<?php echo url("$url/" . $item->product_avatar) ?>" alt=""></a>
                    <div class="content__fil-lastname">
                        <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><?php echo $item->product_lastname ?></a>
                    </div>
                    <div class="content__fil-fullname">
                        <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><?php echo $item->product_cat ?> <?php echo $item->product_lastname ?></a>
                    </div>
                    <div class="content__fil-price">
                        <p><?php echo number_format($item->product_newprice, 0, ',', '.') ?>VNĐ</p>
                    </div>
                </li>
            <?php
            }
        } else {
            ?>
            <div class="text-center">
                <img src="<?php echo url('public/images/empty.jpg') ?>" alt="">
                <h5 class="text-danger">Hiện tại không có sản phẩm nào!</h5>
            </div>
            <?php
        }
    }
}
