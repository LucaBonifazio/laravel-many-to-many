<div class="overlay d-none">
    <form class="delete_confirmation {{ $delete_name }}" action="" method="POST">
        @method('DELETE')
        @csrf
        <h2>Are you sure?</h2>
        <button type="button" class="btn btn-warning btn_close">NO</button>
        <button class="btn btn-danger btn_delete_confirm">YES</button>
    </form>
</div>
