@if ($crud->model->translationEnabled())
<input type="hidden" name="locale" value={{ $crud->request->input('locale')?$crud->request->input('locale'):App::getLocale() }}>
@endif

{{-- See if we're using tabs --}}
@if ($crud->tabsEnabled())
    @include('crud::inc.show_tabbed_fields')
@else
    @include('crud::inc.show_fields', ['fields' => $fields])
@endif

{{-- Define blade stacks so css and js can be pushed from the fields to these sections. --}}

@section('after_styles')
    <link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/crud.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/'.$action.'.css') }}">

    <!-- CRUD FORM CONTENT - crud_fields_styles stack -->
    @stack('crud_fields_styles')
@endsection

@section('after_scripts')
    <script src="{{ asset('vendor/backpack/crud/js/crud.js') }}"></script>
    <script src="{{ asset('vendor/backpack/crud/js/form.js') }}"></script>
    <script src="{{ asset('vendor/backpack/crud/js/'.$action.'.js') }}"></script>

    <!-- CRUD FORM CONTENT - crud_fields_scripts stack -->
    @stack('crud_fields_scripts')

    <script>
    jQuery('document').ready(function($){

      // Save button has multiple actions: save and exit, save and edit, save and new
      var saveActions = $('#saveActions'),
      crudForm        = saveActions.parents('form'),
      saveActionField = $('[name="save_action"]');

      saveActions.on('click', '.dropdown-menu a', function(){
          var saveAction = $(this).data('value');
          saveActionField.val( saveAction );
          crudForm.submit();
      });

      // Ctrl+S and Cmd+S trigger Save button click
      $(document).keydown(function(e) {
          if ((e.which == '115' || e.which == '83' ) && (e.ctrlKey || e.metaKey))
          {
              e.preventDefault();
              // alert("Ctrl-s pressed");
              $("button[type=submit]").trigger('click');
              return false;
          }
          return true;
      });

      // Place the focus on the first element in the form
      @if( $crud->autoFocusOnFirstField )
        @php
          $focusField = array_first($fields, function($field) {
              return isset($field['auto_focus']) && $field['auto_focus'] == true;
          });
        @endphp

        @if ($focusField)
          window.focusField = $('[name="{{ $focusField['name'] }}"]').eq(0),
        @else
          var focusField = $('form').find('input, textarea, select').not('[type="hidden"]').eq(0),
        @endif

        fieldOffset = focusField.offset().top,
        scrollTolerance = $(window).height() / 2;

        focusField.trigger('focus');

        if( fieldOffset > scrollTolerance ){
            $('html, body').animate({scrollTop: (fieldOffset - 30)});
        }
      @endif

      // Add inline errors to the DOM
      @if ($crud->inlineErrorsEnabled() && $errors->any())

        window.errors = {!! json_encode($errors->messages()) !!};
        // console.error(window.errors);

        $.each(errors, function(property, messages){

            var field = $('[name="' + property + '"]'),
                container = field.parents('.form-group');

            container.addClass('has-error');

            $.each(messages, function(key, msg){
                // highlight the input that errored
                var row = $('<div class="help-block">' + msg + '</div>');
                row.appendTo(container);

                // highlight its parent tab
                @if ($crud->tabsEnabled())
                var tab_id = $(container).parent().attr('id');
                $("#form_tabs [aria-controls="+tab_id+"]").addClass('text-red');
                @endif
            });
        });

      @endif


      // custom add
      @php
        $counter_fields = array_filter($fields, function($f){
            return (isset($f['count_down']) && $f['count_down']) || (isset($f['count_up']) && $f['count_up']);
        });
      @endphp

      @if (count($counter_fields))
            var counterFields = {!! json_encode($counter_fields) !!};
            $.each(counterFields, function(name, field){
                field.$field = $('[name="'+name+'"]'),
                field.$container = field.$field.parents('.form-group'),
                field.$countDown = field.count_down ? true : false,
                field.$counterMax = field.$countDown ? field.count_down : field.count_up;
                //Setup our Virtual DOM
                field.$container.css({
                    position: 'relative', zIndex: 10,
                    marginBottom: 25
                });
                field.$label = $('<div><span class="used"></span><span class="max"></span></div>');
                field.$label.css({
                    pointerEvents: 'none',
                    position: 'absolute', zIndex: 11, left: 15, top: '100%',
                    width: 60, height: 20, marginTop: -1,
                    background: '#fff', border: '1px solid #d2d6de', borderTop: '1px solid #fff',
                    textAlign: 'center', fontFamily: 'monospace', fontSize: 10,
                    transition: 'border-color ease-in-out .15s'
                });
                field.$label.appendTo(field.$container);
                field.$usedLabel = field.$label.find('.used');
                field.$maxLabel = field.$label.find('.max');
                //Setup intial counter based off HTML
                if( field.$countDown ){
                    field.$maxLabel.remove();
                    field.$usedLabel.text( field.$counterMax - field.$field.val().length );
                } else {
                    field.$maxLabel.text( ' / ' + field.$counterMax );
                    field.$usedLabel.text( field.$field.val().length );
                }
                //Listen to modifications on the field
                field.$field.on('keydown keyup change update paste blur focus', function(e){
                    var used = field.$field.val().length;
                    if( field.$countDown ){
                        field.$usedLabel.text( field.$counterMax - used );
                    } else {
                        field.$usedLabel.text( used );
                    }
                    if( used > field.$counterMax ){
                        field.$label.css('color', 'red');
                    } else {
                        field.$label.css('color', 'black');
                    }
                });
                //Emulate the styling from the text box
                field.$field.on('focus blur', function(e){
                    if( e.type == 'focus' ){
                        field.$label.css({
                            borderColor: '#3c8dbc', borderTopColor: '#fff'
                        });
                    } else {
                        field.$label.css({
                            borderColor: '#d2d6de', borderTopColor: '#fff'
                        });
                    }
                    setTimeout(function(){
                        var borderColor = field.$field.css('borderColor');
                        field.$label.css({
                            borderColor: borderColor, borderTopColor: '#fff'
                        });
                    }, 200);
                })
            });
        });
        @endif

    </script>
@endsection
