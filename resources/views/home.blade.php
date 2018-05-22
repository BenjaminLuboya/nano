@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped" id="reportTable"  >

                    <thead>
                        <tr>
                        <th>id</th>
                        <th>centerno</th>
                        <th>R05</th>
                        <th>R15</th>
                        <th>R5</th>
                        <th>R10</th>
                        <th>R20</th>
                        <th>B05</th>
                        <th>B15</th>
                        <th>B5</th>
                        <th>B10</th>
                        <th>B20</th>
                        <th>PaymentMode</th>
                        <th>ReceptNo</th>
                        <th>Amount</th>
                        <th>PaymentDate</th>
                        <th>Confirmation</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                
            </table>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('scripts')
    <script>
$(function() {
    $('#reportTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('home.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'centerno', name: 'centerno' },
            { data: 'R05', name: 'R05' },
            { data: 'R15', name: 'R15' },
            { data: 'R5', name: 'R5' },
            { data: 'R10', name: 'R10' },
            { data: 'R20', name: 'R20' },
            { data: 'B05', name: 'B05' },
            { data: 'B15', name: 'B15' },
            { data: 'B5', name: 'B5' },
            { data: 'B10', name: 'B10' },
            { data: 'B20', name: 'B20' },
            { data: 'PaymentMode', name: 'PaymentMode' },
            { data: 'ReceptNo', name: 'ReceptNo' },
            { data: 'Amount', name: 'Amount' },
            { data: 'PaymentDate', name: 'PaymentDate' },
            { data: 'Confirmation', name: 'Confirmation' },
            {data: 'action', name: 'Action', orderable: false, searchable: false}
        ]
    });
});

</script>
<!--<script>
   

$(document).on('click','.del',function(e){
e.preventDefault();
   
 });
</script>-->
@endpush
    


