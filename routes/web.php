<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LecturesController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\PresentationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/contacts', [UserController::class, 'contacts'])->name('user.contacts');
Route::get('/references', [UserController::class, 'references'])->name('user.references');
Route::get('/lab-mash', [UserController::class, 'lab_mash'])->name('user.labaratoriya_mashgulotlari');
Route::get('/amaliy-mash', [UserController::class, 'amaliy_mash'])->name('user.amaliy_mashgulotlari');
Route::get('/maruza-bolimlari', [UserController::class, 'maruza'])->name('user.maruza');
Route::get('/dehqonchilik-maruza', [UserController::class, 'deh_maruza'])->name('user.deh_maruza');
Route::get('/melioratsiya-maruza', [UserController::class, 'mel_maruza'])->name('user.mel_maruza');
Route::get('/mustaqil-ish', [UserController::class, 'indep_work'])->name('user.indep_works');
Route::get('/glossari', [UserController::class, 'glossary'])->name('user.glossary');
Route::get('/presentation', [UserController::class, 'presentatsiya'])->name('user.presentations');
Route::get('/quiz-types', [UserController::class, 'quiz_types'])->name('user.quiz_types');
Route::get('/dehqonchilik-quiz', [QuizController::class, 'dehqonchilikQuiz'])->name('dehqonchilik_quiz');
Route::get('/melioratsiya-quiz', [QuizController::class, 'melioratsiyaQuiz'])->name('melioratsiya_quiz');
Route::get('/video-darsliklar', [UserController::class, 'video_lessons'])->name('user.video_lessons');
//Route::get('/quiz/{id}', [QuizController::class, 'showQuiz'])->name('quiz.show');
Route::post('/quiz-check', [QuizController::class, 'checkAnswer'])->name('user.quiz_check');
Route::get('/quiz-finished', [QuizController::class, 'quiz_finished'])->name('user.quiz_finished');


Route::prefix('admin')->group(callback: function () {
    Route::view('/', 'admin.login')->name("admin.login");
    Route::post('/auth', [AdminController::class,'auth'])->name('admin.auth');

    Route::middleware(['adminAuth'])->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::view('profile','admin.profile')->name('admin.profile');
        Route::post('profile',[AdminController::class, 'update_password'])->name('admin.password.update');
        Route::post('/admin/update-photo', 'AdminController@updatePhoto')->name('admin.update.photo');

        Route::get('articles', [AdminController::class, 'articles'])->name('admin.view.articles');
        Route::post('add-articles', [AdminController::class, 'add_articles'])->name('admin.add.article');
        Route::delete('delete-article', [AdminController::class, 'delete_articles'])->name('admin.delete.article');

        Route::get('pr-trainings', [AdminController::class, 'pr_trainings'])->name('admin.view.pr_trainings');
        Route::post('add-pr-trainings', [AdminController::class, 'add_pr_trainings'])->name('admin.add.pr_training');
        Route::delete('delete-pr-trainings', [AdminController::class, 'delete_pr_trainings'])->name('admin.delete.pr_training');

        Route::get('/lectures', [LecturesController::class, 'lectures'])->name('admin.view.lectures');
        Route::post('add-lecture', [LecturesController::class, 'add_lectures'])->name('admin.add.lecture');
        Route::delete('delete-lecture', [LecturesController::class, 'delete_lecture'])->name('admin.delete.lecture');

        Route::get('/quizzes', [QuizController::class, 'quizzes'])->name('admin.view.quizzes');
        Route::post('add-quiz', [QuizController::class, 'add_quiz'])->name('admin.add.quiz');
        Route::delete('delete-quiz', [QuizController::class, 'delete_quiz'])->name('admin.delete.question');

        Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('user.deh_quiz');
        Route::post('/submit-answer', [QuizController::class, 'submitAnswer'])->name('user.submitAnswer');
        Route::get('/quiz-finished', [QuizController::class, 'quizFinished'])->name('user.quizFinished');

        Route::get('/presentations', [PresentationController::class, 'presentations'])->name('admin.view.presentations');
        Route::post('add-pres', [PresentationController::class, 'add_pres'])->name('admin.add.pres');
        Route::delete('delete-pres', [PresentationController::class, 'delete_pres'])->name('admin.delete.pres');

    });
});