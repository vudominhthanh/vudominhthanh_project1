
@extends('layouts.master')
@section('title','Bill')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    form {
        background-color: #ffffff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 20px auto;
    }

    form div {
        margin-bottom: 10px;
    }

    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
    }

    form .radio-group {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    form .radio-group label {
        margin-left: 5px;
        font-weight: normal;
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="number"],
    form input[type="radio"] {
        width: calc(100% - 10px);
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-left: 5px;
    }

    form input[type="radio"] {
        width: auto;
    }

    form input[type="text"]:focus,
    form input[type="email"]:focus,
    form input[type="number"]:focus,
    form input[type="radio"]:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }

    .card-footer {
        text-align: center;
        margin-top: 15px;
    }

    .card-footer .btn {
        margin: 0 5px;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .card-footer .btn-success {
        background-color: #28a745;
        color: white;
    }

    .card-footer .btn-secondary {
        background-color: #6c757d;
        color: white;
    }

    .card-footer .btn-success:hover {
        background-color: #218838;
    }

    .card-footer .btn-secondary:hover {
        background-color: #5a6268;
    }

    .icon {
        margin-right: 5px;
    }
</style>
@endpush

@section('content-body')
<h2>Them moi thông tin</h2> 
<form action="{{ route('admin.createsubmit.bill') }}" method="post" enctype="multipart/form-data">
@csrf    
    <div>
        <label for="vdmtbillid"><i class="fas fa-file-invoice icon"></i>Bill Id</label>
        <input type="text" name="vdmtbillid" id="vdmtbillid" value="{{ $vdmtbills->vdmtbillid }}">
    </div>
    <div>
        <label for="vdmtcusid"><i class="fas fa-list icon"></i>Cus Id</label>
        <select name="vdmtcusid" id="vdmtcusid"> 
            @foreach ($vdmtcustomers as $item)           
                <option value="{{ $item->id }}">{{ $item->id }}</option> 
            @endforeach
        </select>
    </div>
    <div>
        <label for="vdmtcusname"><i class="fas fa-user icon"></i>Cus name</label>
        <input type="text" name="vdmtcusname" id="vdmtcusname" value="">
    </div>
    <div>
        <label for="vmdtcusemail"><i class="fas fa-envelope icon"></i>Email</label>
        <input type="email" name="vmdtcusemail" id="vmdtcusemail" value="">
    </div>
    <div>
        <label for="vdmtcusnumber"><i class="fas fa-phone icon"></i>Number</label>
        <input type="number" name="vdmtcusnumber" id="vdmtcusnumber" value="">
    </div>
    <div>
        <label for="vdmtcusaddress"><i class="fas fa-map-marker-alt icon"></i>Address</label>
        <input type="text" name="vdmtcusaddress" id="vdmtcusaddress" value="">
    </div>
    <div>
        <label for="vdmtbilltotal"><i class="fas fa-dollar-sign icon"></i>Total</label>
        <input type="number" name="vdmtbilltotal" id="vdmtbilltotal" value="{{ $vdmtbills->vdmtbilltotal }}">
    </div>
    <div>
        <label for="vdmtbillstatus"><i class="fas fa-toggle-on icon"></i>Trang thai</label>
        <div class="radio-group">
            <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus1" value="1" checked>
            <label for="vdmtbillstatus1">Hoat dong</label>
        </div>
        &nbsp;
        <div class="radio-group">
            <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus0" value="0">
            <label for="vdmtbillstatus0">Khoa</label>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success"><i class="fas fa-save icon"></i>Ghi lai</button>
        <a href="{{ route('admin.bill-list') }}" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i>Quay lai</a>
    </div>
</form>
@endsection

@push('scripts')
<script>
$('#vdmtcustomers').on('change', function() {
    var customerId = $(this).val();
    console.log('Customer ID:', customerId); // In ra Customer ID

    $.ajax({
        url: '/customers/' + customerId,
        type: 'GET',
        success: function(data) {
            console.log('Customer Data:', data); // In ra dữ liệu khách hàng

            $('#vdmtcusname').val(data.vdmtcusname);
            $('#vmdtcusemail').val(data.vmdtcusemail);
            $('#vdmtcusnumber').val(data.vdmtcusnumber);
            $('#vdmtcusaddress').val(data.vdmtcusaddress);
        },
        error: function(xhr, status, error) {
            console.log('AJAX Error:', error); // In ra lỗi nếu AJAX request gặp lỗi
        }
    });
});
</script>
@endpush
