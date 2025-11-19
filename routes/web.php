<?php
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/product', App\Livewire\Product::class)->name('product');
Route::get('/services', App\Livewire\Services::class)->name('services');
Route::get('/about', App\Livewire\About::class)->name('about');
Route::get('/contact', App\Livewire\Contact::class)->name('contact');
Route::get('/blog', App\Livewire\Blog::class)->name('blog');
