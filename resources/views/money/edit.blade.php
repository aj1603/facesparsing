@extends('layout')
@section('content')

<div class="my-1 text-center"> <h3>Price update</h3> </div> @if (session('status')) <div class="alert alert-success
    my-1"> {{ session('status') }} </div> @endif <div class="d-flex justify-content-center my-5 px-4"> <form
    action="{{ route('price.update', $money->id) }}" method="POST" enctype="multipart/form-data" class=?w-50 shadow
    rounded-3 p-4"> @csrf @method('PUT') <div class="mb-3"> <label for="price" class="form-label">Price update</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Price update"
    value="{{ $money->money }}"> @error('price') <div class="alert alert-danger mt-1 mb-1">{{ $message }}
        </div> @enderror </div>
        <div class="text-end"> <a class="btn btn-secondary" href="{{ route('products.index') }}"
        enctype="multipart/form-data">Cancel</a> <button type="submit" class="btn btn-primary">Update</button>
        </div> </form> </div>

        @endsection