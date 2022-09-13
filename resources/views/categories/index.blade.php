@extends('layouts/app')

@section('judul', 'Manage Category | PT. Musang')

@section('content')
    @include('categories/create')
    <div class="container mt-5">
        <div class="col-md-7 bg-light p-4 rounded">
            <h4>Manage Categories</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, maiores.</p>
            <hr>
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createCategoryModal"><i class="uil uil-plus-circle me-2"></i>New Category</button>

            @if (session('success_msg'))
                <div class="alert alert-success">{{ session('success_msg') }}</div>
            @endif

            <table class="table table-striped table-light">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$category->category}}</td>
                            <td>
                                <a href="{{ route('editCategory', $category->id) }}" class="text-primary"><i class="uil uil-pen"></i></a>
                                
                                <a href="#" class="text-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit()">
                                    <i class="uil uil-trash-alt"></i>
                                    <form id="delete-form" method="POST" action="{{ route('deleteCategory', $category->id) }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection