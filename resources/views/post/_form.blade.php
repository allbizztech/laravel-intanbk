<div class="form-group">
    <div class="col-2">Date</div>
    <div class="col-4">
        {!! Form::text('date', old('date'), ['class' => 'form-control datepicker']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-2">Post Title</div>
    <div class="col">
        {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-2">Post Content</div>
    <div class="col">
        {!! Form::text('content', old('content'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-2">Category</div>
    <div class="col-4">
        {!! Form::select('category_id', App\Category::pluck('name', 'id'), old('category_id'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-2">Image</div>
    <div class="col">
        {!! Form::file('image') !!}
    </div>
</div>

<div class="form-group">
    <div class="col text-right">
        {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

