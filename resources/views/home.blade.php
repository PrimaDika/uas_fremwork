@extends("template")
   @section("content")
   <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Simple Tables</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content" >
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    <i class="bi bi-person-circle"></i>
                    Data
                </h3>
                <div class="card-tools">
                    <a href="<?= route('create') ?>" type="button" class="btn btn-primary">
                        Create
                    </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-1">#</th>
                            <th class="col-2">Nama Barang</th>
                            <th class="col-2">Kode barang</th>
                            <th class="col-2">QYT</th>
                            <th class="col-2">Tanggal</th>
                            <th class="col-2">Harga</th>
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                           <tr>
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->nama_hp }}</td> 
                              <td>{{ $item->kode_barang }}</td> 
                              <td>{{ $item->qty }}</td> 
                              <td>{{ $item->created_at }}</td> 
                              <td>{{ $item->harga }}</td> 
                              <td style="display: flex"><a href="<?= route('update', ['id'=>$item->id]) ?>" type="button" class="btn btn-warning">
                                update</a>
                                <a onclick="return confirm('yakin hapus?')" href="<?= route('delete',['id' => $item->id]) ?>" type="button" class="btn btn-danger">
                                    delete
                                </a>
                            </td> 
                           </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>

            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection