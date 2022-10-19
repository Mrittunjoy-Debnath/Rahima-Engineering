@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">

                        <a href="{{ route('admin.teams.create') }}" class="btn btn-primary waves-effect">
                            {{-- <i class="material-icons">add</i> --}}
                            <i class="fas fa-plus"></i>
                            <span>Add New Team</span>
                        </a>

                        <h3 class="text-center font-1">Team Info</h3>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>

                                <tr>
                                    <th>Name</th><td>{{ $category->name }}</td>
                                </tr>
                                <tr>
                                    <th>Designation</th><td>{{ $category->designation }}</td>
                                </tr>
                                <tr>
                                    <th>Long Desc</th><td>{!! $category->long_description !!}</td>
                                </tr>
                                <tr>
                                    <th>Images</th><td><img src="{{ asset($category->image) }}" alt="" style="height: 100px; width:250px;" /></td>
                                </tr>
                                <tr>
                                    <th>Action</th><td class="text-center">
                                        <a href="{{ route('admin.teams.show',$category->id) }}" class="btn btn-info waves-effect">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.teams.edit',$category->id) }}" class="btn btn-success waves-effect">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger waves-effect" type="button" onclick="deleteService({{ $category->id }})">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $category->id }}" action="{{ route('admin.teams.destroy',$category->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        function deleteService(id)
        {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,

            })
                .then((willDelete) => {
                    if (willDelete) {
                        event.preventDefault();
                        document.getElementById('delete-form-'+id).submit();

                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",

                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        }

    </script>
@endsection
