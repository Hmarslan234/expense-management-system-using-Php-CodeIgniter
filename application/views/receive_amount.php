     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
            
           <div class="col-12 grid-margin stretch-card">
              <div class="card rounded-0">
                <div class="card-header bg-gradient-info text-white rounded-0">
                  <h4 class="card-title text-white mb-0">Amount</h4>
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
      <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Home/add_credit">
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">Name</label>
                    <select required="" name="name" class="form-control form-control-sm" id="exampleFormControlSelect3">
                          <option  readonly  value="">Select...</option>
                      <?php              
                  if($fetch_cus->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_cus->result() as $row)  
                {  
           ?> 
                      <option value="<?php echo $row->id?>"><?php echo $row->name ?></option>
                     
                       <?php       
             }  
          }  
          else  
           {  
           ?>  
                      <option disabled="">No Recipient Found</option> 
              
           <?php  
          }  
           ?> 
                    
                    </select>
                  </div>
                    <div class="form-group">
                    <label>Date</label>
                    <input required="" name="date" id="theDate2" type="date" class="form-control form-control-sm" placeholder="Date" aria-label="Date">
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input name="discription" type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Description">
                    </div>
                    <div class="form-group">
                    <label>Amount</label>
                    <input required="" onkeypress="return isNumber(event)" name="amount" type="text" class="form-control form-control-sm" placeholder="Amount" aria-label="Amount">
                  </div>
                    
       <button type="submit" name="credit" class="btn mr-2 btn-sm btn-gradient-info rounded-0 mr-2 btn-sm">Add</button>
                     <button type="reset" class="btn btn-sm btn-light bg-gradient-light border rounded-0 mr-2 btn-sm">Clear</button>
                  </form>
                  </div>
              </div>
            </div> 
            
            
            
        </div>