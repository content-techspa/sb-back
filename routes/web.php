<?php
 use App\Http\Controllers\Administration\AdminContactController;
use App\Http\Controllers\Administration\AdminEnquiryController;
use App\Http\Controllers\Administration\BlogCategoryController;
use App\Http\Controllers\Administration\BlogController;
use App\Http\Controllers\Administration\BlogTagController;
use App\Http\Controllers\Administration\CityController;
use App\Http\Controllers\Administration\CountryController;
use App\Http\Controllers\Administration\StateController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\ProgramsController;
 use App\Http\Controllers\StudyAbroadController;
 use App\Http\Controllers\EnquiryController;
 use App\Http\Controllers\ContactController;
 use App\Http\Controllers\Administration\DashboardController;
use App\Http\Controllers\Administration\GalleryCategoryController;
use App\Http\Controllers\Administration\GalleryImageController;
use App\Http\Controllers\Administration\SliderController;
use App\Http\Controllers\Administration\UserController;
use App\Http\Controllers\Administration\TestimonialController;
use App\Http\Controllers\Administration\NewsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

/**
 * Authentication Routes
 */
// Route::prefix('authentication')->group(function () {
//     // Show login page
//     Route::get('login', [AuthenticationController::class, 'showLogin'])->name('authentication.login');
    
//     // Process login via AJAX – note the route name now matches the one in your form.
//     Route::post('login', [AuthenticationController::class, 'login'])->name('authentication.login.submit');
// });
Route::get('', [AuthenticationController::class, 'showLogin'])->name('login');
Route::prefix('authentication')->group(function () {
    // Show login page and name it "login"
    
    
    // Process login via AJAX
    Route::post('login', [AuthenticationController::class, 'login'])->name('authentication.login.submit');
});



// Password reset link request routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Password reset routes
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Logout route (accessible via POST)
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('authentication.logout');

/**
 * Administration Routes (Protected by auth middleware)
 */
Route::middleware(['auth'])->prefix('administration')->name('administration.')->group(function () {

    // Dashboard (uses DashboardController)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/administration/contacts-stats', [AdminContactController::class, 'stats'])->name('contacts.stats');
    Route::get('/administration/enquiry-stats', [AdminEnquiryController::class, 'stats'])->name('enquiries.stats');
    Route::get('/administration/recent-contacts', [AdminContactController::class, 'recentContacts'])->name('contacts.recent');

    // User Management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::post('/users/update', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    // Gallery Category Routes
    Route::get('/gallery-categories', [GalleryCategoryController::class, 'index'])->name('gallerycategory.index');
    Route::post('/gallery-categories/store', [GalleryCategoryController::class, 'store'])->name('gallerycategory.store');
    Route::post('/gallery-categories/update', [GalleryCategoryController::class, 'update'])->name('gallerycategory.update');
    Route::post('/gallery-categories/destroy', [GalleryCategoryController::class, 'destroy'])->name('gallerycategory.destroy');

    // Gallery Image Routes
    Route::get('/gallery-images/{category}', [GalleryImageController::class, 'index'])->name('galleryimage.index');
    Route::post('/gallery-images/{category}/upload', [GalleryImageController::class, 'upload'])->name('galleryimage.upload');
    Route::post('/gallery-images/update', [GalleryImageController::class, 'update'])->name('galleryimage.update');
    Route::post('/gallery-images/delete', [GalleryImageController::class, 'delete'])->name('galleryimage.delete');
    Route::post('/gallery-images/bulk-delete', [GalleryImageController::class, 'bulkDelete'])->name('galleryimage.bulk-delete');

    // News Routes
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::post('/news/update/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::post('/news/destroy', [NewsController::class, 'destroy'])->name('news.destroy');

    // Slider Routes
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::put('/slider/update', [SliderController::class, 'update'])->name('slider.update');

    // Testimonial Routes
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::post('/testimonial/update', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::post('/testimonial/destroy', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    // Administration Contacts Routes
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::post('/contacts/destroy', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

    // Enquiries Routes
    Route::get('/enquiries', [AdminEnquiryController::class, 'index'])->name('enquiries.index');
    Route::post('/enquiries/destroy', [AdminEnquiryController::class, 'destroy'])->name('enquiries.destroy');


    // Home Program Routes
    Route::get('/home-programs', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'index'])->name('homeprogram.index');
    Route::post('/home-programs/store', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'store'])->name('homeprogram.store');
    Route::post('/home-programs/update', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'update'])->name('homeprogram.update');
    Route::post('/home-programs/destroy', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'destroy'])->name('homeprogram.destroy');


    //Seeding Brains 
     // === Blogs ===
     Route::get('/blogs',                 [BlogController::class, 'index'])->name('blogs.index');
     Route::post('/blogs/store',          [BlogController::class, 'store'])->name('blogs.store');
     Route::post('/blogs/update/{blog}',  [BlogController::class, 'update'])->name('blogs.update');
     Route::post('/blogs/destroy',        [BlogController::class, 'destroy'])->name('blogs.destroy');
 
     // === Blog Categories ===
     Route::get('/blog-categories',                 [BlogCategoryController::class, 'index'])->name('blog_categories.index');
     Route::post('/blog-categories/store',          [BlogCategoryController::class, 'store'])->name('blog_categories.store');
     Route::post('/blog-categories/update/{category}', [BlogCategoryController::class, 'update'])->name('blog_categories.update');
     Route::post('/blog-categories/destroy',        [BlogCategoryController::class, 'destroy'])->name('blog_categories.destroy');
 
     // === Blog Tags ===
     Route::get('/blog-tags',                 [BlogTagController::class, 'index'])->name('blog_tags.index');
     Route::post('/blog-tags/store',          [BlogTagController::class, 'store'])->name('blog_tags.store');
     Route::post('/blog-tags/update/{tag}',   [BlogTagController::class, 'update'])->name('blog_tags.update');
     Route::post('/blog-tags/destroy',        [BlogTagController::class, 'destroy'])->name('blog_tags.destroy');


    // Countries
    Route::get(   'countries',             [CountryController::class,'index'])->name('countries.index');
    Route::post(  'countries/store',       [CountryController::class,'store'])->name('countries.store');
    Route::post(  'countries/update/{country}', [CountryController::class,'update'])->name('countries.update');
    Route::post(  'countries/destroy',     [CountryController::class,'destroy'])->name('countries.destroy');

    // States
    Route::get(   'states',                [StateController::class,'index'])->name('states.index');
    Route::post(  'states/store',          [StateController::class,'store'])->name('states.store');
    Route::post(  'states/update/{state}', [StateController::class,'update'])->name('states.update');
    Route::post(  'states/destroy',        [StateController::class,'destroy'])->name('states.destroy');

    // Cities
    Route::get(   'cities',                [CityController::class,'index'])->name('cities.index');
    Route::post(  'cities/store',          [CityController::class,'store'])->name('cities.store');
    Route::post(  'cities/update/{city}',  [CityController::class,'update'])->name('cities.update');
    Route::post(  'cities/destroy',        [CityController::class,'destroy'])->name('cities.destroy');


});
 
