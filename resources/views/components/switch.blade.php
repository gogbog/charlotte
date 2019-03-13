<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <label class="switch-light switch-ios" style="width: 60px" onclick="">
            <input type="checkbox"
                @if (!empty($options['attributes']))
                    @foreach($options['attributes'] as $attribute)
                        {{ $attribute }}
                    @endforeach
                @endif
                @if (!empty($options['value']))
                    value="{{ $options['value'] }}"
                @endif>
            <span>
              <a></a>
            </span>
        </label>
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>
    </div>
</div>