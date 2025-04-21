<?php
 use App\Http\Controllers\Administration\AdminContactController;
use App\Http\Controllers\Administration\AdminEnquiryController;
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
Route::prefix('authentication')->group(function () {
    // Show login page and name it "login"
    Route::get('login', [AuthenticationController::class, 'showLogin'])->name('login');
    
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
    Route::get('/enquiries', [\App\Http\Controllers\Administration\AdminEnquiryController::class, 'index'])->name('enquiries.index');
    Route::post('/enquiries/destroy', [\App\Http\Controllers\Administration\AdminEnquiryController::class, 'destroy'])->name('enquiries.destroy');


 // Home Program Routes
 Route::get('/home-programs', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'index'])->name('homeprogram.index');
 Route::post('/home-programs/store', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'store'])->name('homeprogram.store');
 Route::post('/home-programs/update', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'update'])->name('homeprogram.update');
 Route::post('/home-programs/destroy', [\App\Http\Controllers\Administration\AdminHomeProgramController::class, 'destroy'])->name('homeprogram.destroy');

});
 

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);


Route::post('/submit-contact', [ContactController::class, 'store']);

Route::get('/partner-with-us', [HomeController::class, 'partnerWithUs']);
Route::get('/news', [HomeController::class, 'news']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/news', [NewsController::class, 'frontendIndex'])->name('news'); // Frontend listing
Route::get('/newsdetail/{slug}', [NewsController::class, 'show'])->name('newsdetail'); // Frontend detail


Route::get('/coding-multiverse', [ProgramsController::class, 'codingMultiverse']);
Route::get('/business-and-management', [ProgramsController::class, 'businessAndManagement']);
Route::get('/accounting-and-finance', [ProgramsController::class, 'accountingAndFinance']);
Route::get('/health-and-social-care', [ProgramsController::class, 'healthAndSocialCare']);
Route::get('/education-and-training', [ProgramsController::class, 'educationAndTraining']);
Route::get('/computing-IT-and-data-science', [ProgramsController::class, 'computingITAndDataScience']);
Route::get('/cyber-security', [ProgramsController::class, 'cyberSecurity']);
Route::get('/child-care', [ProgramsController::class, 'childCare']);
Route::get('/adult-care', [ProgramsController::class, 'adultCare']);
Route::get('/first-aid', [ProgramsController::class, 'firstAid']);
Route::get('/ILM', [ProgramsController::class, 'ILM']);
Route::get('/BCS', [ProgramsController::class, 'BCS']);


// --------- STUDY ABROAD ROUTES --------
Route::get('exclusive-programmes/mcast', [StudyAbroadController::class, 'MCAST']);
Route::get('exclusive-programmes/mahe-dubai', [StudyAbroadController::class, 'maheDubai']);
Route::get('exclusive-programmes/university-of-bolton', [StudyAbroadController::class, 'universityOfBolton']);
Route::get('exclusive-programmes/anglia-ruskin-university', [StudyAbroadController::class, 'angliaRuskinUniversity']);
Route::get('exclusive-programmes/university-of-gloucestershire', [StudyAbroadController::class, 'universityOfGloucestershire']);
Route::get('exclusive-programmes/girne-american-university', [StudyAbroadController::class, 'girneAmericanUniversity']);

Route::get('exclusive-programs/avila-university', [StudyAbroadController::class, 'avilaUniversity']);
Route::get('exclusive-programs/ibat', [StudyAbroadController::class, 'ibat']);
Route::get('exclusive-programs/LIGMR', [StudyAbroadController::class, 'LIGMR']);
Route::get('exclusive-programs/concordia-university-chicago', [StudyAbroadController::class, 'concordiaUniversityChicago']);


Route::get('dintance-learning/anglia-ruskin-university', [StudyAbroadController::class, 'ARU']);
Route::get('dintance-learning/buck-new-university', [StudyAbroadController::class, 'buckNewUniversity']);
Route::get('dintance-learning/central-lancashire-university', [StudyAbroadController::class, 'centralLancashireUniversity']);
Route::get('dintance-learning/derby-university', [StudyAbroadController::class, 'derbyUniversity']);
Route::get('dintance-learning/girne-american-university', [StudyAbroadController::class, 'GAU']);
Route::get('dintance-learning/gloucestershire-university', [StudyAbroadController::class, 'GU']);
Route::get('dintance-learning/northampton-university', [StudyAbroadController::class, 'northamptonUniversity']);


Route::get('on-campus/study-in-canada', [StudyAbroadController::class, 'studyInCanada']);
Route::get('on-campus/study-in-uae', [StudyAbroadController::class, 'studyInUae']);
Route::get('on-campus/study-in-ireland', [StudyAbroadController::class, 'studyInIreland']);
Route::get('on-campus/study-in-usa', [StudyAbroadController::class, 'studyInUsa']);
Route::get('on-campus/study-in-uk', [StudyAbroadController::class, 'studyInUk']);
Route::get('on-campus/study-in-malta', [StudyAbroadController::class, 'studyInMalta']);
Route::get('on-campus/study-in-australia', [StudyAbroadController::class, 'studyInAustralia']);


Route::post('/api/enquiries', [EnquiryController::class, 'store']);


// ------------ADMINISTRATION-------------

// Route::prefix('authentication')->group(function () {
//     Route::view('login', 'authentication.login')->name('login');
//     Route::view('sign-up', 'authentication.sign-up')->name('sign-up');

//     Route::view('login-one', 'authentication.login-one')->name(name: 'login-one');
//     Route::view('login-two', 'authentication.login-two')->name('login-two');
//     Route::view('login-bs-validation', 'authentication.login-bs-validation')->name('login-bs-validation');
//     Route::view('login-bs-tt-validation', 'authentication.login-bs-tt-validation')->name('login-bs-tt-validation');
//     Route::view('login-sa-validation', 'authentication.login-sa-validation')->name('login-sa-validation');
//     Route::view('sign-up-one', 'authentication.sign-up-one')->name('sign-up-one');
//     Route::view('sign-up-two', 'authentication.sign-up-two')->name('sign-up-two');
//     Route::view('sign-up-wizard', 'authentication.sign-up-wizard')->name('sign-up-wizard');
//     Route::view('unlock', 'authentication.unlock')->name('unlock');
//     Route::view('forget-password', 'authentication.forget-password')->name('forget-password');
//     Route::view('reset-password', 'authentication.reset-password')->name('reset-password');
//     Route::view('maintenance', 'authentication.maintenance')->name('maintenance');
// });
Route::prefix('forms')->group(function () {
    Route::view('form-validation', 'forms.form-validation')->name('form-validation');
    Route::view('base-input', 'forms.base-input')->name('base-input');
    Route::view('radio-checkbox-control', 'forms.radio-checkbox-control')->name('radio-checkbox-control');
    Route::view('input-group', 'forms.input-group')->name('input-group');
    Route::view('megaoptions', 'forms.megaoptions')->name('megaoptions');
    Route::view('datepicker', 'forms.datepicker')->name('datepicker');
    Route::view('time-picker', 'forms.time-picker')->name('time-picker');
    Route::view('datetimepicker', 'forms.datetimepicker')->name('datetimepicker');
    Route::view('daterangepicker', 'forms.daterangepicker')->name('daterangepicker');
    Route::view('touchspin', 'forms.touchspin')->name('touchspin');
    Route::view('select2', 'forms.select2')->name('select2');
    Route::view('switch', 'forms.switch')->name('switch');
    Route::view('typeahead', 'forms.typeahead')->name('typeahead');
    Route::view('clipboard', 'forms.clipboard')->name('clipboard');
    Route::view('default-form', 'forms.default-form')->name('default-form');
    Route::view('form-wizard', 'forms.form-wizard')->name('form-wizard');
    Route::view('form-two-wizard', 'forms.form-wizard-two')->name('form-wizard-two');
    Route::view('wizard-form-three', 'forms.form-wizard-three')->name('form-wizard-three');
    Route::post('form-wizard-three', function () {
        return redirect()->route('form-wizard-three');
    })->name('form-wizard-three-post');
});