<div class="modal fade" id="get-{{$data->id}}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                    title</h1>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('/celana-edit/'.$data->id)}}" method="POST"  enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama
                            Produk</label>
                        <input type="text" class="form-control"
                            name="nama" value="{{$data->nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="harga"
                            class="form-label">Harga</label>
                        <input type="text" class="form-control"
                            name="harga" value="{{$data->harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">gambar
                            Produk</label>
                        <input type="file" class="form-control"
                            name="gambar">
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save
                            changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    </div>
