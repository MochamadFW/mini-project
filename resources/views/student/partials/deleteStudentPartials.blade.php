<div class="modal fade" id="DeleteModal{{$item['id']}}" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$item['name']}}</h4>
        </div>
        <div class="modal-body">
            <form action="{{route('DeleteStudent')}}" method="POST">
                @csrf
                @method('DELETE')
                <h4>Apakah Anda yakin untuk menghapus data ini dengan nama: {{$item['name']}}?</h4>
                <input type="hidden" id="id" name="id" value="{{$item['id']}}" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>