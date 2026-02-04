<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
Route::post('/apply-job', [JobController::class, 'store'])->name('apply.job');

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


Route::get('/blog-details/{slug}', function () {
    return view('frontend.pages.blog-details');
})->name('blog-details');



Route::get('/careers', function () {
    return view('frontend.pages.careers');
})->name('careers');


Route::get('/career/{slug}', function ($slug) {
    return view('frontend.pages.career-details', compact('slug'));
})->name('career-details');



Route::get('/directory-details', function () {
    return view('frontend.pages.directory-details');
})->name('directory-details');


Route::get('/book-appointment', function () {
    return view('frontend.pages.book-appointment');
})->name('book-appointment');


Route::get('/our-team', function () {
    return view('frontend.pages.our-team');
})->name('our-leadership');

Route::get('/our-commitment', function () {
    return view('frontend.pages.our-commitment');
})->name('our-commitment');


Route::get('/privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
})->name('privacy-policy');



Route::get('/in-home-care', function () {
    return view('frontend.pages.in-home-care');
})->name('in-home-care');


Route::get('/community-participation', function () {
    return view('frontend.pages.community-participation');
})->name('community-participation');



Route::get('/community-nursing', function () {
    return view('frontend.pages.community-nursing');
})->name('community-nursing');


Route::get('/allied-health', function () {
    return view('frontend.pages.allied-health');
})->name('allied-health');


Route::get('/plan-management', function () {
    return view('frontend.pages.plan-management');
})->name('plan-management');


Route::get('/support-coordination', function () {
    return view('frontend.pages.support-coordination');
})->name('support-coordination');



Route::get('/self-management', function () {
    return view('frontend.pages.self-management');
})->name('self-management');




Route::get('/fully-management', function () {
    return view('frontend.pages.fully-management');
})->name('fully-management');



Route::get('/transition-care', function () {
    return view('frontend.pages.transition-care');
})->name('transition-care');


Route::get('/connect-portal', function () {
    return view('frontend.pages.connect-portal');
})->name('connect-portal');

Route::get('/terms-conditions', function () {
    return view('frontend.pages.terms-conditions');
})->name('terms-conditions');





Route::get('/faqs', function () {
    return view('frontend.pages.faqs');
})->name('faqs');


Route::get('/ndis', function () {
    return view('frontend.pages.ndis');
})->name('ndis');

Route::get('/my-aged-care', function () {
    return view('frontend.pages.my-aged-care');
})->name('my-aged-care');

Route::get('/niisq', function () {
    return view('frontend.pages.niisq');
})->name('niisq');

Route::get('/department-of-veterans-affairs', function () {
    return view('frontend.pages.department-of-veterans-affairs');
})->name('department-of-veterans-affairs');

Route::get('/clinical-guidelines', function () {
    return view('frontend.pages.clinical-guidelines');
})->name('clinical-guidelines');

Route::get('/client-resources', function () {
    return view('frontend.pages.client-resources');
})->name('client-resources');

Route::get('/staff-resources', function () {
    return view('frontend.pages.staff-resources');
})->name('staff-resources');

Route::get('/locations', function () {
    return view('frontend.pages.locations');
})->name('locations');
Route::get('/supported-independent-living', function () {
    return view('frontend.pages.supported-independent-living');
})->name('supported-independent-living');
Route::get('/accommodation-details/{slug}', function ($slug) {
    return view('frontend.pages.accommodation-details', compact('slug'));
})->name('accommodation-details');



Route::get('/new-aged-care-act', function () {
    return view('frontend.pages.new-aged-care-act');
})->name('new-aged-care-act');









Route::prefix('admin')->group(function () {
    Route::view('/', 'admin/auth/welcome');          // ← This serves welcome page at /admin
    Route::view('/dashboard', 'admin.pages.dashboard');
});


Route::get('/admin-users', function () {
    return view('admin.pages.admin-users');
})->name('admin-users');


