<!-- Batch Id Field -->
<div class="col-sm-12">
    {!! Form::label('batch_id', 'Batch ID:') !!}
    <p>{{ $batch->batch_id }}</p>
</div>

<!-- Batch Year Field -->
<div class="col-sm-12">
    {!! Form::label('batch', 'Batch Year:') !!}
    <p>{{ $batch->batch }}</p>
</div>

<!-- Academic Created_at Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $batch->created_at }}</p>
</div>

<!-- Academic Updated_at Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $batch->updated_at }}</p>
</div>

