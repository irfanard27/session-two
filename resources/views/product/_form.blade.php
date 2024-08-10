{{-- make product form with bootstrap --}}
{{-- make route has desicion if is create --}}



<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="form-control" value="{{ $data->name ?? '' }}">
</div>
<div class="form-group">
  <label for="price">Price</label>
  <input type="number" name="price" id="price" class="form-control" value="{{ $data->price ?? '' }}">
</div>
<div class="form-group">
  <label for="category_id">Category</label>
  <select name="category_id" id="category_id" class="form-control">
    @foreach ($categories as $category)
      <option value="{{ $category->id }}" {{ isset($data) && $data->category_id == $category->id ? 'selected' : '' }}>
        {{ $category->name }}
      </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="description">Description</label>
  <textarea name="description" id="description" class="form-control">{{ $data->description ?? '' }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
