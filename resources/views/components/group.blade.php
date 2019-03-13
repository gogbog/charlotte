<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <select class="selectpicker" data-style="form-control">
            <optgroup label="Picnic">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Relish</option>
            </optgroup>
            <optgroup label="Camping">
                <option>Tent</option>
                <option>Flashlight</option>
                <option>Toilet Paper</option>
            </optgroup>
        </select>
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>
    </div>
</div>