@extends("template")
   @section("content")
   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Kode barang</th>
      <th scope="col">Qty</th>
      <th scope="col">tanggal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <!--  -->
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <button type="submit" class="btn btn-success">update</button>
        <button type="submit" class="btn btn-danger">delete</button>
      </td>
    </tr>
    <!--  -->
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <button type="submit" class="btn btn-success">update</button>
        <button type="submit" class="btn btn-danger">delete</button>
      </td>
    </tr>
    <!--  -->
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <button type="submit" class="btn btn-success">update</button>
        <button type="submit" class="btn btn-danger">delete</button>
      </td>
    </tr>
    
  </tbody>
</table>
<a href="<?= route('cereate') ?>" class="btn btn-primary">Cereate</a>
   @endsection