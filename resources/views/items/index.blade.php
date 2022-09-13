@extends('layouts/app')

@section('judul', 'Manage Item | PT. Musang')

@section('content')
    @include('items/create', $categories)
    <div class="container mt-5">
        <div class="col-md-7 bg-light p-4 rounded">
            <h4>Manage Item</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, maiores.</p>
            <hr>
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createItemModal"><i class="uil uil-plus-circle me-2"></i>New Item</button>

            @if (session('success_msg'))
                <div class="alert alert-success">{{ session('success_msg') }}</div>
            @endif

            <table class="table table-striped table-light">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->item_name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->user_id}}</td>
                            <td>
                                <a href="{{ route('editItem', $item->id) }}" class="text-primary"><i class="uil uil-pen"></i></a>
                                
                                <a href="#" class="text-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit()">
                                    <i class="uil uil-trash-alt"></i>
                                    <form id="delete-form" method="POST" action="{{ route('deleteItem', $item->id) }}">
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