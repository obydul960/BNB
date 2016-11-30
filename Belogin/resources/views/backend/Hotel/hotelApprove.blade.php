@extends('layouts.backentMaster')
@section('content')
    @if(Auth::check())
        @if(Auth::user()->user==1)

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Hotel Approve Table.
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hotelMerchant as $value)
                                        <tr>
                                            <td>{{ $value->company_name }}</td>
                                            <td>{{ $value->phone }}</td>
                                            <td>{!! $value->address !!}</td>
                                            <td>{{ $value->city }}</td>
                                            <td>
                                                {!!Form::open(['url'=>['hotelMarchentStatus',$value->user_id],'class'=>'form-horizontal'])!!}
                                                <select name="hotelMarchentSataus" id="selectText" class="form-control m-bot15" onchange='this.form.submit()' >
                                                    <option selected>
                                                        @if($value->status == 1)
                                                           <option value="1" selected>Approved</option>
                                                           <option value="0">Not Approved</option>
                                                           <option value="2">pending </option>
                                                        @elseif($value->status == 2)
                                                           <option value="2" selected>pending</option>
                                                           <option value="0">Not Approved</option>
                                                           <option value="1">Approved</option>
                                                        @elseif($value->status == 0)
                                                           <option value="0" selected>Not Approved</option>
                                                           <option value="1">Approved</option>
                                                           <option value="2">pending</option>
                                                        @endif
                                                    </option>

                                                </select>
                                                {!!Form::close()!!}
                                            </td>
                                            <td><button  class="hotelMarchentDelete btn btn-danger" data-item-id="{{$value->id}}">Delete</button></td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!--- Swite message show  delete form Hotel marchent by obydul date:20-10-16 -->
            <script>
                $('button.hotelMarchentDelete').click(function() {
                    var itemId = $(this).attr("data-item-id");
                    mainCategoryDelete(itemId);
                   // alert(itemId);
                });
                function mainCategoryDelete(itemId) {
                    swal({
                        title: "Are you sure?",
                        text: "Are you sure that you want to delete this Item ?",
                        type: "warning",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        confirmButtonText: "Yes, delete it!",
                        confirmButtonColor: "#ec6c62"
                    }, function() {
                        $.ajax({
                            method: "GET",
                            url: "{{URL::to('/')}}/hotelMarchentDelete/" + itemId,
                            type: "DELETE"
                        })
                                .done(function(data) {
                                    swal("Deleted!", "Your item was successfully deleted!", "success");
                                    location.reload();
                                })
                                .error(function(data) {
                                    swal("Oops", "We couldn't connect to the server!", "error");
                                    location.reload();
                                });
                    });
                }
            </script>
        @else
            <?php
            Session::flash('error', 'please your not permitted...');
            ?>
        @endif
    @else
        <?php
        Session::flash('error', 'please try to login again...');
        ?>
    @endif

@endsection