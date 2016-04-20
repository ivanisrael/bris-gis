<!--Start Add Municipality-->
<div id="add-municipality" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Municipality Information</h4>
            </div>
            <div class='row modal-body'>
                <form class="form-horizontal" method="post" action="{{route('municipalities.store')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="province_id" value="{{$province->id}}">
                    <div class="panel-body">
                        <div class="form-group row">
                            <label class="col-md-4 control-label">Municipality Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" required>
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
<!--End Add Municipality-->