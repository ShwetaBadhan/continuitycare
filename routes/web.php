<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('home');


Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');


Route::get('/our-services', function () {
    return view('frontend.pages.our-services');
})->name('our-services');


Route::get('/directory-listing', function () {
    return view('frontend.pages.directory-listing');
})->name('directory-listing');

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');


Route::get('/our-blogs', function () {
    return view('frontend.pages.our-blogs');
})->name('our-blogs');


Route::get('/service-details', function () {
    return view('frontend.pages.service-details');
})->name('service-details');


Route::get('/blog-details', function () {
    return view('frontend.pages.blog-details');
})->name('blog-details');



Route::get('/careers', function () {
    return view('frontend.pages.careers');
})->name('careers');


Route::get('/career-details', function () {
    return view('frontend.pages.career-details');
})->name('career-details');



Route::get('/directory-details', function () {
    return view('frontend.pages.directory-details');
})->name('directory-details');


Route::get('/book-appointment', function () {
    return view('frontend.pages.book-appointment');
})->name('book-appointment');


Route::get('/our-team', function () {
    return view('frontend.pages.our-team');
})->name('our-team');


Route::get('/privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
})->name('privacy-policy');


Route::get('/terms-conditions', function () {
    return view('frontend.pages.terms-conditions');
})->name('terms-conditions');





Route::get('/faqs', function () {
    return view('frontend.pages.faqs');
})->name('faqs');



