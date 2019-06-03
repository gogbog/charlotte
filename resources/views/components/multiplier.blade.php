@php
    $value = (!empty($options['value'])) ? $options['value'] : null;
    $ids = [];
@endphp
@if(!empty($options['translate']) && $options['translate'])
    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $data)
        @php
            $id = uniqid();
            $options['attr']['id'] = $id;
            $ids[] = $id;
            $value = $options['value'];

            if (!empty($options['model'])) {
                $translation = $options['model']->translate($locale);
            }
            if (!empty($translation)) {
                $value = $translation->$name;
            } else {
                $value = null;
            }

              if (!empty($options['clone'])) {
                $clone_value = '';
                if (is_array($options['clone'])) {
                  foreach ($options['clone'] as $clone_input) {
                      $clone_value .= $locale . '[' . $clone_input . ']';
                      if($clone_input != end($options['clone'])) {
                          $clone_value .= ',';
                      }
                  }
              } else {
                  $clone_value = $locale . '[' . $options['clone'] . ']';
              }

              $options['attr']['data-clone'] = $clone_value;
          }
        @endphp
        <div class="form-group language-{{$locale}} {{ @$options['class'] }}">
            <label class="col-sm-12"><span class="flag-icon flag-icon-{{$locale}}"></span>{{ $options['title'] }}
            </label>
            <div class="col-sm-12 m-b-20">
                {!!  Form::text($locale . '[' .$name . ']', $value, $options['attr']) !!}

                <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>

            </div>
        </div>
    @endforeach
@else
    @php
        $id = uniqid();
        $options['attr']['id'] = $id;

        if (!empty($options['clone'])) {
            $clone_value = '';
            if (is_array($options['clone'])) {
                foreach ($options['clone'] as $clone_input) {
                    $clone_value .= $clone_input;
                    if($clone_input != end($options['clone'])) {
                        $clone_value .= ',';
                    }
                }
            } else {
                $clone_value = $options['clone'];
            }

            $options['attr']['data-clone'] = $clone_value;
        }
        $ids[] = $id;
    @endphp
    <div class="form-group without-language {{ @$options['class'] }}">
        <label class="col-sm-12">{{ $options['title'] }}</label>
        <div class="col-sm-12 m-b-20">
            {!!  Form::text($name, $options['value'], $options['attr']) !!}

            <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>

        </div>
    </div>
@endif

