@extends('layout1')
@section('content')
<div class="customer_login">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div>
            <p>Vui lòng sử dụng Đăng ký và Thanh toán để dễ dàng truy cập vào lịch sử đơn đặt hàng của bạn hoặc sử dụng Thanh toán với tư cách Khách</p>
        </div>
        <!--login area start-->

        <form action="{{ route('checkout') }}" method="POST" >
            @csrf
            <!--Thông tin người dùng-->
            <div class="col-lg-offset-3 col-md-offset-3 col-7">
                <div class="account_form">
                    <h2>Hóa đơn thanh toán</h2>
                    <div id="payment-form" style="border: 1px solid #d3ced2; padding: 20px;">
                        <label>Email <span>*</span></label>
                        <input type="text" name="shipping_email" class="shipping_email" placeholder="Email*" required value="{{ $customer->customer_email ?? '' }}">
                        <label>Họ và tên <span>*</span></label>
                        <input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên *" required value="{{ $customer->customer_name ?? '' }}">
                        <label>Số điện thoại <span>*</span></label>
                        <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại" required value="{{ $customer->customer_phone ?? '' }}">
                        <label>Địa chỉ <span>*</span></label>
                        <input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ *" required>
                        <label>Ghi chú <span>*</span></label>
                        <textarea name="shipping_notes" class="shipping_notes" placeholder="Nội dung ghi chú" rows="8"></textarea>

                        <button type="submit" class="btn btn-primary send_order">Thanh Toán</button>
                    </div>
                </div>
            </div>

            <!--Thông tin đơn hàng-->
            <div class="col-lg-offset-3 col-md-offset-3 col-5">
                <h2 style="font-size: 30px;;font-weight: 700;line-height: 22px;margin-bottom: 38px;">Thông tin đơn hàng</h2>
                <div class="payment_form" style="display: inline-grid; gap: 15px; border: 1px solid #d3ced2; padding: 20px;">
                    @if(!empty(session('cart')))
                            <?php $totalCost = 0; ?>
                        @foreach(session('cart') as $index => $cart)
                            <div>
                                <div class="col-5 pl-0">
                                    <img src="{{ asset('upload/product/'.$cart['product_image']) }}" alt="Image" style="width: 90%; min-height: 125px;"/>
                                </div>
                                <div class="col-7">
                                    <label>Tên sản phẩm: {{ $cart['product_name'] . ($cart['product_size'] !== null ? ' - Size ' . $cart['product_size'] : '') }}</label> <br>
                                    <label>Đơn giá: {{ $cart['product_price'] }}</label> <br>
                                    <label>Số lượng: {{ $cart['product_qty'] }}</label> <br>
                                        <?php
                                        $price = floatval(str_replace('$', '', $cart['product_price']));
                                        $quantity = intval($cart['product_qty']);
                                        $total = $price * $quantity;
                                        $totalCost += $total;
                                        ?>
                                    <label>Tổng: {{ number_format($total, 0, ',', '.') }}</label>

                                    <input type="hidden" name="cart[{{ $index }}][product_name]" value="{{ $cart['product_name'] }}">
                                    <input type="hidden" name="cart[{{ $index }}][product_size]" value="{{ $cart['product_size'] }}">
                                    <input type="hidden" name="cart[{{ $index }}][product_price]" value="{{ $cart['product_price'] }}">
                                    <input type="hidden" name="cart[{{ $index }}][product_qty]" value="{{ $cart['product_qty'] }}">
                                    <input type="hidden" name="cart[{{ $index }}][product_image]" value="{{ $cart['product_image'] }}">
                                </div>
                            </div>
                        @endforeach
                        <label class="mb-0">Tổng chi phí: {{ number_format($totalCost, 0, ',', '.') }}</label>
                        <label class="mb-0">Phí ship: 0</label>
                        <label class="mb-0">Chiết khấu: 0</label>
                        <h5 class="mb-0">Tổng đơn hàng: {{ number_format($totalCost, 0, ',', '.') }}</h5>

                        <input type="hidden" name="total_cost" value="{{$totalCost}}"
                    @else
                        <div class="text-muted">Chưa có đơn hàng cần thanh toán</div>
                    @endif
                </div>

            </div>
        </form>
</div>

@endsection
