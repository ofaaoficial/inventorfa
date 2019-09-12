@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" required @isset($product->name) value="{{$product->name}}" @endisset>
</div>

<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" class="form-control" name="quantity" id="quantity" required @isset($product->quantity) value="{{$product->quantity}}" @endisset>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control" required>@isset($product->description) {{$product->description}} @endisset</textarea>
</div>
