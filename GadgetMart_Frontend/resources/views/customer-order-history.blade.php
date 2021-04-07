<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@include('head')

<body>
<div class="page-wrapper">
    @include('navbar')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order History</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">ORDER HISTORY</h4>
                        <div class="table-responsive datatable-primary">
                            <table id="dataTable2">
                                <thead class="text-capitalize">
                                <tr>
                                    <th>Order ID &nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Item Name &nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Order Qty &nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Retailer Name &nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Full Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Order Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Order Address</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $datas)
                                    <tr>
                                        <td>{{$datas->id}}</td>
                                        @foreach($datas->orderDetailsModels as $orderDetailsModel)
                                            @foreach($item as $items)
                                                @if($orderDetailsModel->item==$items->id)
                                                    <td>{{$items->name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$orderDetailsModel->qty}}</td>
                                            <td>{{$orderDetailsModel->itemtype}}</td>
                                        @endforeach
                                        <td>{{$datas->fullAmount}}</td>
                                        <td>
                                            <?php
                                            echo date('Y-m-d h:i:s', strtotime($datas->date))
                                            ?>
                                        </td>
                                        <td>{{$datas->orderAddress}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End .container -->
    </main><!-- End .main -->
    @include('footer')
</div><!-- End .page-wrapper -->

@include('othercontent')


</body>
<script>
    Table = $('#dataTable2').DataTable();
</script>
</html>
