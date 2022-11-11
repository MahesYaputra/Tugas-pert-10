<div class="form-group {{ $errors->has('idDosen') ? 'has-error' : ''}}">
    <label for="idDosen" class="control-label">{{ 'Iddosen' }}</label>
    <input class="form-control" name="idDosen" type="text" id="idDosen" value="{{ isset($dosen->idDosen) ? $dosen->idDosen : ''}}" >
    {!! $errors->first('idDosen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    <label for="Nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="Nama" type="text" id="Nama" value="{{ isset($dosen->Nama) ? $dosen->Nama : ''}}" >
    {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tahun_masuk') ? 'has-error' : ''}}">
    <label for="Tahun_masuk" class="control-label">{{ 'Tahun Masuk' }}</label>
    <input class="form-control" name="Tahun_masuk" type="text" id="Tahun_masuk" value="{{ isset($dosen->Tahun_masuk) ? $dosen->Tahun_masuk : ''}}" >
    {!! $errors->first('Tahun_masuk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
