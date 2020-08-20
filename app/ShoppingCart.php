<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //Mass assignment
    protected $fillable = ['status'];

    public function approve(){
       $this->updateCustomIDAndStatus();
    }

    
    public function generateCustomID(){
        return md5("$this->id $this->updated_at");
    }


    public function updateCustomIDAndStatus(){
        $this->status = "approved";
        $this->customid = $this->generateCustomID();
        $this->save();
    }


    public function InShoppingCart(){
        return $this->hasMany('App\InShoppingCart');
    }

    public function products(){
        return $this->belongsToMany('App\Product', 'in_shopping_carts');
    }

    public function order(){
        return $this->hasOne("App\Order")->first();
    }


    public function productsSize(){
        return $this->products()->count();
    }

    public function total(){
        return $this->products()->sum("pricing");
    }

    public function totalUSD(){
        return $this->products()->sum("pricing") / 100;
    }

    public static function findOrCreateBySessionID($shopping_cart_id){
    	if($shopping_cart_id)
            //Busar el carrito de compras con este id
            return ShoppingCart::findBySession($shopping_cart_id);
        else
                //Creamo un carrito de compras
            return ShoppingCart::createWhitoutSession();
    }
    
    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWhitoutSession(){

        return ShoppingCart::create([
                "status" => "incompleted"
            ]);
    }
}