<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $posts = Post::latest('created_at')->get();

		

	    return view('posts.index')
		    ->with('posts', $posts);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('posts.create')
			->with('title', 'Add new post');
    }



	/**
	 * Store a newly created resource in storage.
	 * hint: VALIDATION happens in Requests/SavePostRequest
	 *
	 * @param SavePostRequest|Request $request
	 * @return \Illuminate\Http\Response
	 */
    public function store(SavePostRequest $request)
    {
	    // create new post for this user
	    $post = $this->createPost($request);

	    // success message
	    flash()->success('yay!');

	    // redirect to post
	    return redirect()->route('posts.show', $post->slug);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
	    $post = Post::whereSlug($slug)
		            ->firstOrFail();

	    return view('posts.show')
		    ->with('post', $post);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $post = Post::findOrFail($id);

	    // only owner can see the edit for
	    $this->authorize('edit-post', $post);

		// add tags to post model
	    $post->tags;

	    return view('posts.edit', [
		    'title' => 'Edit post',
		    'post'  => $post,
	    ]);
    }



	/**
	 * Update the specified resource in storage.
	 *
	 * @param SavePostRequest|Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
    public function update(SavePostRequest $request, $id)
    {
	    $post = Post::findOrFail($id);

	    // update post
	    $this->authorize('edit-post', $post);
	    $post->update( $request->all() );

	    // attach tags
	    $this->syncTags($post, $request->get('tags'));

	    // redirect to post
	    flash()->success('updated!');
	    return redirect()->route('posts.show', $post->slug);
    }



    /**
     * Show form for removing specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = Post::findOrFail($id);

	    // only owner can see the edit for
	    $this->authorize('edit-post', $post);

	    return view('posts.delete')
		    ->with('post', $post);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

	    // if authorized, delete
	    $this->authorize('edit-post', $post);
        $post->delete();

	    // redirect home
	    flash()->success("it's gone!");
	    return redirect('/');
    }



	/**
	 * Sync tags for this post
	 *
	 * @param SavePostRequest $request
	 * @param $post
	 */
	private function syncTags($post, $tags)
	{
		$post->tags()->sync($tags ?: []);
	}



	/**
	 * Create new Post
	 *
	 * @param SavePostRequest $request
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	private function createPost(SavePostRequest $request)
	{
		// create new post for this user
		$post = Auth::user()->posts()->create($request->all());

		// attach tags
		$this->syncTags($post, $request->get('tags'));

		return $post;
	}

}
