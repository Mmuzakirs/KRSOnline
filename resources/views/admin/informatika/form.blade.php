<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Kuliah</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text"name="matakuliah" class="form-control col-md-7 col-xs-12">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah SKS</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <select name="sks" class="select2_single form-control" tabindex="-1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <select name="semester" class="select2_single form-control" tabindex="-1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <a class="btn btn-primary" type="button" href="{{ route('informatika.index') }}">Cancel</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>