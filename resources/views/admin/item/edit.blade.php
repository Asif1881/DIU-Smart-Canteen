@extends('layouts.app')

@section('title', 'edit')

@push('css')
 

@endpush

@section('content')
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add New Item</h4>

                </div>
                <div class="card-content">
                  <form method="POST" action="{{ route('item.update',$item->id) }}" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                          <select class="form-control" name="category">
                            @foreach($categories as $category)
                              <option {{ $category->id == $item->category->id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" value="{{ $item->name }}" name="name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <textarea name="description" class="form-control">{{ $item->description }}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="number" class="form-control" value="{{ $item->price }}" name="price">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Image</label>
                        <input type="file" name="image">
                      </div>
                    </div>

                    <a href="{{ route('item.index') }}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Save</button>

                  </form>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

@endsection

@push('scripts')


@endpush