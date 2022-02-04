<header class="post-header">
    <h1 class="box-heading">{{$title}}</h1>
</header>



<!-- title field -->
<div class="form-group">
    {{-- {!! Form::text('title', isset($post->title) ? $post->title : null, [ --}}
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'title your shit'
        ]) !!}
    
    
</div>


<!-- Text field -->
<div class="form-group">    
    {{-- {!! Form::textarea('text', isset($post->text) ? $post->text : null, [ --}}
    {!! Form::textarea('text', null, [
        'class' => 'form-control',
        'placeholder' =>  'write your shit',
        // 'placeholder' => isset($post) ? $post : 'write your shit',
        'value' => 'hovno',
        'rows' => 16
    ]) !!}
</div>

<div class="form-group">
    @foreach ($tags as $tag)
        <label class="checkbox">
            {!! Form::checkbox('tags[]', $tag->id) !!}
            {!! $tag->name !!}
        </label>
        
    @endforeach
</div>


<div class="form-group">    
    {!! Form::button($title, [
        'type' => 'submit',
        'class' => 'btn btn-primary'
    ]) !!}
</div>


<span class="or">
    or {!! link_back('cancel') !!}
</span>