{{-- make price form with bootstap contains field name, selling_price --}}
<div>
  <form action="{{ route('price.store') }}" method="POST">
    @csrf

    <div class="form-group">
      <label for="price">price</label>
      <input type="text" name="price" id="price" class="form-control" value="{{ $price->price ?? '' }}">
    </div>
    <div class="form-group">
      <label for="selling_price">selling_price</label>
      <input type="text" name="selling_price" id="selling_price" class="form-control" value="{{ $price->selling_price ?? '' }}">
    </div>
    <div class="form-group">
  <label for="product_id">product</label>
  <select name="product_id" id="product_id" class="form-control">
    @foreach ($products as $product)
      <option value="{{ $product->id }}" {{ isset($data) && $data->product_id == $product->id ? 'selected' : '' }}>
        {{ $product->name }}
      </option>
    @endforeach
  </select>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
