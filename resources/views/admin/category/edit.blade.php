@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header justify-content-between">
                <h3 class="d-inline-flex p-2 m-0">Edit Category</h3>
                <a href="{{ url('admin/category') }}" class="btn btn-secondary btn-sm text-white float-end mt-1">
                    <i class="mdi mdi-arrow-left-thick menu-icon" style="vertical-align: middle"></i>Back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control"/>
                            @error('name') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" value="{{ $category->slug }}" class="form-control"/>
                            @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control"rows="3">{{ $category->description }}</textarea>
                            @error('description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control"/>
                            <img src="{{ asset('/uploads/category/'.$category->image) }}" width="60px" height="60px"/>
                            @error('image') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label><br/>
                            <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':'' }}/>
                            @error('status') <small class="text-danger">{{$message}}</small> @enderror
                        </div>

                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $category->meta_title }}" class="form-control"/>
                            @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Keyword</label>
                            <textarea name="meta_keyword" rows="3" class="form-control">{{ $category->meta_keyword }}</textarea>
                            @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control">{{ $category->meta_description }}</textarea>
                            @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection