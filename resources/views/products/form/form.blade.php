@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required @if(isset($product->name)) value="{{$product->name}}" @else value="{{ old('document') }}" @endif >
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity" required @if(isset($product->quantity)) value="{{$product->quantity}}" @else value="{{old('quantity')}}" @endif>
    @error('quantity')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control" required>@isset($product->description) {{$product->description}} @endisset</textarea>
</div>

<div class="form-group">
    <label for="type">Type</label>
    <select name="type" id="type" class="form-control" required>
        <option value="unidad">Unidad</option>
        <option value="paquete">Paquete</option>
    </select>
</div>
