<template>
    <div class="modal fade" id="attributes-add-edit-modal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Category</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form class="row g-3 needs-validation" @submit.prevent="saveCategory">
						<div class="col-md-12">
							<label for="cate_name" class="form-label">Category Name</label>
							<input type="text" v-model="item.cate_name" name="cate_name" class="form-control" id="cate_name">
							<div class="text-danger" v-if="errors && errors.cate_name">
								{{ errors.cate_name[0] }}
							</div>
						</div>
						<div class="col-12">
							<button class="btn btn-primary btn-sm"  type="submit">Submit</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
    </div>
</template>

<script>

export default {
	name: "Modal",
	data(){
	    return{
			categoryList:[],
			item:{
				cate_name: "",
			},
			errors: {}
	    }
	},
	mounted(){
		this.fetchCategory();
	},
	methods:{
		saveCategory(){
			axios({
				method: "post",
				url: "category",
				data: this.item,
		      	})
                .then(response => {
                    if (response.status == 201) {
						
                        this.item.cate_name = "";
						this.fetchCategory()
						$("#attributes-add-edit-modal").modal("hide");
                        this.errors = {};
                    }
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                    }
                    console.log(error);
                });
		},
		fetchCategory(){
			axios.get('category')
			.then(res=>this.categoryList=res.data) 
		},
		
		handleClose(){
			this.$emit('close');
		},
	}
}
</script>
