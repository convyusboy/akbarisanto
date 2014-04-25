<?php

class AdminGalleryController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
        $galleries = Gallery::all();
        return View::make('admin.gallery.index')->with('galleries', $galleries);
	}

    public function getView($id) {
    	$gallery = Gallery::find($id);
        if ($gallery == null) return App::abort(404);
        return View::make('gallery.view')->with('gallery', $gallery);
    }

    public function getCreate() {
    	$gallery = new Gallery();
        return View::make('admin.gallery.form')->with('gallery', $gallery);
    }

    public function getUpdate($id) {
    	$gallery = Gallery::find($id);
        return View::make('admin.gallery.form')->with('gallery', $gallery);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $gallery = Gallery::find($id);
        if ($gallery == null) App::abort(404);
        $gallery->fill($input);
        $gallery->save();
        return Redirect::to('/admin/gallery/index');
    }

    public function getDelete($id) {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return Redirect::to('/admin/gallery/index');
    }

    public function postCreate() {
        $input = Input::all();
        $gallery = new Gallery($input);
        $gallery->save();
        return Redirect::to('/admin/gallery/index');
    }
}