<x-web-layout>



<div>
<a href="/admin">Products</a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<strong>{{ $message }}</strong>
</div>
@endif

<div class="container">
<div class="row justify-content-center">
<div class="col-sm-8">
<div class="card mt-3 p-3">
<h3>Product Edit #{{ $product->name }}</h3>
<form method="POST" action="/web/{{$product->id}}/update" enctype="multipart/form-data">
@csrf

@method('PUT')


<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{ old('name',$product->name) }}"/>
@if($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</
span>
@endif
</div>
<div class="form-group">
<label>Description</label>
<textarea class="form-control" rows="4" name="description">{{ old('description',$product->description) }}</textarea>
@if($errors->has('description'))
<span class="text-danger">{{ $errors->first('description') }}</
span>
@endif
</div>

<div class="form-group">
<label>Image</label>
<input type="file" name="image" class="form-control" />

@if($errors->has('image'))
<span class="text-danger">{{ $errors->first('image') }}</
span>
@endif



</div>
<button type="submit" class="btn btn-dark">SUBMIT</button>
</form>
</div>
</x-web-layout>
