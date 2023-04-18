<template>
	
    <div class="card">
         <div class="card-body p-4">
            <h5 class="card-title">Add New Product</h5>
            <hr/>
	    
            <div class="form-body mt-4">
               <div class="row">
		    <div class="col-lg-8">
			<div class="border border-3 p-4 rounded">
			    <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Title</label>
				<input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
			    </div>
			    <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Description</label>
				<textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
			    </div>
			    <div class="row g-3">
				<div class="col-lg-6">
				    <div class="mb-3">
					<label class="form-label">Category</label>
					<div class="input-group">
					    <select class="single-select form-select">
							<option selected>Select Category</option>
							<option v-for="item in categoryList" value="item.id">{{item.name}}</option>
					    </select>
					    <button data-bs-toggle="modal" @click="showModal = true" data-bs-target="#attributes-add-edit-modal"  class="btn btn-outline-secondary" type="button">
						<i class='bx bx-plus'></i>
					    </button>
					    <transition name="modal">
						    <div class="">
							    <modal @close="closeModal"/>
						    </div>
					    </transition>
					</div>
				    </div>
				</div>
				<div class="col-lg-6">
				    <div class="mb-3">
					<label class="form-label">Brand</label>
					<div class="input-group">
					    <select class="single-select form-select">
						<option selected>Last Visit</option>
						<option value="1">Dashboard</option>
						<option value="2">Control</option>
						<option value="3">KPI</option>
						<option value="3">Map</option>
						<option value="3">Billing Product</option>
					    </select>
					    <button class="btn btn-outline-secondary" type="button">
						<i class='bx bx-plus'></i>
					    </button>
					</div>
				    </div>
				</div>
				<div class="col-lg-6">
				    <div class="mb-3">
					<label class="form-label">Group</label>
					<div class="input-group">
					    <select class="single-select form-select">
						<option selected>Last Visit</option>
						<option value="1">Dashboard</option>
						<option value="2">Control</option>
						<option value="3">KPI</option>
						<option value="3">Map</option>
						<option value="3">Billing Product</option>
					    </select>
					    <button class="btn btn-outline-secondary" type="button">
						<i class='bx bx-plus'></i>
					    </button>
					</div>
				    </div>
				</div>
				<div class="col-lg-6">
				    <div class="mb-3">
					<label class="form-label">Unit</label>
					<div class="input-group">
					    <select class="single-select form-select">
						<option selected>Last Visit</option>
						<option value="1">Dashboard</option>
						<option value="2">Control</option>
						<option value="3">KPI</option>
						<option value="3">Map</option>
						<option value="3">Billing Product</option>
					    </select>
					    <button class="btn btn-outline-secondary" type="button">
						<i class='bx bx-plus'></i>
					    </button>
					</div>
				    </div>
				</div>
				
			    </div>
			    <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Product Images</label>
				<input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
			    </div>
			</div>
                  </div>
                  <div class="col-lg-4">
                     <div class="border border-3 p-4 rounded">
                        <div class="row g-3">
                           <div class="col-md-6">
                              <label for="inputPrice" class="form-label">Price</label>
                              <input type="email" class="form-control" id="inputPrice" placeholder="00.00">
                           </div>
                           <div class="col-md-6">
                              <label for="inputCompareatprice" class="form-label">Compare at Price</label>
                              <input type="password" class="form-control" id="inputCompareatprice" placeholder="00.00">
                           </div>
                           <div class="col-md-6">
                              <label for="inputCostPerPrice" class="form-label">Cost Per Price</label>
                              <input type="email" class="form-control" id="inputCostPerPrice" placeholder="00.00">
                           </div>
                           <div class="col-md-6">
                              <label for="inputStarPoints" class="form-label">Star Points</label>
                              <input type="password" class="form-control" id="inputStarPoints" placeholder="00.00">
                           </div>
                           <div class="col-12">
                              <label for="inputProductType" class="form-label">Product Type</label>
                              <select class="form-select" id="inputProductType">
                                 <option></option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                           <div class="col-12">
                              <label for="inputVendor" class="form-label">Vendor</label>
                              <select class="form-select" id="inputVendor">
                                 <option></option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                           <div class="col-12">
                              <label for="inputCollection" class="form-label">Collection</label>
                              <select class="form-select" id="inputCollection">
                                 <option></option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                           <div class="col-12">
                              <label for="inputProductTags" class="form-label">Product Tags</label>
                              <input type="text" class="form-control" id="inputProductTags" placeholder="Enter Product Tags">
                           </div>
                           <div class="col-12">
                              <div class="d-grid">
                                 <button type="button" class="btn btn-primary">Save Product</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end row-->
            </div>
         </div>
		 
    </div>
</template>

<script>
	
    import modal from '../category/CategoryAddEditModalComponent'
	
    export default {
		//props: ["id", "bus", "productData"],
    	extends: modal,
		name: "Create_product",
		components: {modal},
		data:function (){
			return{
				showModal: true,
				categoryList: [],
			}
		},
		mounted(){
			//this.productAttributes();
		},
		methods:{
				closeModal(){
				this.showModal = true;
			},
			// productAttributes(){
			// 	let instance = this;
			// 	axios.get('productAttributes')
			// 	.then(
			// 		instance.allAttributes = response.data.product_category
			// 	) 
			// },
			
		}
    }
</script>
