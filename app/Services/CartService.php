<?php 
namespace App\Services;

use Auth;
use App\Models\CartItem;

class CartService
{
	public function get()
	{
		return Auth::user()->cartItems()->with(['productSku.product'])->get();
	}

	public function add($skuId, $amount)
	{
		$user = Auth::user();
		// 从数据查询是否存在该商品
		if($item = $user->cartItems()->where('product_sku_id', $skuId)->first()) {
			// 存在就叠加
			$item->update([
				'amount' => $item->amount + $amount;
			]);
		}else {
			// 否则创建一个新的购物车
			$item = new CartItem(['amount'] => $amount);
			$item->user()->associate($user);
			$item->productSku->associate($skuId);
			$item->save();
		}

		return $item;
	}

	public function remove($skuIds)
	{
		// 可以传单个ID， 也可以传一个数组
		if(!is_array($skuIds)) {
			$skuIds = [$skuIds];
		}

		Auth::user()->cartItems()->whereIn('product_sku_id', $skuIds)->delete();
	}
}

