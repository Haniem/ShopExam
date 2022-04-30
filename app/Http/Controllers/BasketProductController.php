<?php

namespace App\Http\Controllers;

use App\Models\Basket_product;
use App\Http\Requests\StoreBasket_productRequest;
use App\Http\Requests\UpdateBasket_productRequest;

class BasketProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBasket_productRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBasket_productRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket_product  $basket_product
     * @return \Illuminate\Http\Response
     */
    public function show(Basket_product $basket_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket_product  $basket_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket_product $basket_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBasket_productRequest  $request
     * @param  \App\Models\Basket_product  $basket_product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBasket_productRequest $request, Basket_product $basket_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket_product  $basket_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket_product $basket_product)
    {
        //
    }
}
