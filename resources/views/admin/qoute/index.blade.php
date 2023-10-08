@extends('layouts.vertical', ['title' => 'Qoutes', 'mode' => 'ltr'])

@section('css')
<!-- Plugins css -->
<link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="row">
        <div class="col-12">
            <div class="page-title-box">
               
                <h4 class="page-title">List Qoutes</h4>
            </div>
        </div>
    </div>


<div class="card">
    <div class="card-body">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>
                       Services
                    </th>
                    <th>
                       Name
                    </th>
                    <th>
                       Company
                    </th>
                    <th>
                        Phone
                    </th>

                     <th>
                       Email
                    </th>
                </tr>
            </thead>
            <tbody>
                    @foreach($Qoutes as $Qoute)
                        <tr>
                            <td>
                                {{$Qoute->Services}}
                            </td>
                            <td>
                                {{$Qoute->name}}
                            </td>
                             <td>
                                {{$Qoute->company}}
                            </td>
                             <td>
                                {{$Qoute->phone}}
                            </td>
                             <td>
                                {{$Qoute->email}}
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
        </table>
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
