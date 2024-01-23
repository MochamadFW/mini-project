<div class="modal fade" id="MyModal{{$item['id']}}" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$item['name']}}</h4>
        </div>
        <div class="modal-body">
            <form action="{{route('UpdateStudent')}}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$item['name']}}" required>
                <input type="hidden" id="id" name="id" value="{{$item['id']}}" required>
                <br>
                <label for="class">Class:</label>
                <select class="form-select" aria-label="Default select example" name="class">
                    <option value="9" {{ $item['class'] == 9 ? 'selected' : '' }}>9</option>
                    <option value="10" {{ $item['class'] == 10 ? 'selected' : '' }}>10</option>
                    <option value="11" {{ $item['class'] == 11 ? 'selected' : '' }}>11</option>
                    <option value="12" {{ $item['class'] == 12 ? 'selected' : '' }}>12</option>
                  </select>
                <br>
                <label for="status">Status:</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="1" {{ $item['status'] == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $item['status'] == 0 ? 'selected' : '' }}>Inactive</option>
                  </select>
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