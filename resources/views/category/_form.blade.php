{{-- make category form with bootstap contains field name, slug --}}
<div>
  <form action="{{ route('category.store') }}" method="POST">
    @csrf

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $category->name ?? '' }}">
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control" value="{{ $category->slug ?? '' }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
