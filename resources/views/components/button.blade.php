<?php if ($options['wrapper'] !== false): ?>
<div <?= $options['wrapperAttrs'] ?> >
    <?php endif; ?>
        {{--<input type="submit" value="Submit">--}}
    <?= Form::submit($options['label'], $options['attr']) ?>

    <?php if ($options['wrapper'] !== false): ?>
</div>
<?php endif; ?>