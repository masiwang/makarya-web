@extends('app')
@section('content')
    @include('components/_navbar')
    <div class="container">
        <div class="row" style="margin-top:7rem">
            <div class="col-sm-12">
                <div class="section category">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-group list-group-horizontal list-group-menu">
                                <li class="list-group-item ma-menu ma-semua" style="border-radius: 1rem;background-image:url({{asset('image/menu1.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="#">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Semua</h4>
                                        </div>
                                    </a>
                                    
                                </li>
                                <li class="list-group-item ma-menu ma-sayur" style="border-radius: 1rem;background-image:url({{asset('image/menu1.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Sayur</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item ma-menu ma-buah" style="border-radius: 1rem;background-image:url({{asset('image/menu2.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Buah</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item ma-menu ma-daging" style="border-radius: 1rem;background-image:url({{asset('image/menu3.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Daging</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item ma-menu ma-ikan" style="border-radius: 1rem;background-image:url({{asset('image/menu4.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Ikan</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item ma-menu ma-lain" style="border-radius: 1rem;background-image:url({{asset('image/menu4.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Lain-lain</h4>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                </div>
                <div class="row">
                    <h3 class="mb-3">Semua Produk</h3>
                </div>
                <div class="row">
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Telur ayam coklat</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/jamur-merang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Jamur Merang</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Telur ayam coklat</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/jamur-merang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Jamur Merang</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Telur ayam coklat</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/jamur-merang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Jamur Merang</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Telur ayam coklat</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/jamur-merang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Jamur Merang</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Telur ayam coklat</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/jamur-merang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Jamur Merang</p>
                                <p class="text-primary">Rp. 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Kacang Panjang</p>
                                <p class="text-primary">Rp. 5.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-3">
                        <div class="ma_product">
                            <div class="ma_image-product">
                                <img src="{{asset('image/daun-rosemary-300x300.jpg')}}" alt="Avatar" class="image">
                                <div class="row ma_product-action pt-2 pb-3 px-2">
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <span data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 15px"></div>
                            <div class="text-center">
                                <p class="mb-1">Daun Rosemary</p>
                                <p class="text-primary">Rp. 25.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 30px"></div>

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-success">
                            Muat lebih banyak
                        </button>
                    </div>
                </div>
                <div style="height: 30px"></div>
                <hr/>
                <div style="height:20px"></div>
                <div id="section-footer bg-light">
                    <div class="row p-4">
                        <div class="col-md-5 px-4">
                            <img src="{{asset('image/makarya-dark-160x48.png')}}" height="50px" alt="">
                            <div style="height:20px"></div>
                            <p>Jl. Shinta No. 20, Purwo Asri, RT 40B, RW 016, Kroyo, Karang Malang
                                Sragen, Indonesia</p>
                            <a href="#" class="text-decoration-none text-success">support@makarya.in</a><br/>
                            <div style="height:10px"></div>
                            <a href="#" class="text-decoration-none text-success">(+62) 821 3000 4204</a>
                        </div>
                        <div class="col-md-7 px-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="my-4">Navigasi</h4>
                                    <ul class="ma-footer-link">
                                        <li><a href="#" class="text-decoration-none">Home</a></li>
                                        <li><a href="#" class="text-decoration-none">Tentang Kami</a></li>
                                        <li><a href="#" class="text-decoration-none">Fitur</a></li>
                                        <li><a href="#" class="text-decoration-none">Cara Kerja</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="my-4">Link Terkait</h4>
                                    <ul class="ma-footer-link">
                                        <li><a href="#" class="text-decoration-none">Blog</a></li>
                                        <li><a href="#" class="text-decoration-none">Hubungi Kami</a></li>
                                        <li><a href="#" class="text-decoration-none">Bantuan & FAQ</a></li>
                                        <li><a href="#" class="text-decoration-none">Syarat & Ketentuan</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="my-4">Download App</h4>
                                    <img class="mb-1" style="border-radius:.5em" src="{{asset('image/mitech-button-google-play-light.jpg')}}" alt=""/>
                                    <img  style="border-radius:.5em" src="{{asset('image/mitech-button-app-store-light.jpg')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height:20px"></div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between">
                            <div class="px-4"><p class="pl-2">© 2020 Makarya. All Rights Reserved</p></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="">
                                <div class="row m-3">
                                    <div class="col-sm-6 text-center">
                                        <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <h4 class="col-12">Kacang Panjang</h4>
                                            <small class="col-12 text-info">PT. Majukarya Sentosa Gemilang Abadi</small>
                                            <div style="height: 20px;"></div>
                                            <div class="col-12">
                                                <h4 class="text-success">Rp. 12.000,-/kg</h4>
                                            </div>
                                            <div style="height: 20px;"></div>
                                            <div class="col-12">
                                                <p>Produk dari PT. Majukarya Sentosa Gemilang Abadi ini ditanam dengan metode hidroponik di atas gunung yang tinggi.</p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Qty</span>
                                                        <input type="number" class="form-control" placeholder="0" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-success"><span class="text-dark">Estimasi harga: </span>Rp. 12.000.000</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-success">Tambahkan</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection