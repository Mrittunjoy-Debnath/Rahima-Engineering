@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <h4 class="ml-5 text-center text-success font-weight-bold">{{ Session::get('success') }}</h4>
                    <div class="card-body">

                        <a href="{{route('admin.news.create')}}" class="btn btn-primary waves-effect">
                            {{-- <i class="material-icons">add</i> --}}
                            <i class="fas fa-plus"></i>
                            <span >Add New News</span>

                        </a>

                        <h3 class="text-center font-1">News Info</h3>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-bordered table-striped table-hover dataTable js-exportable">

                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th>News Title</th>
                                    <th>Short Desc</th>
                                    <th>Images</th>
                                    <th>Long Desc</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th> ID</th>
                                    <th>News Title</th>
                                    <th>Short Desc</th>
                                    <th>Images</th>
                                    <th>Long Desc</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @php($i=1)
                                @foreach ($news as $row)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$row->title}}</td>
                                        <td>{{$row->short_description}}</td>

                                        <td>
                                            <img src="{{asset($row->image)}}" alt="" style="height: 100px; width:250px;" />
                                        </td>
                                        <td>{!! $row->lond_description !!}}</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.news.show',$row->id)}}" class="btn btn-info waves-effect">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.news.edit',$row->id) }}" class="btn btn-success waves-effect">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn btn-danger waves-effect" type="button" onclick="deleteService({{ $row->id }})">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            {{--                                             <form  action="{{ route('admin.service.destroy',$service->id) }}" method="POST" onsubmit="return confirm('Do you want to delete?')">--}}
                                            <form id="delete-form-{{ $row->id }}" action="{{ route('admin.news.destroy',$row->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                                {{--                                                 <button type="submit" name="btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>--}}
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
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
