<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Support\Facades\DB;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('post.index', compact('posts'));
    }
    public function product(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('post.product', compact('posts'));
    }
    public function home(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('post.home', compact('posts'));
    }
    public function about(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('post.about', compact('posts'));
    }
    public function client(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('post.client', compact('posts'));
    }
    public function contact(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('post.contact', compact('posts'));
    }
    public function tampil(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('tampil', compact('posts'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('post.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/post', $image->hashName());

        //create post
        Post::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('post.show', compact('post'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('post.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/post', $image->hashName());

            //delete old image
            Storage::delete('public/post/' . $post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {

            //update post without image
            $post->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/post/' . $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $posts = DB::table('posts')
            ->where('title', 'like', "%" . $search . "%")
            ->paginate();
        return view('tampil', compact('posts'));
    }
}
