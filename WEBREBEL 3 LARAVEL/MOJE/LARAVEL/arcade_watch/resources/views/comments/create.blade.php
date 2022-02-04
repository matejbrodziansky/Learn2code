@include('errors')


<form action="/comments" method="POST" class="add-comment-form">
    @csrf
    
    <div class="container">
        <div class="row create">

            <div class="col-12">
                <label class="form-label">
                    Message
                </label>
            </div>

            <div class="col-5 container">
                <textarea name="text" rows="3" class="form-control" placeholder="Textarea"></textarea>       
            </div>

            <div class="control col-12  container">
                <button  class="btn btn-success">
                    Success
                </button>
            </div>
        </div>

    </div>

    <input type="hidden" name="post_id" value="{{ $post->id }}">
    {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> --}}

</form>
