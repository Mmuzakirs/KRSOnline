<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="namaDsn" class="form-control col-md-7 col-xs-12">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="namaJur" class="form-control col-md-7 col-xs-12">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Fakultas</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <select name="namaFak" class="select2_single form-control" tabindex="-1">
            <option value="Hukum">Hukum</option>
            <option value="Ilmu Kesehatan">Ilmu Kesehatan</option>
            <option value="Kedokteran">Kedokteran</option>
            <option value="Teknik">Teknik</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Pertanian dan Peternakan">Pertanian dan Peternakan</option>
            <option value="Ilmu Sosial dan Politik">Ilmu Sosial dan Politik</option>
            <option value="Agama Islam">Agama Islam</option>
            <option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
        </select>
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <a class="btn btn-primary" type="button" href="{{ route('dosen.index') }}">Cancel</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>