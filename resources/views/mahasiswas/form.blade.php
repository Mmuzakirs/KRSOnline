<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Nama :</strong>
            {!! Form::text('nama', null, ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <strong>NIM :</strong>
            {!! Form::text('nim', null, ['placeholder' => 'NIM', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Jenis Kelamin :</strong>
            <select name="jenis">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Fakultas :</strong>
            <select name="fakultas">
                <option value="Hukum">Hukum</option>
                <option value="Teknik">Teknik</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Program Studi :</strong>
            <select name="program">
                <option value="Hukum">Hukum</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Fakultas :</strong>
            <select name="angkatan">
                <option value="2016/2017">2016/2017</option>
                <option value="2017/2018">2017/2018</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <strong>IP :</strong>
            {!! Form::text('ip', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12">
        <a class="btn btn-xs btn-success" href="{{ route('mahasiswas.index') }}">Kembali</a>
        <button class="btn btn-xs btn-primary" type="submit" name="button" >Submit</button>
    </div>
</div>

    
