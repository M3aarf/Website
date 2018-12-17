<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/craw', 'admin\Landing@start');
Route::get('/noor', 'admin\nooor@get_links');
Route::get('/مقالات','articles@index');
Route::get('/articles/cat/{id}/{title}','articles@showcat');
Route::get('/articles/cat/{id}','articles@showcat');
Route::get('/', 'pages@index');
Route::get('/كورسات-مجانا', 'coursesController@index');
Route::get('/courses/cat/{id}/{title}', 'coursesController@showCat');
Route::resource('articles','articles');
Route::get('/articles/{id}/{title}','articles@show');
Route::get('/admin/articles/delete_post/{id}','admin\adminArticles@destroy');
Route::POST('/admin/articles/delete_post/{id}','admin\adminArticles@destroy');
Route::get('/admin/articles/delete_cat/{id}','admin\adminArticles@destroyCat');
Route::POST('/admin/articles/delete_cat/{id}','admin\adminArticles@destroyCat');
Route::get('/admin/courses/delete_cat/{id}','admin\adminCourses@destroyCat');
Route::POST('/admin/courses/delete_cat/{id}','admin\adminCourses@destroyCat');
Route::get('/courses/cat','coursesController@category_videos');
Route::get('/admin/courses','admin\adminCourses@index');
Route::get('/admin/courses/icons','admin\adminCourses@icons');
Route::post('/admin/courses/add','admin\adminCourse@add');
Route::post('/admin/courses','admin\adminCourses@createcat');
Route::get('/course/{id}/{title}','courseController@showcourse');
Route::get('/course/{id}/','courseController@showcourse');
Route::get('/جميع-المقالات','articles@allArticles');
Route::get('/اقسام-المقالات','articles@allCat');

Auth::routes();

Route::get('/دورات-تدريبية','courseController@showAllCourses');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('/admin/articles', 'admin\adminArticles');
Route::get('/admin/articles/edit/{id}', 'admin\adminArticles@edit');
Route::post('/admin/articles','admin\adminArticles@createcat');
Route::get('datatable', ['uses'=>'PostController@datatable']);
Route::get('datatable/getposts', ['as'=>'datatable.getposts','uses'=>'PostController@getPosts']);
Route::get('datatable/getCat', ['as'=>'datatable.getCat','uses'=>'PostController@getCat']);
Route::get('datatable/getCatCourses', ['as'=>'datatable.getCatCourses','uses'=>'admin\adminCourses@getCatCourses']);
Route::get('datatable/getCourses', ['as'=>'datatable.getCourses','uses'=>'admin\adminCourse@getCourses']);
Route::get('datatable/getLessons/{id}', ['as'=>'datatable.getLessons','uses'=>'admin\adminCourse@getLessons']);
Route::resource('/admin/article/category', 'category_post');
Route::get('/admin/articles/edit_cat/{id}','admin\adminArticles@edit_cat');
Route::POST('/admin/articles/edit_cat/{id}','admin\adminArticles@edit_cat');
Route::POST('/admin/articles/edit_cat/','admin\adminArticles@updates_cat');
Route::get('/admin/courses/edit_cat/{id}','admin\adminCourses@edit_cat');
Route::POST('/admin/courses/edit_cat/{id}','admin\adminCourses@edit_cat');
Route::POST('/admin/courses/update/','admin\adminCourses@updates_cat')->name('update_course_cat');
Route::get('/admin/courses/edit_course/{id}','admin\adminCourse@edit_course');
Route::POST('/admin/courses/edit_course/{id}','admin\adminCourse@edit_course');
Route::POST('/admin/courses/update_course/','admin\adminCourse@update_course')->name('update_course');
Route::get('/admin/courses/delete_course/{id}','admin\adminCourse@destroyCourse');
Route::POST('/admin/courses/delete_course/{id}','admin\adminCourse@destroyCourse');

//lesson
Route::POST('/admin/course/add_lesson/','admin\adminCourse@addlesson');    
Route::get('/admin/course/{id}/lessons','admin\adminCourse@lessons'); 
Route::POST('/admin/course/delete_lesson/{id}','admin\adminCourse@destroyLesson');
Route::get('/admin/courses/lesson/{id}','admin\adminCourse@edit_lesson');
Route::POST('/admin/courses/lesson/{id}','admin\adminCourse@edit_lesson');

//tracks
Route::get('/المسارات-التعليمية','tracksController@index'); 
Route::get('/tracks/{id}/{title}','tracksController@showTrack'); 
Route::get('/admin/tracks','admin\adminTracks@index');
Route::POST('/admin/tracks/add','admin\adminTracks@add');
Route::get('datatable/getTracks/', ['as'=>'datatable.getTracks','uses'=>'admin\adminTracks@getTracks']);
Route::POST('/admin/tracks/delete_tracks/{id}','admin\adminTracks@delete_tracks');
Route::get('admin/tracks/edit/{id}','admin\adminTracks@edit_tracks');
Route::POST('/admin/tracks/update_track/','admin\adminTracks@update_tracks')->name('updatetrack');
Route::get('/admin/tracks/{id}/tips','admin\adminTracks@tips');
Route::POST('/admin/tracks/addtips','admin\adminTracks@addTips');
Route::POST('/admin/tips/delete_tip/{id}','admin\adminTracks@deleteTips');
Route::get('/admin/tips/edit/{id}','admin\adminTracks@editTips');
Route::POST('/admin/tracks/update_tip/','admin\adminTracks@updateTips')->name('updatetip');

//career
Route::get('/الحياة-العملية','careerController@index'); 
Route::get('/المقابلة-الشخصية-الانترفيو','careerController@showinterviewCat'); 
Route::get('/السيرة-الذاتية','careerController@showCvCat'); 
Route::get('/تعليم-مجانا','courseController@showAllLanding'); 



//travel
Route::get('/السفر','travelController@index'); 
Route::get('/مستلزمات-السفر','travelController@showTools'); 
Route::get('/وجهات-سياحية','travelController@showdest'); 
Route::get('/نصائح-سفر','travelController@showtips'); 
Route::POST('/admin/course/add_course/','crawling@course')->name('crawlcourse'); 
    use  inoledge\course;
	$courses = course::all();
	foreach($courses as $course)
	{
		Route::view('/'.$course->slug, 'landingPage.css',['course' => $course]);
	}
	
	
	
	//Campaigns
Route::get('/ads','admin\Campaigns@locate'); 
Route::get('datatable/getVisitors', ['as'=>'datatable.getCam','uses'=>'admin\Campaigns@getVisitors']);
Route::get('/admin/compaigns','admin\Campaigns@view');

Route::get('/youtube/{course_id}/lesson/{id}','youtube@download');

Route::get('/download.php', function () {
    return view('/youtube/download');
});
Route::get('/youtube/course/{id}/{title}','youtube@show'); 
Route::get('/youtube/course/{id}','youtube@show'); 
Route::get('/admin/downloads', function () {
    return view('/admin/downloads/report');
});
Route::get('datatable/getDown', ['as'=>'datatable.getDown','uses'=>'admin\downloads@getDownloads']);

//redirecting
Route::get('career', function () {
    return redirect('/الحياة-العملية');
});
Route::get('posts.html', function () {
    return redirect('/اقسام-المقالات');
});
Route::POST('course/download/unique', ['as'=>'update_course_downloads','uses'=>'youtube@update_downloads']);
Route::get('m3aarf.com', function(){ 
    return Redirect::to('https://www.m3aarf.com', 301); 
});
