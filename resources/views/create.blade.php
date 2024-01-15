@extends("template")
   @section("content")

   <div class="content-wrapper">
      <br>
      <div class="container col-8">
      <form method="post" action="/create/save" class="row g-3">
        @csrf 

        <div class="col-md-12">
          <label for="exampleInputEmail1" class="form-label">NAMA BARANG</label>
            <select name="nama_hp" id="nama_hp" class="form-select" aria-label="Default select example">
                <option selected>NAMA HP</option>
                <option value="SAMSUNG">SAMSUNG</option>
                <option value="OPPO">OPPO</option>
                <option value="IPHONE">IPHONE</option>
            </select>
        </div>
        
        <div class="col-md-12">
          <label for="exampleInputEmail1" class="form-label">KODE BARANG</label>
          <input name="kode_barang" id="kode_barang" type="text" class="form-control" placeholder="KD_001">
        </div>
        
        <div class="mb-3 col-12">
          <label for="exampleInputEmail1" class="form-label">QTY</label>
          <input name="qty" id="qty" type="number" class="form-control">
        </div>

        <div class="col-12">
          <label for="exampleInputEmail1" class="form-label">HARGA BARANG</label>
          <input name="harga" id="harga" type="text" class="form-control" placeholder="Rp-">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100px">Submit</button>
      </form>
      </div>
   </div>
   
   @endsection