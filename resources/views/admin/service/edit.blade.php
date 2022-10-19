@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">

                        {{-- <h3 class="text-center font-1">Edit Service Info</h3> --}}
                        <h4 class="card-title">Edit Service Info</h4>

                        <form class="form-horizontal" action="{{ route('admin.services.update',$category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" placeholder=" Title" value="{{ $category->title }}">
                                    <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : ''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label"> Short Description</label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control" name="short_description" rows="2" placeholder=" Short Description">{{ $category->short_description }}</textarea>
                                    <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label"> Long Description</label>
                                <div class="col-sm-9">

                                    <textarea id="editor" class="form-control" name="long_description" rows="4" placeholder=" Long Description">{{ $category->long_description }}</textarea>
                                    <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label"> Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" >
                                    <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : ''}}</span>
                                </div>
                            </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            {{-- <input type="submit"  class="btn btn-primary" value="Submit"> --}}
                            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
