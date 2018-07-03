@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                

                <div class="panel-body">
            @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif                  

                            <table width="100%" class="table table-striped table-bordered table-hover"
                                   id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Account Type</th>
                                    <th>Account Name</th>
                                    <th>Account Number</th>
                                    <th>Last Transaction</th>
                                    <th>Action One</th>
                                    <th>Action Two</th>
                                    <th>Action Three</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td>Mobile Money</td>
                                    <td>Lynet MTN</td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                    <td class="center">X</td>
                                    <td class="center">X</td>
                                </tr>
                               
                              
                                <tr class="gradeX">
                                    <td>Bank Account</td>
                                    <td>Lynet MTN</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                    <td class="center">C</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Mobile Money</td>
                                    <td>Lynet Centinery</td>
                                    <td>Windows Mobile 6</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                    <td class="center">C</td>
                                    <td class="center">C</td>
                                </tr>
                              
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 