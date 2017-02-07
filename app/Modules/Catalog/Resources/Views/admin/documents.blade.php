@if ($entity->id)
    <div class="clearfix"></div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="document1">Документ 1</label>
                <input type="file" id="document1" name="document1">
                {{--<button onclick="document1.click()">{{ $entity->document1?$entity->document1:null }}</button><br />--}}
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name1', 'Название 1') !!}
        </div>

        <div class="col-md-5">
            <div class="form-group">
                <label for="document2">Документ 2</label>
                <input type="file" id="document2" name="document2" value="{{ $entity->document2?$entity->document2:null }}">
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name2', 'Название 2') !!}
        </div>

        <div class="col-md-5">
            <div class="form-group">
                <label for="document3">Документ 3</label>
                <input type="file" id="document3" name="document3" value="{{ $entity->document3?$entity->document3:null }}">
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name3', 'Название 3') !!}
        </div>

        <div class="col-md-5">
            <div class="form-group">
                <label for="document4">Документ 4</label>
                <input type="file" id="document4" name="document4" value="{{ $entity->document4?$entity->document4:null }}">
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name4', 'Название 4') !!}
        </div>

    <div class="clearfix"></div>

@else
    <p class="help-block">Сохраните запись, чтобы добавить изображения</p>
@endif

@push('js')
<script>
    if ( '{{ $entity->document1 }}' ) {
        $('#document1').value = '{{ $entity->document1 }}';
        console.log($('#document1'));
    }
</script>
@endpush