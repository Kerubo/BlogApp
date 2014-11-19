<?php

	// ===============================================
	// STATIC PAGES ==================================
	// ===============================================

	// show a static view for the home page (app/views/home.blade.php)
	Route::get('/', function()
	{
		return View::make('home');
	});
     //http://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=0CCQQFjAB&url=http%3A%2F%2Fscotch.io%2Ftutorials%2Fsimple-and-easy-laravel-routing&ei=CclkVNeqHNevacGrgKgN&usg=AFQjCNEzMKHI6H9IBz1imM5hSGJY1g8yjg&sig2=TN7jEx6RkgMfJ_2w4MoAQQ&bvm=bv.79189006,d.d2s
	// about page (app/views/about.blade.php)
	Route::get('about', function()
	{
		return View::make('about');
	});

	// work page (app/views/work.blade.php)
	Route::get('work', array('as' => 'work', function()
	{
		return View::make('work');
	}));

	// ===============================================
	// BLOG PAGES ====================================
	// ===============================================

	// blogroll to show all blog posts
	Route::get('blog/{category?}', function($category = null)
	{
		// get all the blog stuff from database
		// if a category was passed, use that
		// if no category, get all posts
		if ($category)
			$posts = Post::where('category', '=', $category);
		else
			$posts = Post::all();

		// show the view with blog posts (app/views/blog.blade.php)
		return View::make('blog')
			->with('posts', $posts);
	});

	// ===============================================
	// ADMIN SECTION =================================
	// ===============================================
	Route::group(array('prefix' => 'admin'), function()
	{
		// main page for the admin section (app/views/admin/dashboard.blade.php)
		Route::get('/', function()
		{
			return View::make('admin.dashboard');
		});

		// subpage for the posts found at /admin/posts (app/views/admin/posts.blade.php)
		Route::get('posts', function()
		{
			return View::make('admin.posts');
		});

		// subpage to create a post found at /admin/posts/create (app/views/admin/posts-create.blade.php)
		Route::get('posts/create', function()
		{
			return View::make('admin.posts-create');
		});

		// process the create blog post form
		Route::post('posts/create', function()
		{
			// add the post to the database
			// $post = new Post;
			// $post->title = Input::get('title');
			// more stuff here
			// $post->save();

			// create a success message
			Session::flash('message', 'Successfully created post!');

			// redirect
			return Redirect::to('admin/posts/create');
		});
	});

	// ===============================================
	// 404 ===========================================
	// ===============================================

	App::missing(function($exception)
	{

		// shows an error page (app/views/error.blade.php)
		// returns a page not found error
		return Response::view('error', array(), 404





			 my link only 
			 date 15th nov
			 http://maxoffsky.com/code-blog/laravel-first-framework-chapter-2-getting-started-development-laravel/