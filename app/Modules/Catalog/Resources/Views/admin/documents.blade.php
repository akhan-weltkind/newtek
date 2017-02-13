@if ($entity->id)
        <div class="col-md-5">
            <div class="form-group">
                <label for="document1">Документ 1</label>
                <input type="file" id="document1" name="document1" style="display: none;">
                <br/>
                <div class="form-control-file" id="document1text">{{ $entity->document1?$entity->document1:'Выберите файл' }}</div>
                @if($entity->document1)
                    <a class="form-control-file-delete" id="1" href="{{ route($routePrefix.'delete-upload-file',['id' =>$entity->id, 'field' => 'document1']) }}">
                        Удалить
                    </a>
                @endif
                <a class="form-control-file-desc" id="document1desc" style="{{ !$entity->document1?'margin-left:-3px;':null }}">Выбрать</a>
            </div>
            <div class="help-block">
                @if($entity->document1)
                    {{ $entity->document1 }}({{ round(File::size('uploads/catalog/files/' . $entity->document1)/1024,0) }} КБ)
                    <a href="/uploads/catalog/files/{{ $entity->document1 }}" >Скачать</a>
                @endif

            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name1', 'Название 1') !!}
        </div>
        <div class="clearfix"></div>

        <div class="col-md-5">
            <div class="form-group">
                <label for="document2">Документ 2</label>
                <input type="file" id="document2" name="document2" style="display: none;">
                <br/>
                <div class="form-control-file" id="document2text">{{ $entity->document2?$entity->document2:'Выберите файл' }}</div>
                @if($entity->document2)
                    <a class="form-control-file-delete" id="2" href="{{ route($routePrefix.'delete-upload-file',['id' =>$entity->id, 'field' => 'document2']) }}">
                        Удалить
                    </a>
                @endif
                <a class="form-control-file-desc" id="document2desc" style="{{ !$entity->document2?'margin-left:-3px;':null }}">Выбрать</a>
            </div>
            <div class="help-block">
                @if($entity->document2)
                    {{ $entity->document2 }}
                    ({{ round(File::size('uploads/catalog/files/' . $entity->document2)/1024,0) }} КБ)
                    <a href="/uploads/catalog/files/{{ $entity->document2 }}" >Скачать</a>
                @endif
            </div>
        </div>


        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name2', 'Название 2') !!}
        </div>
        <div class="clearfix"></div>

        <div class="col-md-5">
            <div class="form-group">
                <div class="form-group">
                    <label for="document3">Документ 3</label>
                    <input type="file" id="document3" name="document3" style="display: none;">
                    <br/>
                    <div class="form-control-file" id="document3text">{{ $entity->document3?$entity->document3:'Выберите файл' }}</div>
                    @if($entity->document3)
                        <a class="form-control-file-delete" id="3" href="{{ route($routePrefix.'delete-upload-file',['id' =>$entity->id, 'field' => 'document3']) }}">
                            Удалить
                        </a>
                    @endif
                    <a class="form-control-file-desc" id="document3desc" style="{{ !$entity->document3?'margin-left:-3px;':null }}">Выбрать</a>
                    <div class="help-block">
                        @if($entity->document3)
                            {{ $entity->document3 }}({{ round(File::size('uploads/catalog/files/' . $entity->document3)/1024,0) }} КБ)
                            <a href="/uploads/catalog/files/{{ $entity->document3 }}" >Скачать</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! BootForm::text('name3', 'Название 3') !!}
        </div>
        <div class="clearfix"></div>

        <div class="col-md-5">
            <div class="form-group">
                <div class="form-group">
                    <label for="document4">Документ 4</label>
                    <input type="file" id="document4" name="document4" style="display: none;">
                    <br/>
                    <div class="form-control-file" id="document4text">{{ $entity->document4?$entity->document4:'Выберите файл' }}</div>
                    @if($entity->document4)
                        <a class="form-control-file-delete" id="4" href="{{ route($routePrefix.'delete-upload-file',['id' =>$entity->id, 'field' => 'document4']) }}">
                            Удалить
                        </a>
                    @endif
                    <a class="form-control-file-desc" id="document4desc" style="{{ !$entity->document4?'margin-left:-3px;':null }}">Выбрать</a>
                    <div class="help-block">
                        @if($entity->document4)
                            {{ $entity->document4 }}({{ round(File::size('uploads/catalog/files/' . $entity->document4)/1024,0) }} КБ)
                            <a href="/uploads/catalog/files/{{ $entity->document4 }}" >Скачать</a>
                        @endif
                    </div>
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

        $('.form-control-file-delete').click(function (e) {
            var link    = $(this),
                url     = link.attr('href'),
                id      = link.attr('id'),
                answer;

            e.preventDefault();

            answer = confirm("Вы уверены что хотите удалить файл?");
            if (answer) {
                $.ajax({
                    type: 'get',
                    url: url,
                    success: function(){
                        var desc = $('#document' + id + 'text');
                        desc.html('Выберите файл');
                        desc.siblings().css("margin-left","-3px");
                        link.hide();

                        console.log('aasdasd');
                    }
                });
            }


        });
    });

   function changeFileInput(index) {
       $('#document' + index).change(function(){
           var i,name;

           if ($(this).val().lastIndexOf('\\')) {
               i = $(this).val().lastIndexOf('\\') + 1;
           } else {
               i = $(this).val().lastIndexOf('/') + 1;
           }

          if ($(this).val().slice(i).length > 30) {
               name = $(this).val().slice(i);
              $('#document' + index +'text').text(name.substr(-30));
          } else {
              $('#document' + index +'text').text($(this).val().slice(i));
          }
       });

       $('#document' + index +'desc').click(function () {
           $('#document' + index).click();
       });
   }
</script>
@endpush