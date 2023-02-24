<template>
   <!-- tradingview chart  -->
   <div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-2 ">
										<!-- <div class="d-flex"> -->
											<!-- <h4 class="heading me-2">Trade History</h4> -->
											<nav>
											  <div class="order nav nav-tabs" id="nav-tab" role="tablist">
												<button class="nav-link active" id="nav-order-tab" data-bs-toggle="modal" data-bs-target="#basicModal" type="button" role="tab"  aria-selected="true">New Order</button>
												
												<!-- <button class="nav-link" id="nav-trade-tab" data-bs-toggle="tab" data-bs-target="#nav-trade" type="button" role="tab"  aria-selected="false">Trade Histroy</button>  -->
											  </div>
											  
											</nav>
										<!-- </div> -->
										<button class="btn d-flex btn d-flex btn-danger" type="button"> {{ Symbol }} Account</button>
									</div>
									<div class="card-body">
										 <div id="tradingview_e8053" class="tranding-chart"></div>
									</div>
								</div>
							</div>
							<!-- chart ends here -->
</template>

<script>
export default {
   
}
</script>