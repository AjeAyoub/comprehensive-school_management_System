@extends('layouts.master')
@section('css')

@section('title')
    Grades
@stop
@endsection

@include('layouts.footer-scripts')

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Grades</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page Title</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">


                <button id="openFormButton" class="btn btn-primary">Add Grade</button>
                <br><br>


                <!--add grade form_modal -->
 
                <div id="formModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Grade</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('grade.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputName">Grade Name (en)</label>
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Grade Name (fr)</label>
                                        <input name="name_fr" type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNotes">Notes</label>
                                        <textarea name="notes" type="text" class="form-control" id="inputNotes"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Grade</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        $("#openFormButton").click(function() {
                            $("#formModal").modal("show");
                        });
                    });
                </script>
                
                <!-- end grade formmodal -->

                <!-- start tabele content -->
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th class="th-sm">Id
                        </th>
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Notes
                        </th>
                        <th class="th-sm">Actions
                        </th>
                      </tr>
                    </thead>
                    <?php $i = 0 ?>
                    @foreach ($grades as $grade)
                        <?php $i++ ?>
                        <tbody>
                        <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $grade->name }}</td>
                          <td>{{ $grade->notes }}</td>
                          <td>61</td>
                      </tfoot>
                        
                    @endforeach
                    
                  </table>
                <!-- end tabele content -->
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
