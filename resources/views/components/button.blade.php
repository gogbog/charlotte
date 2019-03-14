<?php if ($options['wrapper'] !== false): ?>
<div <?= $options['wrapperAttrs'] ?> >
    <?php endif; ?>
        {{--<input type="submit" value="Submit">--}}
    <?= Form::submit($options['label'], $options['attr']) ?>

    <?php if ($options['wrapper'] !== false): ?>
</div>
<?php endif; ?>

<div class="form-group">
    <div class="m-b-20">
        <button type="submit" class="btn btn-danger" value="Submit" onclick="">Submit</button>
    </div>
</div>
