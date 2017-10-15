<?php

namespace App\Http\Controllers;

use App\ShopProduct;
use Image;

class ImageController extends Controller
{
    public function productThumbnail($product_id)
    {
        $product = ShopProduct::findOrFail($product_id);

        if (!$product->hasMedia('images')) {
            abort(404);
        }

        return Image::make($product->getMedia('images')[0]->getPath())->response('jpg', 80);
    }
}
