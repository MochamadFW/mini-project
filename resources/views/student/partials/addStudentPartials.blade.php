<div class="modal fade" id="AddModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah siswa baru</h4>
        </div>
        <div class="modal-body">
            <form action="{{route('InputStudent')}}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="class">Class:</label>
                <select class="form-select" aria-label="Default select example" name="class">
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                <br>
                <input type="hidden" id="status" name="status" value="1" required>
                <br>
                
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>