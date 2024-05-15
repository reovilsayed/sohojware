<form action="{{$action}}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn text-danger btn-sm delete h-auto" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></button>
</form>