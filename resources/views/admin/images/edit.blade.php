@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">

                        {{-- <h3 class="text-center font-1">Edit Service Info</h3> --}}
                        <h4 class="card-title">Edit Images Info</h4>

                        <form class="form-horizontal" action="{{ route('admin.news.update',$category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" placeholder="News Title" value="{{ $category->title }}">
                                    <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : ''}}</span>
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
