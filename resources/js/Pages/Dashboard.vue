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
    					<li><a class=" " href="/calendar" aria-expanded="false">
    							<i class="material-icons">grid_view</i>
    							<span class="nav-text">Calender</span>
    						</a>

    					</li>
						<li><a class=" " href="https://crm.neptunefx.net/" aria-expanded="false">
    							<i class="material-icons">grid_view</i>
    							<span class="nav-text">Client Area</span>
    						</a>

    					</li>

    					<li>


    						<a class="logout" aria-expanded="false">
    							<i class="bi bi-power"></i>

    							<span @click="logout()" class="nav-text">Logout</span>
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

    							<!-- tradingview chart  -->
    							<div class="col-xl-12">
    								<div class="card">
    									<div class="card-header border-0 pb-2 ">
    										<!-- <div class="d-flex"> -->
    										<!-- <h4 class="heading me-2">Trade History</h4> -->
    										<nav>
    											<div class="order nav nav-tabs mobile-only" id="nav-tab" role="tablist">
    												<button class="nav-link active " id="nav-order-tab" data-bs-toggle="modal"
    													data-bs-target="#basicModal" type="button" role="tab"
    													aria-selected="true">New Order</button>

    												<!-- <button class="nav-link" id="nav-trade-tab" data-bs-toggle="tab" data-bs-target="#nav-trade" type="button" role="tab"  aria-selected="false">Trade Histroy</button>  -->
    											</div>

    										</nav>
    										<!-- </div> -->
    										<button class="btn d-flex btn d-flex " type="button"> {{accountType(user.live)}}</button>
    									</div>
    									<div class="card-body">
    										<!-- TradingView Widget BEGIN -->

    										<div id="tradingview_78e95"></div>




    										<!-- TradingView Widget END -->
    									</div>
    								</div>
    							</div>
    							<!-- chart ends here -->





    						</div>
    					</div>
    					<!-- first content ends  -->







    					<!-- right tab begins -->
    					<div class="col-xl-4">
    						<div class="row">

    							<!-- place order box  -->
    							<div class="col-xl-12 col-sm-6 desktop-only">
    								<div class="card h-auto">
    									<div class="card-body px-0 pt-1">
    										<div class="">
    											<nav class="buy-sell">

    												<div class="nav nav-tabs" id="nav-tab2" role="tablist">

    													<button class="nav-link active" id="nav-buy-tab" data-bs-toggle="tab"
    														data-bs-target="#nav-buy" type="button" role="tab"
    														aria-controls="nav-buy" aria-selected="true">Market</button>
    													<button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab"
    														data-bs-target="#nav-sell" type="button" role="tab"
    														aria-controls="nav-sell" aria-selected="false">Limit</button>
    												</div>

    											</nav>
    											<div class="tab-content" id="nav-tabContent">
    												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel"
    													aria-labelledby="nav-buy-tab">
    													<nav class="limit-sell">
    														<div class="nav nav-tabs" id="nav-tab3" role="tablist">
    															<button class="nav-link active" id="nav-market-order-tab1"
    																data-bs-toggle="tab" data-bs-target="#nav-market-order1"
    																type="button" role="tab" aria-controls="nav-market-order1"
    																aria-selected="true">market order</button>
    															<!-- <button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">limit order</button> -->

    														</div>
    													</nav>
    													<div class="tab-content" id="nav-tabContent1">
    														<div class="tab-pane fade show active" id="nav-market-order1"
    															role="tabpanel" aria-labelledby="nav-market-order-tab1">
    														</div>
    														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel"
    															aria-labelledby="nav-limit-order-tab1">
    														</div>
    													</div>
    													<div class="sell-element">
    														<form @submit.prevent="buyOrder()">
    															<div class="basic-form">



    																<div class="col-auto my-1">
    																	<label class="me-sm-2">Symbol</label>
    																	<select v-model="selectedSymbol"
    																		 name="selectedSymbol"
    																		class="me-sm-2 form-control wide"
    																		id="inlineFormCustomSelect">
    																		<option v-for="symbol in symbols" :key="symbol.id"
    																			:value="symbol.name"> {{ symbol.name }}, &nbsp;
    																			{{ symbol.desc }} </option>

    																	</select>
    																</div>

    															</div>



    															<div class="sell-blance">
    																<label class="form-label text-primary">Volume </label>
    																<div class="form-label blance"><span>BALANCE:</span>
    																	<p>${{ user.balance }} </p>
    																</div>
    																<div class="input-group">
    																	<input type="number" step="any"
    																		v-on:change="validateVolume()" v-model="volume"
    																		class="form-control" placeholder="0.00" required>
    																	<span class="input-group-text">Lot</span>
    																</div>
    															</div>

    															<div class="sell-blance">
    																<label class="form-label text-primary">Stop Loss</label>
    																<div class="input-group">
    																	<input type="number" v-model="stopLoss"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>
    																</div>
    															</div>
    															<div class="sell-blance">
    																<label class="form-label text-primary">Take Profit</label>
    																<div class="input-group">
    																	<input type="number" v-model="takeProfit"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>

    																</div>

    															</div>
														<div class="slider-wrapper">
															

    																<div v-if="errorMessage" class="alert alert-danger">
    																	<ul>
    																		<li >{{ errorMessage }}</li>
    																	</ul>
    																</div>



    															</div>
    															<div class="text-center">
    																<button type="submit"
    																	class="btn btn-success w-40">BUY</button> &nbsp; &nbsp;
    																&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a
    																	@click="sellOrder()"
    																	class="btn btn-danger w-40">Sell</a>
    															</div>
    														</form>
    													</div>

    												</div>

													 <!-- limit order here -->

    												<div class="tab-pane fade" id="nav-sell" role="tabpanel"
    													aria-labelledby="nav-sell-tab">
    													<nav class="limit-sell">
    														<div class="nav nav-tabs" id="nav-tab4" role="tablist">
    															<button class="nav-link active" id="nav-market-order-tab"
    																data-bs-toggle="tab" data-bs-target="#nav-market-order"
    																type="button" role="tab" aria-controls="nav-market-order"
    																aria-selected="true">Pending order</button>
    															<!-- <button class="nav-link" id="nav-limit-order-tab" data-bs-toggle="tab" data-bs-target="#nav-limit-order" type="button" role="tab" aria-controls="nav-limit-order" aria-selected="false">limit order2</button> -->
    														</div>
    													</nav>
    													<div class="tab-content" id="nav-tabContent2">
    														<div class="tab-pane fade show active" id="nav-market-order"
    															role="tabpanel" aria-labelledby="nav-market-order-tab"></div>
    														<div class="tab-pane fade" id="nav-limit-order" role="tabpanel"
    															aria-labelledby="nav-limit-order-tab">limit order on sell side
    														</div>
    													</div>


														<div class="sell-element">
    														<form @submit.prevent="pendingOrder()">
    															<div class="basic-form">



    																<div class="col-auto my-1">
    																	<label class="me-sm-2">Symbol</label>
    																	<select v-model="selectedSymbol"
    																		 name="selectedSymbol"
    																		class="me-sm-2 form-control wide"
    																		id="inlineFormCustomSelect">
    																		<option v-for="symbol in symbols" :key="symbol.id"
    																			:value="symbol.name"> {{ symbol.name }}, &nbsp;
    																			{{ symbol.desc }} </option>

    																	</select>
    																</div>

    															</div>



    															<div class="sell-blance">
    																<label class="form-label text-primary">Volume </label>
    																<div class="form-label blance"><span>BALANCE:</span>
    																	<p>${{ user.balance }} </p>
    																</div>

																	
    																<div class="input-group">
    																	<input type="number" step="any"
    																		v-on:change="validateVolume()" v-model="volume"
    																		class="form-control" placeholder="0.00" required>
    																	<span class="input-group-text">Lot</span>
    																</div>
    															</div>

																<div class="sell-blance">
    																<label class="form-label text-primary">Entry Price</label>
    																<div class="input-group">
    																	<input type="number" v-model="price"
    																		 step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>
    																</div>
    															</div>


    															<div class="sell-blance">
    																<label class="form-label text-primary">Stop Loss</label>
    																<div class="input-group">
    																	<input type="number" v-model="stopLoss"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>
    																</div>
    															</div>
    															<div class="sell-blance">
    																<label class="form-label text-primary">Take Profit</label>
    																<div class="input-group">
    																	<input type="number" v-model="takeProfit"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>

    																</div>

    															</div>
														<div class="slider-wrapper">
															

    																<div v-if="errorMessage" class="alert alert-danger">
    																	<ul>
    																		<li >{{ errorMessage }}</li>
    																	</ul>
    																</div>



    															</div>
    															<div class="text-center">
    																<button type="submit"
    																	class="btn btn-success w-40">BUY</button> &nbsp; &nbsp;
    																&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a
    																	@click="pendingSellOrder()"
    																	class="btn btn-danger w-40">Sell</a>
    															</div>
    														</form>
    													</div>


    												</div>

    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    							<!-- place order box ends -->








    							


    						</div>
    					</div>
    					<!-- right tab end  -->

						<!-- Modal -->
    							<div class="modal fade" id="basicModal">
    								<div class="modal-dialog" role="document">
    									<div class="modal-content">
    										<div class="modal-header">
    											<h5 class="modal-title">New Order</h5>
    											<button type="button" class="btn-close" data-bs-dismiss="modal">
    											</button>
    										</div>
    										<div class="modal-body">

    											<div class="card h-auto">
    									<div class="card-body px-0 pt-1">
    										<div class="">
    											<nav class="buy-sell">

    												<!-- <div class="nav nav-tabs" id="nav-tab2" role="tablist">

    													<button class="nav-link active" id="nav-buy-tab" data-bs-toggle="tab"
    														data-bs-target="#nav-buy" type="button" role="tab"
    														aria-controls="nav-buy" aria-selected="true">Market</button>
    													<button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab"
    														data-bs-target="#nav-sell" type="button" role="tab"
    														aria-controls="nav-sell" aria-selected="false">Limit</button>
    												</div> -->

    											</nav>
    											<div class="tab-content" id="nav-tabContent">
    												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel"
    													aria-labelledby="nav-buy-tab">
    													<nav class="limit-sell">
    														<div class="nav nav-tabs" id="nav-tab3" role="tablist">
    															<button class="nav-link active" id="nav-market-order-tab1"
    																data-bs-toggle="tab" data-bs-target="#nav-market-order1"
    																type="button" role="tab" aria-controls="nav-market-order1"
    																aria-selected="true">market order</button>
    															<!-- <button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">limit order</button> -->

    														</div>
    													</nav>
    													<div class="tab-content" id="nav-tabContent1">
    														<div class="tab-pane fade show active" id="nav-market-order1"
    															role="tabpanel" aria-labelledby="nav-market-order-tab1">
    														</div>
    														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel"
    															aria-labelledby="nav-limit-order-tab1">
    														</div>
    													</div>
    													<div class="sell-element">
    														<form @submit.prevent="buyOrder()">
    															<div class="basic-form">



    																<div class="col-auto my-1">
    																	<label class="me-sm-2">Symbol</label>
    																	<select v-model="selectedSymbol"
    																		 name="selectedSymbol"
    																		class="me-sm-2 form-control wide"
    																		id="inlineFormCustomSelect">
    																		<option v-for="symbol in symbols" :key="symbol.id"
    																			:value="symbol.name"> {{ symbol.name }}, &nbsp;
    																			{{ symbol.desc }} </option>

    																	</select>
    																</div>

    															</div>



    															<div class="sell-blance">
    																<label class="form-label text-primary">Volume </label>
    																<div class="form-label blance"><span>BALANCE:</span>
    																	<p>${{ user.balance }} </p>
    																</div>
    																<div class="input-group">
    																	<input type="number" step="any"
    																		v-on:change="validateVolume()" v-model="volume"
    																		class="form-control" placeholder="0.00" required>
    																	<span class="input-group-text">Lot</span>
    																</div>
    															</div>

    															<div class="sell-blance">
    																<label class="form-label text-primary">Stop Loss</label>
    																<div class="input-group">
    																	<input type="number" v-model="stopLoss"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>
    																</div>
    															</div>
    															<div class="sell-blance">
    																<label class="form-label text-primary">Take Profit</label>
    																<div class="input-group">
    																	<input type="number" v-model="takeProfit"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>

    																</div>

    															</div>
														<div class="slider-wrapper">
															

    																<div v-if="errorMessage" class="alert alert-danger">
    																	<ul>
    																		<li >{{ errorMessage }}</li>
    																	</ul>
    																</div>



    															</div>
    															<div class="text-center">
    																<button type="submit"
    																	class="btn btn-success w-40">BUY</button> &nbsp; &nbsp;
    																&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a
    																	@click="sellOrder()"
    																	class="btn btn-danger w-40">Sell</a>
    															</div>
    														</form>
    													</div>

    												</div>

													 <!-- limit order here -->

    												<div class="tab-pane fade" id="nav-sell" role="tabpanel"
    													aria-labelledby="nav-sell-tab">
    													<nav class="limit-sell">
    														<div class="nav nav-tabs" id="nav-tab4" role="tablist">
    															<button class="nav-link active" id="nav-market-order-tab"
    																data-bs-toggle="tab" data-bs-target="#nav-market-order"
    																type="button" role="tab" aria-controls="nav-market-order"
    																aria-selected="true">Pending order</button>
    															<!-- <button class="nav-link" id="nav-limit-order-tab" data-bs-toggle="tab" data-bs-target="#nav-limit-order" type="button" role="tab" aria-controls="nav-limit-order" aria-selected="false">limit order2</button> -->
    														</div>
    													</nav>
    													<div class="tab-content" id="nav-tabContent2">
    														<div class="tab-pane fade show active" id="nav-market-order"
    															role="tabpanel" aria-labelledby="nav-market-order-tab"></div>
    														<div class="tab-pane fade" id="nav-limit-order" role="tabpanel"
    															aria-labelledby="nav-limit-order-tab">limit order on sell side
    														</div>
    													</div>


														<div class="sell-element">
    														<form @submit.prevent="pendingOrder()">
    															<div class="basic-form">



    																<div class="col-auto my-1">
    																	<label class="me-sm-2">Symbol</label>
    																	<select v-model="selectedSymbol"
    																		 name="selectedSymbol"
    																		class="me-sm-2 form-control wide"
    																		id="inlineFormCustomSelect">
    																		<option v-for="symbol in symbols" :key="symbol.id"
    																			:value="symbol.name"> {{ symbol.name }}, &nbsp;
    																			{{ symbol.desc }} </option>

    																	</select>
    																</div>

    															</div>



    															<div class="sell-blance">
    																<label class="form-label text-primary">Volume </label>
    																<div class="form-label blance"><span>BALANCE:</span>
    																	<p>${{ user.balance }} </p>
    																</div>

																	
    																<div class="input-group">
    																	<input type="number" step="any"
    																		v-on:change="validateVolume()" v-model="volume"
    																		class="form-control" placeholder="0.00" required>
    																	<span class="input-group-text">Lot</span>
    																</div>
    															</div>

																<div class="sell-blance">
    																<label class="form-label text-primary">Entry Price</label>
    																<div class="input-group">
    																	<input type="number" v-model="price"
    																		 step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>
    																</div>
    															</div>


    															<div class="sell-blance">
    																<label class="form-label text-primary">Stop Loss</label>
    																<div class="input-group">
    																	<input type="number" v-model="stopLoss"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>
    																</div>
    															</div>
    															<div class="sell-blance">
    																<label class="form-label text-primary">Take Profit</label>
    																<div class="input-group">
    																	<input type="number" v-model="takeProfit"
    																		v-on:change="validateVolume()" step="any"
    																		class="form-control" placeholder="0">
    																	<span class="input-group-text"></span>

    																</div>

    															</div>
														<div class="slider-wrapper">
															

    																<div v-if="errorMessage" class="alert alert-danger">
    																	<ul>
    																		<li >{{ errorMessage }}</li>
    																	</ul>
    																</div>



    															</div>
    															<div class="text-center">
    																<button type="submit"
    																	class="btn btn-success w-40">BUY</button> &nbsp; &nbsp;
    																&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a
    																	@click="pendingSellOrder()"
    																	class="btn btn-danger w-40">Sell</a>
    															</div>
    														</form>
    													</div>


    												</div>

    											</div>
    										</div>
    									</div>
    								</div>

    										</div>
    										<div class="modal-footer">
    											<button type="button" class="btn btn-danger light"
    												data-bs-dismiss="modal">Close</button>

    										</div>
    									</div>
    								</div>
    							</div>
    							<!-- end order modal  -->


    					<!-- trade history here  -->

    					<div class="col-xxl-12">
    						<div class="card">
    							<div class="card-header border-0 pb-2 flex-wrap">
    								<!-- <div class="d-flex"> -->
    								<h4 class="heading me-2"> Trade</h4>
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
    														<th>Symbol</th>
    														<th>Ticket</th>
    														<th>Time</th>
    														<th>Side</th>
    														<th>Filled</th>
    														<th>Type</th>
    														<th>Volume</th>
    														<th>S/L</th>
    														<th>T/P</th>
    														<th>Profit</th>
    														<th class="text-end">Close</th>
    													</tr>
    												</thead>
    												<tbody>



    													<tr v-for="ongoingTrade in ongoingTrades" :key="ongoingTrade.id">
    														<td>{{ ongoingTrade.symbol }}</td>
    														<td>{{ ongoingTrade.id }}</td>
    														<td>{{ formatDate(ongoingTrade.updated_at) }}</td>
    														<td>{{ ongoingTrade.side }}</td>
    														<td>{{ ongoingTrade.entry_price }}</td>
    														<td>{{ ongoingTrade.type }}</td>
    														<td>{{ ongoingTrade.volume }}</td>
    														<td>{{ ongoingTrade.sl }}</td>
    														<td>{{ ongoingTrade.tp }}</td>
    														
    														<td>{{ floatingProfit(ongoingTrade.volume, ongoingTrade.spread, ongoingTrade.commission, ongoingTrade.entry_price, ongoingTrade.nominal, ongoingTrade.side).toFixed(2) }}</td>
    														<td class="text-end">
    															<div class="d-flex justify-content-end">

    																<a href="javascript:void(0);" @click="endTrade(ongoingTrade.id, floatingProfit(ongoingTrade.volume, ongoingTrade.spread, ongoingTrade.commission, ongoingTrade.entry_price, ongoingTrade.nominal, ongoingTrade.side))"
    																	class="btn btn-danger shadow btn-xs sharp"><i
    																		class="fa fa-x"></i></a>
    															</div>
    														</td>
    													</tr>

    												</tbody>
													<!-- if there's any limit trade then show them  -->
													<tbody v-if="pendingTrades">



												<tr v-for="pendingTrade in pendingTrades" :key="pendingTrade.id">
													<td>{{ pendingTrade.symbol }}</td>
													<td>{{ pendingTrade.id }}</td>
													<td>{{ formatDate(pendingTrade.updated_at) }}</td>
													<td>{{ pendingTrade.side }}</td>
													<td>{{ pendingTrade.entry_price }}</td>
													<td>{{ pendingTrade.type }}</td>
													<td>{{ pendingTrade.volume }}</td>
													<td>{{ pendingTrade.sl }}</td>
													<td>{{ pendingTrade.tp }}</td>
													
													<td>0</td>
													<td class="text-end">
														<div class="d-flex justify-content-end">

															<a href="javascript:void(0);" @click="endTrade(pendingTrade.id, 0)"
																class="btn btn-danger shadow btn-xs sharp"><i
																	class="fa fa-x"></i></a>
														</div>
													</td>
												</tr>

												</tbody>
    												<p>Balance: {{ user.balance }} USD Equity: {{ this.equity }} </p>
    											</table>
    										</div>
    									</div>
    									<div class="tab-pane fade" id="nav-history" role="tabpanel">
    										<div class="table-responsive dataTabletrade">
    											<table id="example5" class="table shadow-hover display" style="min-width:845px">
    												<thead>
    													<tr>
    														<th>Time</th>
    														<th>Ticket</th>
    														<th>Side</th>
    														<th>Volume</th>
    														<th>Pair</th>
    														<th>Commission</th>
    														<th>Price</th>
    														<th>Profit</th>

    													</tr>
    												</thead>
    												<tbody>
    													<tr v-for="pastTrade in pastTrades">
    														<td>{{ formatDate(pastTrade.updated_at) }}</td>
    														<td>{{ pastTrade.id }}</td>
    														<td>{{ pastTrade.side }}</td>
    														<td>{{ pastTrade.volume }}</td>
    														<td>{{ pastTrade.symbol }}</td>
    														<td>-{{ pastTrade.commission }}</td>
    														<td>{{ pastTrade.exit_price }}</td>
    														<td>{{ pastTrade.profit }}</td>
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
    				<p>Copyright © Developed by <a href="/" target="_blank">Neptunefx</a> {{ year }} </p>
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
import { Inertia } from '@inertiajs/inertia';
import Header from './components/Header.vue';
import Chart from './components/Chart.vue';







export default {

	

	data() {
		return {
			csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
			selectedSymbol: 'XAUUSD',
			selectedInstrument: 'XAU_USD',
			volume: 1,
			bid: null,
			ask: null,
			spread: 1,
			nominal: 100,
			tradeable: null,
			stopLoss: null,
			entryPrice: 0,
			exitPrice: 0,
			equity: 0,
			side: '',
			theme: 'Dark',
			takeProfit: null,
			errorMessage: '',
			commissionRate: 3,
			figure: 30,
			float: 0,
			currentPrice: 0,
			year: 2023,
			price: null,
			accountId: '101-004-23675402-001',
			token: '9296504eaa976bfbc38257a8bf4cd23d-364f4379f091a7ef2ebccbe8da1f4bf5',

			symbols: [
				{
					id: 1,
					name: 'GBPUSD',
					desc: 'Great Britan Pound / US Dollar'
				},
				{
					id: 2,
					name: 'XAUUSD',
					desc: 'Gold / US Dollar'
				},

			]

		}
	},
	components: {
		Header,
		Chart
	},
	computed: {
		commission() {
			return this.volume * this.commissionRate;
		}

		

},
props: {
	user: Object,
	ongoingTrades: Object,
	pastTrades: Object,
	pendingTrades: Object,
	errors: {
		type: Object,
        default: () => ({})
	}

},
watch: {
	selectedSymbol(){
		this.tradingViewChart();
		if (this.selectedSymbol === "XAUUSD") {
				this.selectedInstrument = "XAU_USD";
			} else if (this.selectedSymbol === "GBPUSD"){
				this.selectedInstrument = "GBP_USD";
			} else {
				this.selectedInstrument = "XAU_USD";
			}
		// console.log('ade' + this.selectedInstrument)
		 this.priceFeeds();
	}

},

methods: {
	logout() {
		axios.post('/logout', {
			_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
		})
			.then(() => {
				console.log('User successfully logged out.');
				window.location.replace('/login');
			})
			.catch(error => {
				console.log(error);
			});
	},
	//end trade using tp and sl
	checkForlevels() {
    this.ongoingTrades.forEach((trade) => {
      if (this.bid >= trade.tp) {
        this.endTrade(trade.id);
      }
    });
  },
  

	// format date
	formatDate(dateString) {
      const date = new Date(dateString);
      const day = date.getDate();
      const month = date.getMonth() + 1;
      const year = date.getFullYear();
      const hours = date.getHours();
      const minutes = date.getMinutes();
      const seconds = date.getSeconds();
      return `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;
    },
	
	async buyOrder(){
		if (this.user.balance < 10) {
			this.errorMessage = 'Your balance is below the minimum amount.';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;

		}
		if (this.tradeable === false){
			this.errorMessage = 'Market is Closed!';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;
		}

		const data = {
			volume: this.volume,
			symbol: this.selectedSymbol,
			side: 'buy',
			type: 'market',
			status: 1,
			commission: this.commission,
			sl: this.stopLoss,
			tp: this.takeProfit,
			entryPrice: this.ask,
			nominal: this.nominal,
			spread: this.spread

		};
		 this.$inertia.post('/buyOder', data);
		this.volume = 1;
		this.stopLoss = null;
		this.takeProfit = null;
	},
	async sellOrder(){
		if (this.user.balance < 10) {
			this.errorMessage = 'Your balance is below the minimum amount.';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;

		}
		if (this.tradeable === false){
			this.errorMessage = 'Market is Closed!';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;
		}

		const data = {
			volume: this.volume,
			symbol: this.selectedSymbol,
			side: 'sell',
			type: 'market',
			status: 1,
			commission: this.commission,
			sl: this.stopLoss,
			tp: this.takeProfit,
			entryPrice: this.ask,
			nominal: this.nominal,
			spread: this.spread

		};
		 this.$inertia.post('/buyOder', data);
		this.volume = 1;
		this.stopLoss = null;
		this.takeProfit = null;
	},

	async endTrade(id, profit){
		
		if (this.tradeable === false){
			this.errorMessage = 'Market is Closed!';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;
		}

		const data = {
			ticket: id,
			exitPrice: this.ask,
			profit: profit

		};
		 this.$inertia.post('/endTrade', data);
		

	},
	

	// Open a buy pending order
	async pendingOrder(){
		if (this.user.balance < 10) {
			this.errorMessage = 'Your balance is below the minimum amount.';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;

		}
		if (this.tradeable === false){
			this.errorMessage = 'Market is Closed!';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;
		}

		const data = {
			volume: this.volume,
			symbol: this.selectedSymbol,
			side: 'buy',
			type: 'limit',
			status: 3,
			commission: this.commission,
			sl: this.stopLoss,
			tp: this.takeProfit,
			entryPrice: this.price,
			nominal: this.nominal,
			spread: this.spread

		};
		await this.$inertia.post('/buyOder', data);
		this.volume = 1;
		this.stopLoss = null;
		this.takeProfit = null;
		this.price - null;
	},
	// end of buy pending order
	
	// open pending sell order
	async pendingSellOrder(){
		if (this.user.balance < 10) {
			this.errorMessage = 'Your balance is below the minimum amount.';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;

		}
		if (this.tradeable === false){
			this.errorMessage = 'Market is Closed!';
			setTimeout(() => {
				this.errorMessage = '';
			}, 5000); // delay of 5000 ms (5 seconds)
			return;
		}

		const data = {
			volume: this.volume,
			symbol: this.selectedSymbol,
			side: 'sell',
			type: 'limit',
			status: 3,
			commission: this.commission,
			sl: this.stopLoss,
			tp: this.takeProfit,
			entryPrice: this.price,
			nominal: this.nominal,
			spread: this.spread

		};
		await this.$inertia.post('/buyOder', data);
		this.volume = 1;
		this.stopLoss = null;
		this.takeProfit = null;
		this.price = null;
	},

	//get account status
	accountType(state){
		let status = 'Demo Account';
		if (state === 1){
			status = 'Live Account';

		}else {
			status = 'Demo Account'
		}
		return status;

	},

	floatingProfit(volume, spread, commission, entryPrice, nominal, side) {
		let difference = 0;

		if (side === 'buy'){
			difference = this.bid - entryPrice;
		} else if (side === 'sell'){
			difference = entryPrice - this.ask;
		}
		let float = volume * nominal * difference - (spread + commission);
		this.equity = (parseFloat(this.user.balance) + parseFloat(float)).toFixed(2);
		return float;
		
	},
	priceFeeds() {
		const url = 'https://api-fxpractice.oanda.com/v3/accounts/' + this.accountId + '/pricing?instruments=' + this.selectedInstrument;

		axios.get(url, {
			headers: {
			'Authorization': 'Bearer 9296504eaa976bfbc38257a8bf4cd23d-364f4379f091a7ef2ebccbe8da1f4bf5',
			'Content-Type': 'application/json'
			}
		})
		.then(response => {
			this.bid = response.data.prices[0].closeoutBid;
			this.ask = response.data.prices[0].closeoutAsk;
			this.spread = this.ask - this.bid;
			this.tradeable = response.data.prices[0].tradeable;

			if (response.data.prices[0].instrument == "XAU_USD"){
				this.nominal = 100;
			} else {
				this.nominal = 100000;
			}

			// console.log(this.tradeable);
			// console.log(this.ask);
			// console.log(this.bid);
			// Replace console.log with code to store the price in your Vue component's data
		})
		.catch(error => {
			console.log(error);
			// Handle error
		});
},


	validateVolume(){
		// Check volume input length
		let volumeStr = String(this.volume);
		if (volumeStr.length > 5) {
			this.volume = parseFloat(volumeStr.substring(0, 5));
		}

		// Validate stopLoss and takeProfit inputs
		let stopLossStr = String(this.stopLoss);
		if (stopLossStr.length > 7) {
			this.stopLoss = parseFloat(stopLossStr.substring(0, 7));
		}
		let takeProfitStr = String(this.takeProfit);
		if (takeProfitStr.length > 7) {
			this.takeProfit = parseFloat(takeProfitStr.substring(0, 7));
		}

		// Validate volume input range
		if (this.volume < 0.1) {
			this.volume = 0.1;
		} else if (this.volume > 50) {
			this.volume = 50;
		}

	},

	

	currentYear(){
		const currentYear = new Date().getFullYear();
		this.year = currentYear;
	},
	tradingViewChart(){
		new TradingView.widget(
			{
				"width": "100%",
				"height": 516,
				"symbol": "OANDA:" + this.selectedSymbol,
				"interval": "60",
				"timezone": "Etc/UTC",
				"theme": this.theme,
				"style": "1",
				"locale": "en",
				"toolbar_bg": "#f1f3f6",
				"enable_publishing": false,
				"withdateranges": false,
				"hide_side_toolbar": false,
				"allow_symbol_change": false,
				"container_id": "tradingview_78e95"
			}
		);

	},
	chartTheme(){
		if ($('body').attr('data-theme-version') == "light") {

			this.theme = 'Light';
		} else {
			this.theme = 'Dark';
		}
	},
	handleChange() {
		this.chartTheme();
		this.tradingViewChart();
	}



},
mounted() {

	this.currentYear();
	this.tradingViewChart();
	this.chartTheme();
	$('#theme_version').on('change', this.handleChange);
	
	setInterval(this.priceFeeds, 1000);

	
},

created() {
    // Check if user has saved data
  //  const savedData = localStorage.getItem('mySavedData');
    
  //  if (savedData) {
      // Use saved data to set default URL
    //  this.$router.push(savedData);
  //  } else {
      // Set default URL
    //  this.$router.push('/Dashboard');
 //   }
  }


 }

</script>

<style>@media (max-width: 767px) {

	/* Styles for mobile devices with a maximum width of 767 pixels */
	.desktop-only {
		display: none;
	}
}

@media (min-width: 768px) {

	/* Styles for desktop devices with a minimum width of 768 pixels */
	.mobile-only {
		display: none;
	}
}
</style>