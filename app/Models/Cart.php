<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $fillable = [
        'stock_id','user_id'
    ];

    public function showCart()
   {
       $user_id = Auth::id();
       return $this->where('user_id',$user_id)->get();
   }

   public function stock()
   {
       return $this->belongsTo('\App\Models\Stock');
   }

   public function addCart($stock_id)
   {
       $user_id = Auth::id(); 
       $cart_add_info = Cart::firstOrCreate(['stock_id' => $stock_id,'user_id' => $user_id]);

       if($cart_add_info->wasRecentlyCreated){
           $message = 'カートに追加しました';
       }
       else{
           $message = 'カートに登録済みです';
       }

       return $message;
   }

   public function cartdelete($stock_id)
   {
       $user_id = Auth::id(); 
       $cart_delete_info = Cart::firstOrCreate(['stock_id' => $stock_id,'user_id' => $user_id]);
       //dd($cart_delete_info);
       $cart_delete_info->delete();

       $message = '商品をカート内から削除しました';
       return $message;
   }


}
