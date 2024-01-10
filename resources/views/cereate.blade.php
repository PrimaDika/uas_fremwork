@extends("template")
   @section("content")
   <br>
   <div class="container col-8">
   <form class="row g-3">
   <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">NAMA BARANG</label>
      <select class="form-select" aria-label="Default select example">
          <option selected>NAMA HP</option>
          <option value="1">SAMSUNG</option>
          <option value="2">OPPO</option>
          <option value="3">IPHONE</option>
      </select>
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">KODE BARANG</label>
    <input type="text" class="form-control" placeholder="KD_001">
  </div>
  <div class="mb-3 col-2">
    <label for="exampleInputEmail1" class="form-label">QTY</label>
    <input type="number" class="form-control">
  </div>
  </form>
  <button type="submit" class="btn btn-primary">Submit</button>
   </div>
   
   @endsection