<div class="modal fade" id="createItemModal" tabindex="-1" aria-labelledby="createItemModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createItemModalLabel">Add New Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{-- {{$categories}} --}}
        <form action="{{ route('storeItem') }}" method="POST">
          @csrf 
          <div class="form-group">
              <label>Item Picture</label>
              <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" value="{{ old('thumbnail') }}">
              @error('thumbnail')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
         
          <div class="form-group">
              <label>Item Name</label>
              <input type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name') }}">
              @error('item_name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          
          <div class="form-group">
              <label>Price</label>
              <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
              @error('price')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          
          <div class="form-group">
              <label>Amount</label>
              <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}">
              @error('amount')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          
          <div class="form-group">
              <label>Category</label>
              <select class="form-control @error('category') is-invalid @enderror" name="category">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
              </select>
              {{-- <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}"> --}}
              @error('category')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-sm btn-primary">Add Category</button>
        </form>
      </div>
    </div>
  </div>
</div>