     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
            
           <div class="col-12 grid-margin stretch-card">
              <div class="card rounded-0">
                <div class="card-header bg-gradient-info text-white rounded-0">
                  <h4 class="card-title text-white mb-0">Add Category</h4>
                </div>
                <div class="card-body">
                    <?php if($this->session->has_userdata('msg'))
        {?>
                    <script>
                        toast();
                        </script>
    <?php //echo $this->session->userdata('msg'); ?>
 <?php
  
        }
 $this->session->unset_userdata('msg');
?>   
                  <p class="card-description text-info font-style-italic">
                    Kindly fill all the fields below before submitting the form.
                  </p>         
                <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Home/add_category">
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">Category Name</label>
                   
                    <input required="" name="items" type="text" class="form-control form-control-sm" placeholder="Category Name" aria-label="Date">
                  </div>
                   
                      <button type="submit" name="cat" class="btn btn-gradient-info rounded-0 mr-2 btn-sm ">Add</button>
                    <button type="reset" class="btn btn-sm btn-light bg-gradient-light border rounded-0">Clear</button>
                  </form>
                  </div>
              </div>
            </div> 
            
            
            
        </div>