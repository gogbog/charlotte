<div class="col-sm-12">
    <div class="white-box">
        <div class="table-responsive p-t-20 p-b-20">
            {!! $table->table() !!}
        </div>
    </div>
</div>

@section('js')
    {!! $table->scripts() !!}
@append