@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3 class="d-inline-flex p-2 mt-2">Add Category</h3>
                    <a href="{{ url('admin/category') }}" class="btn btn-secondary btn-sm text-white float-end mt-2">
                        <i class="mdi mdi-arrow-left-thick menu-icon align-middle"></i>Back
                    </a>
                </div>
                <div class="card-body">
                    <form id="category-create" action="{{ url('admin/category') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Slug</label>
                                <input type="text" name="slug" class="form-control" />
                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="mb-2">Description</label>
                                <textarea name="description" class="form-control"rows="3"></textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Image</label>
                                <input type="file" name="image" class="form-control" />
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Status</label><br />
                                <input type="checkbox" name="status" />
                            </div>
                            <hr>
                            <div class="col-md-12 mb-3">
                                <h3>SEO Tags</h3>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="mb-2">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" />
                                @error('meta_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="mb-2">Meta Keyword</label>
                                <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                                @error('meta_keyword')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="mb-2">Meta Description</label>
                                <textarea name="meta_description" rows="3" class="form-control"></textarea>
                                @error('meta_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
