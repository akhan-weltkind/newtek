@if ($entity->id)
    <div class="clearfix"></div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="document1">Документ 1</label>
                <input type="file" id="document1" name="document1" style="display: none;">
                <br/>
                <div class="form-control-file" id="document1text">{{ $entity->document1?$entity->document1:'Выберите файл' }}</div>
                <a class="form-control-file-desc" id="document1desc">Выбрать</a>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name1', 'Название 1') !!}
        </div>

        <div class="col-md-5">
            <div class="form-group">
                <label for="document2">Документ 2</label>
                <input type="file" id="document2" name="document2" style="display: none;">
                <br/>
                <div class="form-control-file" id="document2text">{{ $entity->document2?$entity->document2:'Выберите файл' }}</div>
                <a class="form-control-file-desc" id="document2desc">Выбрать</a>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name2', 'Название 2') !!}
        </div>

        <div class="col-md-5">
            <div class="form-group">
                <div class="form-group">
                    <label for="document3">Документ 3</label>
                    <input type="file" id="document3" name="document3" style="display: none;">
                    <br/>
                    <div class="form-control-file" id="document3text">{{ $entity->document3?$entity->document3:'Выберите файл' }}</div>
                    <a class="form-control-file-desc" id="document3desc">Выбрать</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name3', 'Название 3') !!}
        </div>

        <div class="col-md-5">
            <div class="form-group">
                <div class="form-group">
                    <label for="document4">Документ 4</label>
                    <input type="file" id="document4" name="document4" style="display: none;">
                    <br/>
                    <div class="form-control-file" id="document4text">{{ $entity->document4?$entity->document4:'Выберите файл' }}</div>
                    <a class="form-control-file-desc" id="document4desc">Выбрать</a>
                </div>
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
    $(document).ready(function () {
        changeFileInput(1);
        changeFileInput(2);
        changeFileInput(3);
        changeFileInput(4);
    });

   function changeFileInput(index) {
       $('#document' + index).change(function(){
           var i;

           if ($(this).val().lastIndexOf('\\')) {
               i = $(this).val().lastIndexOf('\\') + 1;
           } else {
               i = $(this).val().lastIndexOf('/') + 1;
           }
           $('#document' + index +'text').text($(this).val().slice(i));
       });

       $('#document' + index +'desc').click(function () {
           $('#document' + index).click();
       });
   }
</script>
@endpush