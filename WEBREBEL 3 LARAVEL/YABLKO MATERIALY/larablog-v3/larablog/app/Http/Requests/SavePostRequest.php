<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Post;
use Auth;

class SavePostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
	    // edit form: check if user is owner of this post
	    if ( request()->method() == 'PUT' || request()->method() == 'PATCH' )
	    {
		    return Auth::user()->posts->find( request()->segment(2) );
	    }

	    return Auth::check();
    }


	/**
	 * Do this, if forbidden
	 */
	public function forbiddenResponse()
	{
		abort(403, "You can't!");
	}


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
	        'title' => 'required|max:200',
	        'text'  => 'required',
	        'tags'  => 'array'
        ];
    }
}
