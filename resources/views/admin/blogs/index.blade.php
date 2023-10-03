@extends('layouts.vertical', ['title' => 'List Blogs', 'mode' => 'ltr'])

@section('css')
<!-- Plugins css -->
<link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="row">
        <div class="col-12">
            <div class="page-title-box">
               
                <h4 class="page-title"> List Blogs</h4>
            </div>
        </div>
    </div>

    <div class="button-list">
        <a class="btn btn-success btn-rounded waves-effect waves-light"
            href="{{route('blogsCreate',['admin','blogs' ,'create']) }}">
            Add </a>
    </div><br>


<div class="card">
    <div class="card-body">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                     <th>
                       Title
                    </th>
                     <th>
                       Comment
                    </th>
                    
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
                    @foreach($Blogs as $Blog)
                   
                        <tr>
                            <td>
                                {{$i++}}
                            </td>
                            <td>
                                {{$Blog->title}}
                            </td>
                            @php
                               $count =  DB::table('blogcomment')->where('bolg_id',$Blog->id)->count();
                            @endphp
                             <td>
                                @if($count  > 0 )
                                    {{ $count }}
                                @else
                                    0
                                @endif
                               
                            </td>
                           
                            <td>
                                 <a class="btn btn-info" href="{{route('blogsEdit',['admin','blogs' ,'edit',$Blog->id] )}}">
                                    Update
                                </a>
                                <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#danger-alert-modal{{$Blog->id}}">
                                    Destroy 
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
     @foreach($Blogs as $Blog)
                     <!-- Danger Alert Modal -->
                     <div id="danger-alert-modal{{$Blog->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content modal-filled bg-danger">
                                    <div class="modal-body p-4">
                                        <div class="text-center">
                                            <input type="hidden" value="{{$Blog->id}}" name="del_id" id="app_id">

                                                 <i class="dripicons-wrong h1 text-white"></i>
                                                <h4 class="mt-2 text-white">Are you sure to delete ?</h4>
                                                <p class="mt-3 text-white">Do you really want to delete these records? This process cannot be undone.</p>
                                                <button type="button"  onclick="location.href='{{ url('/dashboard/admin/blogs/destroy/blogs/destroy/'.$Blog->id) }}';" class="btn btn-light my-2">delete</button>

                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal --> 
        @endforeach
    </div>
   

</div>



@endsection
@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
  
    @endsection
