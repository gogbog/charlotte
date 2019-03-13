<div class="form-group {{ @$options['class'] }}">
    <div class="col-sm-12 m-b-20">
        <div class="radio radio-danger">
            <input type="radio" name="radio6" id="radio16"
                @if (!empty($options['attributes']))
                    @foreach($options['attributes'] as $attribute)
                        {{ $attribute }}
                    @endforeach
                @endif
                @if (!empty($options['value']))
                    value="{{ $options['value'] }}"
                @endif>
            <label for="radio16">{{ $options['title'] }}</label>
        </div>
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>
    </div>
</div>