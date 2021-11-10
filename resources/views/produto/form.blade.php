<div class="box box-info padding-1">
    <script>
        function handleFileSelect(evt) {
    evt.stopPropagation();
    evt.preventDefault();

    var files = evt.dataTransfer.files; // FileList object.

    // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {
      output.Push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                  '</li>');
    }
    document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  }

  function handleDragOver(evt) {
    evt.stopPropagation();
    evt.preventDefault();
    evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
  }

  // Setup the dnd listeners.
  var dropZone = document.getElementById('drop_zone');
  dropZone.addEventListener('dragover', handleDragOver, false);
  dropZone.addEventListener('drop', handleFileSelect, false);
    </script>
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('lista_id') }}
            {{ Form::text('lista_id', $produto->lista_id, ['class' => 'form-control' . ($errors->has('lista_id') ? ' is-invalid' : ''), 'placeholder' => 'Lista Id']) }}
            {!! $errors->first('lista_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sku') }}
            {{ Form::text('sku', $produto->sku, ['class' => 'form-control' . ($errors->has('sku') ? ' is-invalid' : ''), 'placeholder' => 'Sku']) }}
            {!! $errors->first('sku', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $produto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $produto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precionormal') }}
            {{ Form::text('precionormal', $produto->precionormal, ['class' => 'form-control' . ($errors->has('precionormal') ? ' is-invalid' : ''), 'placeholder' => 'Precionormal']) }}
            {!! $errors->first('precionormal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categorias') }}
            {{ Form::text('categorias', $produto->categorias, ['class' => 'form-control' . ($errors->has('categorias') ? ' is-invalid' : ''), 'placeholder' => 'Categorias']) }}
            {!! $errors->first('categorias', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagenes') }}
            {{ Form::text('imagenes', $produto->imagenes, ['class' => 'form-control' . ($errors->has('imagenes') ? ' is-invalid' : ''), 'placeholder' => 'Imagenes']) }}
            {!! $errors->first('imagenes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div id="drop_zone">Drop files here</div>
<output id="list"></output>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>