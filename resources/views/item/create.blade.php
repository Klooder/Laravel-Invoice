@extends('layout')

@section('content')
    <script src="{{asset('assets/js/item/form.js')}}"></script>
    <div class="row">
        <div class="col-lg-12 margin-tb text-center"><h2>Create Item</h2></div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('item.store') }}" method="POST">
        @csrf

        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="required" for="name">Name</label>
                    <input type="text" name="name" maxlength="50" id="name" class="form-control" placeholder="Name" autofocus>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-3 col-md-offset-3">
                <div class="form-group">
                    <label class="required" for="price">Price &#36;</label>
                    <input type="number" step="0.01" name="price" min="0.01" max="10000" id="price" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label class="required" for="stock">Stock</label>
                    <input type="number" name="stock" id="stock" min="0" max="10000" class="form-control" placeholder="Stock">
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-6 text-right">
                <a class="btn btn-secondary btn-custom" href="{{ route('item.index') }}">Cancel</a>
                <button type="submit" class="btn btn-success btn-custom">Create</button>
            </div>
        </div>
    </form>
@endsection
