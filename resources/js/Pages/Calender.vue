<template><!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">
            <!--**********************************
                    Nav header start
                ***********************************-->
            <div class="nav-header">
                <a href="/dashboard" class="brand-logo">
                    <img src="images/logo/logo.png" class="logo-abbr" alt="">
                    <img src="images/logo/logo-text.png" class="brand-title" alt="">
                    <img src="images/logo/logo-color.png" class="logo-color" alt="">
                    <img src="images/logo/logo-text-color.png" class="brand-title color-title" alt="neptune">
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A" />
                            <rect x="11" width="4" height="4" rx="2" fill="#2A353A" />
                            <rect x="22" width="4" height="4" rx="2" fill="#2A353A" />
                            <rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A" />
                            <rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A" />
                            <rect width="4" height="4" rx="2" fill="#2A353A" />
                            <rect y="11" width="4" height="4" rx="2" fill="#2A353A" />
                            <rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A" />
                            <rect y="22" width="4" height="4" rx="2" fill="#2A353A" />
                        </svg>
                    </div>
                </div>
            </div>
            <!--**********************************
                    Nav header end
                ***********************************-->



            <Header />

            <!--**********************************
                    Sidebar start
                ***********************************-->
            <div class="deznav">
                <div class="deznav-scroll">
                    <ul class="metismenu" id="menu">
                        <li><a class=" " href="javascript:void(0);" aria-expanded="false">
                                <i class="material-icons">trending_up</i>
                                <span class="nav-text">Terminal</span>
                            </a>

                        </li>
                        <li><a class=" " href="#" aria-expanded="false">
                                <i class="material-icons">grid_view</i>
                                <span class="nav-text">Calender</span>
                            </a>

                        </li>

                        <li>


                            <a class="logout" aria-expanded="false">
                                <i class="bi bi-power"></i>

                                <span @click="logout" class="nav-text">Logout</span>
                                <!-- <button type="submit">Logout</button> -->



                            </a>

                        </li>

                    </ul>
                </div>
            </div>
            <!--**********************************
                    Sidebar end
                ***********************************-->

            <!--**********************************
                    Content body start
                ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <!-- <div class="col-xl-12">
        								<div class="card bubles">
        									<div class="card-body">
        										<div class="buy-coin  bubles-down">
        											<div>
        												<h2>Buy & Sell 100+ Coins Instantly</h2>
        												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
        												<a href="exchange.html" class="btn btn-primary">Buy Coin</a>
        											</div>
        											<div class="coin-img">
        												<img src="images/coin.png" class="img-fluid" alt="">
        											</div>
        										</div>
        									</div>
        								</div>
        							</div> -->







                            </div>
                        </div>
                        <!-- first content ends  -->










                        <!-- trade history here  -->

                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-2 flex-wrap">
                                    <!-- <div class="d-flex"> -->
                                    <h4 class="heading me-2"> Trade History</h4>
                                    <nav>
                                        <div class="order nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-order-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-order" type="button" role="tab"
                                                aria-selected="true">Order</button>
                                            <button class="nav-link" id="nav-histroy-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-history" type="button" role="tab"
                                                aria-selected="false">Order History</button>

                                        </div>
                                    </nav>
                                    <!-- </div> -->
                                </div>
                                <div class="card-body pt-2">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-order" role="tabpanel"
                                            aria-labelledby="nav-order-tab">
                                            <div class="table-responsive dataTablehistory">
                                                <table id="example" class="table shadow-hover display" style="min-width:845px">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Pair</th>
                                                            <th>Side</th>
                                                            <th>Order</th>
                                                            <th>Filled</th>
                                                            <th>Price</th>
                                                            <th>Total</th>
                                                            <th class="text-end">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2022-10-03 16:24</td>
                                                            <td>BTC/USDT</td>
                                                            <td>Buy</td>
                                                            <td>Limit</td>
                                                            <td>-</td>
                                                            <td>100.00</td>
                                                            <td>576.76</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-history" role="tabpanel">
                                            <div class="table-responsive dataTabletrade">
                                                <table id="example5" class="table shadow-hover display" style="min-width:845px">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Trade</th>
                                                            <th>Side</th>
                                                            <th>Price</th>
                                                            <th>Amount</th>
                                                            <th class="text-end">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger2 Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-3"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- trade history ends  -->
                    </div>
        </div>
    </div>

    <!--**********************************
            Content body end
        ***********************************-->



    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer out-footer">
        <div class="copyright">
            <p>Copyright © Developed by <a href="/" target="_blank">Neptunefx</a> 2023</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************--></template>

<script>
import axios from 'axios';
import Header from './components/Header.vue';


export default {
    data() {
        return {

        }
    },
    components: {
        Header
    }
}


</script>