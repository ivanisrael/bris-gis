<!--Start Edit Barangay-->
<div id='{{$barangay->id}}edit-barangay' class='modal fade' role='dialog'>  
    <div class='modal-dialog modal-md'>
      <!-- Modal content-->
        <div class='modal-content'>
              <div class='modal-header'>
                   <button type='button' class='close' data-dismiss='modal'>&times;</button>
                   <h4 class='modal-title'>Edit Barangay Information</h4>
              </div>
              <div class='row modal-body' style='text-align:right'>
                <form class="form-horizontal" method="post" action="{{route('barangays.update', $barangay->id)}}">

                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="municipality_id" value="{{$municipality_id}}">                       
                    <div class='panel-body'>
                            <div class='form-group row'>
                                <label class='col-md-4 control-label'>Barangay Name</label>
                                  <div class='col-md-6'>
                                      <input type='text' class='form-control' name='name' value='{{$barangay->name}}' required>
                                  </div>
                            </div>
                        <div class='form-group row'>
                            <label class='col-md-4 control-label'>Province</label>
                                 <div class='col-md-6'>
                                        <input type='hidden' name='province_id' id='province-id'>
                                        <input type='text' class='form-control' id='province-name' value='{{$barangay->municipality->province->name}}' disabled>                        
                                </div>
                        </div>
                        <div class='form-group row'>
                            <label class='col-md-4 control-label'>Municipality</label>
                                 <div class='col-md-6'>
                                        <input type='text' class='form-control' id='municipality-name' value='{{$barangay->municipality->name}}' disabled>   
                                 </div>
                         </div>

                        </div>
              </div>
              <div class='modal-footer'>
                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Close</button>
                    <button type='submit' class='btn btn-primary pull-right'>Update</button>
              </div>
           </form>

         </div>
         <!-- End Modal content-->
    </div>
</div>
<!--End Edit Barangay-->