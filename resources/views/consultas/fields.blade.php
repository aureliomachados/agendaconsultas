<!-- Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente', 'Paciente:') !!}
    {!! Form::text('paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', 'Endereco:') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidade', 'Especialidade:') !!}
    {!! Form::select('especialidade', ['Glaucoma' => 'Glaucoma', 'Oftalmologista' => 'Oftalmologista', 'Ortopedista' => 'Ortopedista', 'Neurologista' => 'Neurologista', 'Gastroentorologista' => 'Gastroentorologista', 'Pediatra' => 'Pediatra', 'Urologista' => 'Urologista', 'Cardiologista' => 'Cardiologista', 'Otorrino' => 'Otorrino', 'Endocrinologista' => 'Endocrinologista', 'Dermatologista' => 'Dermatologista', 'Nefrologista' => 'Nefrologista', 'Angiologista' => 'Angiologista', 'Reumatologista' => 'Reumatologista', 'Psiquiatra' => 'Psiquiatra', 'Mastologista' => 'Mastologista', 'Ginecologista' => 'Ginecologista'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Prioridade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    {!! Form::select('prioridade', ['Urgente' => 'Urgente', 'Eletivo' => 'Eletivo', 'Retorno' => 'Retorno'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Observacao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacao', 'Observacao:') !!}
    {!! Form::textarea('observacao', null, ['class' => 'form-control']) !!}
</div>