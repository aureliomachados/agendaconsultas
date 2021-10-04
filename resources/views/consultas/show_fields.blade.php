<!-- Paciente Field -->
<div class="col-sm-12">
    {!! Form::label('paciente', 'Paciente:') !!}
    <p>{{ $consulta->paciente }}</p>
</div>

<!-- Endereco Field -->
<div class="col-sm-12">
    {!! Form::label('endereco', 'Endereco:') !!}
    <p>{{ $consulta->endereco }}</p>
</div>

<!-- Telefone Field -->
<div class="col-sm-12">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{{ $consulta->telefone }}</p>
</div>

<!-- Especialidade Field -->
<div class="col-sm-12">
    {!! Form::label('especialidade', 'Especialidade:') !!}
    <p>{{ $consulta->especialidade }}</p>
</div>

<!-- Prioridade Field -->
<div class="col-sm-12">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    <p>{{ $consulta->prioridade }}</p>
</div>

<!-- Observacao Field -->
<div class="col-sm-12">
    {!! Form::label('observacao', 'Observacao:') !!}
    <p>{{ $consulta->observacao }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $consulta->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $consulta->updated_at }}</p>
</div>

