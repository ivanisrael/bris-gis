<!--Start Add Disaster-->
<div id="add-disaster" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Disaster Information</h4>
            </div>
            <div class='row modal-body'>
                <form class="form-horizontal" method="post" action="{{route('disasters.store')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="building_id" value="{{$building->id}}">
                    <div class="panel-body">
                        <div class="form-group row">
                            <label class="col-md-4 control-label">Type</label>
                            <div class="col-md-6">
                                <select class="form-control " name="type" id="type" required>
                                  <option value="Flood">Flood</option>
                                 <option value="Fire Incident">Fire Incident</option>
                          </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 control-label">Year</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="year" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" required>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary pull-right">ADD</button>
            </div>
            </form>
        </div>
        <!-- End Modal content-->
    </div>
</div>
<!--End Add Disaster-->