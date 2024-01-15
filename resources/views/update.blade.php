@extends("template")
   @section("content")

   <div class="content-wrapper">
      <br>
      <div class="container col-8">
      <form method="post" action="/update/save" class="row g-3">
        @csrf 

        <input type="text" name="id" value="{{ $barang->id }}">

        <div class="col-md-12">
            <label for="exampleInputEmail1" class="form-label">NAMA BARANG</label>
            <select name="nama_hp" id="nama_hp" class="form-select" aria-label="Default select example">
                <option value="SAMSUNG" {{ $barang->nama_hp === 'SAMSUNG' ? 'selected' : '' }}>SAMSUNG</option>
                <option value="OPPO" {{ $barang->nama_hp === 'OPPO' ? 'selected' : '' }}>OPPO</option>
                <option value="IPHONE" {{ $barang->nama_hp === 'IPHONE' ? 'selected' : '' }}>IPHONE</option>
            </select>
        </div>
        
        
        <div class="col-md-12">
          <label for="exampleInputEmail1" class="form-label">KODE BARANG</label>
          <input name="kode_barang" id="kode_barang" type="text" class="form-control" placeholder="KD_001" value="{{ $barang->kode_barang }}">
        </div>
        
        <div class="mb-3 col-12">
          <label for="exampleInputEmail1" class="form-label">QTY</label>
          <input name="qty" id="qty" type="number" class="form-control" value="{{ $barang->qty }}">
        </div>

        <div class="col-12">
          <label for="exampleInputEmail1" class="form-label">HARGA BARANG</label>
          <input name="harga" id="harga" type="text" class="form-control" placeholder="Rp-" value="{{ $barang->harga }}">
        </div>
        <button type="submit" class="btn btn-success" style="width: 100px">Submit</button>
        <a href="<?= route('home') ?>" type="button" class="btn btn-warning" style="width: 100px">Cancel</a>
        </form>
      </div>
   </div>
   
   @endsection