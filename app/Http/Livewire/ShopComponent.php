<?php

namespace App\Http\Livewire;
use \App\Models\Product;
use Livewire\Component;
use Livewire\Withpagination;
class ShopComponent extends Component
{   
    use WithPagination;
    public function render()
    {   
        
        $products=Product::paginate(6);
        return view('livewire.shop-component',['products'=>$products])->layout('layouts.base');
    }
}
