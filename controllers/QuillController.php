<?php namespace SureSoftware\PowerBlog\Controllers;

use Backend\Classes\Controller;
use Illuminate\Http\Request;
use Rainlab\Blog\Models\Post;

/**
 * Authors Back-end Controller
 */
class QuillController extends Controller
{

    public function storeDelta(Request $request)
    {
        if($request->id == 'create'){
            return response()->json(['message' => 'post not yet created'], 422);
        }

        $post = Post::find($request->id);
        $post->powerblog_delta = $request->doc;
        $post->save();
        return response()->json(['message' => 'saved'], 200);
    }
}