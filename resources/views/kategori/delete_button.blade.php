<!-- resources/views/kategori/delete_button.blade.php -->

<form method="post" action="{{ route('kategori.delete', $kategori_id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
