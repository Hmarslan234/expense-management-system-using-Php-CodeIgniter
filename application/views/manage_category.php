
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card rounded-0">
                <div class="card-header rounded-0 bg-gradient-info">
                  <h2 class="card-title text-white mb-0">Recipient Management</h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"  class="table table-bordered border-striped mb-4">
                      <thead class="bg-gradient-primary text-white">
                        <tr>
                          <th class="p-2 text-center">#</th>
                          <th class="p-2 text-center">Name</th>
                         
                          <th class="p-2 text-center">Actions</th>
                        </tr>
                    </thead>
 
        
 
        <tbody>
               <?php              
                  if($fetch_item->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_item->result() as $row)  
                {  
           ?> 
            <tr>
                <td class="px-3 py-2 align-middle text-center"><?php echo $i++ ?></td>
                <td class="px-3 py-2 align-middle">
                
                  <?php echo $row->items ?>
                </td>
               
                <td class="px-3 py-2 align-middle text-center">
                
                    <a class="btn btn-gradient-info rounded-0 btn-sm" href="<?php echo  base_url() ?>Home/manage_category?item_id=<?php echo $row->item_id ?>" aria-label="Skip to main navigation">
                      <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-gradient-danger rounded-0 btn-sm" href="<?php echo  base_url() ?>Home/manage_category?del=<?php echo $row->item_id ?>" onclick="return confirm('Are you sure you want to delete this Recipient?');" aria-label="Delete">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>


                </td>
                
              </tr>
                         <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                   <tr><td>No Recipients Found</td></tr> 
              
           <?php  
          }  
           ?> 
            
            
       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>    
            
            
            <script>
    $(function() {
      $("#example").simplePagination({
        previousButtonClass: "btn btn-gradient-info btn-sm  rounded-0",
        nextButtonClass: "btn btn-gradient-info btn-sm  rounded-0"
      });

    });
  </script>
  <script>
            $(document).ready(function() {
              $('#example').DataTable( {
                  columnDefs: [
                      {
                          targets: [ 0, 1, 2 ],
                          className: 'mdl-data-table__cell--non-numeric'
                      }
                  ]
              } );
          } );
            </script>
            
        </div>
        <!-- content-wrapper ends -->
      