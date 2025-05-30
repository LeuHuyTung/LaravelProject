@extends('layouts.app')
@section ('content')
      <  <div class="rts-account-section section-gap">
        <div class="container">
            <div class="account-inner">
            @include('user.account-nav')
                <div class="account-main-area">
                    <div class="account-main dashboard filterd-items">
                        <div class="account-profile-area">
                            <div class="profile-dp"><img src="assets/images/blog/img-13.jpg" alt="profile-dp"></div>
                            <div class="d-block">
                                <span class="profile-name"><span>Hi,</span> Rosalina D.</span>
                                <span class="profile-date d-block">June 23, 2025</span>
                            </div>
                        </div>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing
                            addresses, and edit your password and account details.</p>

                        <div class="activity-box">
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-box-check"></i></div>
                                <span class="title">Active Orders</span>
                                <span class="value">33</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-download"></i></div>
                                <span class="title">Downloads</span>
                                <span class="value">10</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <span class="title">Address</span>
                                <span class="value">12/A, New Castle, NYC</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-user"></i></div>
                                <span class="title">Account Details</span>
                                <span class="value">33</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-heart"></i></div>
                                <span class="title">Wishlist</span>
                                <span class="value">33</span>
                            </div>
                            <a href="login.html" class="activity-item">
                                <div class="icon"><i class="fas fa-sign-out-alt"></i></div>
                                <span class="title">Logout</span>
                            </a>
                        </div>
                    </div>
                    <div class="account-main orders filterd-items hide">
                        <h2 class="mb--30">My Orders</h2>
                        <table class="table">
                            <thead>
                                <tr class="top-tr">
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1357</td>
                                    <td>March 45, 2020</td>
                                    <td>Processing</td>
                                    <td>$125.00 for 2 item</td>
                                    <td><a href="#" class="btn-small d-block">View</a></td>
                                </tr>
                                <tr>
                                    <td>#2468</td>
                                    <td>June 29, 2020</td>
                                    <td>Completed</td>
                                    <td>$364.00 for 5 item</td>
                                    <td><a href="#" class="btn-small d-block">View</a></td>
                                </tr>
                                <tr>
                                    <td>#2366</td>
                                    <td>August 02, 2020</td>
                                    <td>Completed</td>
                                    <td>$280.00 for 3 item</td>
                                    <td><a href="#" class="btn-small d-block">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="account-main address filterd-items hide">
                        <div class="row">
                            <div class="col-xl-5 col-md-5">
                                <div class="billing-address">
                                    <h2 class="mb--30">Billing Address</h2>
                                    <address>
                                        3522 Interstate<br>
                                        75 Business Spur,<br>
                                        Sault Ste. <br>Marie, MI 49783
                                    </address>
                                    <p class="mb--10">New York</p>
                                    <a href="#" class="btn-small">Edit</a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-5">
                                <div class="shipping-address">
                                    <h4 class="mb--30">Shipping Address</h4>
                                    <address>
                                        4299 Express Lane<br>
                                        Sarasota, <br>FL 34249 USA <br>Phone: 1.941.227.4444
                                    </address>
                                    <p class="mb--10">Sarasota</p>
                                    <a href="#" class="btn-small">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-main accountdtls filterd-items hide">
                        <div class="login-form">
                            <div class="section-title">
                                <h2>Login</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form">
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Username or email address*" required="">
                                        </div>
                                        <div class="form">

                                            <div class="password-input">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password*" required="">
                                                <span class="show-password-input"></span>
                                            </div>
                                        </div>
                                        <div class="form">
                                            <input type="checkbox" class="form-check-input" id="remember">
                                            <label for="remember" class="form-label">Remember Me</label>
                                        </div>
                                        <div class="form">
                                            <button type="submit" class="btn">Login <i
                                                    class="fal fa-long-arrow-right"></i></button>
                                        </div>
                                        <a class="forgot-password" href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-ad mt--40"><img src="assets/images/banner/45Offer.jpg" alt="ad"></div>
                </div>
            </div>
        </div>
    </div>
@endsection