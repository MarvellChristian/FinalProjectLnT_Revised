@extends('layouts/app')

@section('judul', 'Edit Item | PT. Musang')

@section('content')
    <div class="container mt-5">
        <div class="col-md-7 bg-light p-4 rounded">
            <h4>Edit Item</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, maiores.</p>
            <hr>

            <form action="{{ route('updateCategory', $category->id) }}" method="POST">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') ? old('category') : $category->category }}">
                    @error('category')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection