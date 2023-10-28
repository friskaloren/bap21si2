<div class="form-group {{ $errors->has('kodeMataKuliah') ? 'has-error' : ''}}">
    <label for="kodeMataKuliah" class="control-label">{{ 'Kodematakuliah' }}</label>
    <input class="form-control" name="kodeMataKuliah" type="text" id="kodeMataKuliah" value="{{ isset($matakuliahfriska->kodeMataKuliah) ? $matakuliahfriska->kodeMataKuliah : ''}}" >
    {!! $errors->first('kodeMataKuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('namaMataKuliah') ? 'has-error' : ''}}">
    <label for="namaMataKuliah" class="control-label">{{ 'Namamatakuliah' }}</label>
    <textarea class="form-control" rows="5" name="namaMataKuliah" type="textarea" id="namaMataKuliah" >{{ isset($matakuliahfriska->namaMataKuliah) ? $matakuliahfriska->namaMataKuliah : ''}}</textarea>
    {!! $errors->first('namaMataKuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sks') ? 'has-error' : ''}}">
    <label for="sks" class="control-label">{{ 'Sks' }}</label>
    <input class="form-control" name="sks" type="text" id="sks" value="{{ isset($matakuliahfriska->sks) ? $matakuliahfriska->sks : ''}}" >
    {!! $errors->first('sks', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
