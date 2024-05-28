@extends('layout1')

@section('content')
    @php
        $meta_desc = "Mô tả của trang blog";
        $meta_keywords = "Từ khóa của trang blog";
        $url_canonnial = "URL canonial của trang blog";
        $meta_title = "Tiêu đề của trang blog";
    @endphp
    <!-- Nội dung của trang blog -->

        <div class="col-xl-12 col-md-12 col-lg-12 pt-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="page-title">Lịch sử thanh toán</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter text-nowrap table-bordered border-bottom">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">No</th>
                                <th class="border-bottom-0">Tên</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Số điện thoại</th>
                                <th class="border-bottom-0">Mã đơn hàng</th>
                                <th class="border-bottom-0">Số tiền</th>
                                <th class="border-bottom-0">Trạng thái</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @if(isset($payments))
                                @foreach($payments as $index => $payment)
                                    <tr>
                                        <td>{{$counter++}}</td>
                                        <td>{{$payment->customer->customer_name ?? ''}}</td>
                                        <td>{{$payment->customer->customer_email ?? ''}}</td>
                                        <td>{{$payment->customer->customer_phone ?? ''}}</td>
                                        <td>{{$payment->payment_products_id ?? ''}}</td>
                                        <td>{{number_format($payment->total_cost, 0, ',', '.')}}</td>
                                        <td>Đã thanh toán</td>
                                        <td style="cursor: pointer">
                                            <u class="show-payment-details" data-payment-id="{{ $payment->id }}">Show</u>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            @if(session('cart'))
                                @php
                                    $information = session()->get('customer_information');
                                    $cartItems = session('cart');
                                    $totalCost = 0;
                                    foreach($cartItems as $item) {
                                        $totalCost += $item['product_price'] * $item['product_qty'];
                                    }
                                @endphp
                                <tr>
                                    <td>{{$counter++}}</td>
                                    <td>{{$information->customer_name}}</td>
                                    <td>{{$information->customer_email}}</td>
                                    <td>{{$information->customer_phone}}</td>
                                    <td>  </td>
                                    <td>{{ number_format($totalCost, 0, ',', '.') }}</td>
                                    <td>Chưa thanh toán</td>
                                    <td style="cursor: pointer">
                                        <u id="show-cart-details">Show</u>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                        <!-- Payment -->
                        <div class="modal fade" id="paymentDetailsModal" tabindex="-1" role="dialog" aria-labelledby="paymentDetailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="paymentDetailsModalLabel">Payment Products</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul id="paymentProductsList"></ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Details -->
                        <div class="modal fade" id="cartDetailsModal" tabindex="-1" role="dialog" aria-labelledby="cartDetailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="cartDetailsModalLabel">Cart Products</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="cartProductsList"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.show-payment-details').on('click', function() {
            var paymentId = $(this).data('payment-id');
            $.ajax({
                url: '/payment-details/' + paymentId,
                method: 'GET',
                success: function(data) {
                    var paymentProductsList = $('#paymentProductsList');
                    paymentProductsList.empty();
                    console.log(data);
                    data.payment_products.forEach(function(product) {
                        var productHtml = `
                        <div class='d-flex mb-3'>
                            <div class='col-6'>
                                <img src='/upload/product/${product.product_image}' class='img-fluid' style="max-height: 150px" alt='Product Image'>
                            </div>
                            <div class='col-6'>
                                <label>Sản phẩm: ${product.product_name}</label><br>
                                <label>Số lượng: ${product.product_quantity}</label><br>
                                <label>Đơn giá: ${product.product_price}</label>
                            </div>
                        </div>
                    `;
                        paymentProductsList.append(productHtml);
                    });
                    $('#paymentDetailsModal').modal('show');
                }
            });
        });
        @if(session('cart'))
            $('#show-cart-details').on('click', function() {
                var cartItems = @json($cartItems);
                var cartProductsList = $('#cartProductsList');
                cartProductsList.empty();
                cartItems.forEach(function(product) {
                    var productHtml = `
                    <div class='d-flex mb-3'>
                        <div class='col-6'>
                            <img src='/upload/product/${product.product_image}' class='img-fluid' style="max-height: 150px" alt='Product Image'>
                        </div>
                        <div class='col-6'>
                            <label>Sản phẩm: ${product.product_name}</label><br>
                            <label>Số lượng: ${product.product_qty}</label><br>
                            <label>Đơn giá: ${product.product_price}</label>
                        </div>
                    </div>
                `;
                    cartProductsList.append(productHtml);
                });
                $('#cartDetailsModal').modal('show');
            });
        @endif
    });
</script>
