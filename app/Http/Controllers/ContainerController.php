<?php

namespace App\Http\Controllers;

use App\list_products;
use App\user_clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContainerController extends Controller
{
    public function __construct(user_clients $clients)
    {
        $this->client = $clients;
    }
    public function showClient(Request $request)
    {
        $client = $this->client->all();
        return view('/regis', compact('client'));
    }
    public function get_img(Request $request)
    {
        $id = $request->id;
        $url = "http://localhost:1339/Admin/";
        $list_img = DB::table('cat_products')->find($id);
?>
        <a href="#"><img src="<?php echo url("$url/" . $list_img->product_cat_thumb) ?>" alt="" class="img-fluid"></a>
        <?php
    }

    public function get_search(Request $request)
    {
        $url = "http://localhost:1339/Admin/";
        $search_name = $request->search_name;
        $list_item = list_products::where(
            [
                ['product_lastname', 'like', '%' . $search_name . '%'],
            ]
        )->get();
        if (count($list_item) > 0) {
            foreach ($list_item as $item) {
            ?>
                <div class="col-md-3 col-6 header__search-prlist">
                    <li>
                        <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><img src="<?php echo url("$url/" . $item->product_avatar) ?>" alt=""></a>
                        <div class="header__search-pritem">
                            <a href="<?php echo $item->url = Route('product.detailProduct', $item->id) ?>"><?php echo $item->product_lastname ?></a>
                            <p><?php echo number_format($item->product_newprice, 0, ',', '.') ?>VNĐ</p>
                        </div>
                    </li>
                </div>
            <?php
            }
        }
    }
}
