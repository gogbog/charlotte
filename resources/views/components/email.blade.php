<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <input type="email"
               class="form-control"
               id="inputEmail"
               @if (!empty($options['placeholder']))
               placeholder="{{ $options['placeholder'] }}"
               @endif
               data-error="Bruh, that email address is invalid"
               @if (!empty($options['attributes']))
                   @foreach($options['attributes'] as $attribute)
                    {{ $attribute }}
                    @endforeach
               @endif>
        <div class="help-block with-errors"></div>
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>
    </div>
</div>