<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Grade & Section</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="gradeandsection_add.php">
                <div class="form-group">
                    <label for="grade" class="col-sm-3 control-label">Grade</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="grade" name="grade" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="section" class="col-sm-3 control-label">Section</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="section" name="section" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Grade & Section</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="gradeandsection_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_grade" class="col-sm-3 control-label">Grade</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_grade" name="grade">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_section" class="col-sm-3 control-label">Section</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_section" name="section">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="gradeandsection_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE GRADE & SECTION</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>



     