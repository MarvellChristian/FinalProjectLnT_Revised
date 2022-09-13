<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createCategoryModalLabel">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('storeCategory') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}">
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