@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif        

    <meta charset="UTF-8"/>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <div class="card stule" style="width:40rem;">
        <div style='text-align:center;'>
            <form method = 'POST' action="{{route('client.store')}}" class="form-horizontal form-validate"  >

            {{csrf_field() }}

            <h1>Formuláio de Envio</h1>

               <br> <label>Nome:</label>
                <input id='name' name='name' required type ="text" style='text-align:center;' value='{{old("name")}}' >

                <label>CPF:</label>
                <input id ='cpf' name='cpf' required type ="text" class='cpf' value='{{old("cpf")}}'><br><br>

                <label>Endereço:</label>
                <input id='endereco' name='endereco' required type ="text" value='{{old("endereco")}}' >

                <label>Email:</label>
                <input id='email' name='email' required type ="text" value='{{old("email")}}' >

                <br><input type = 'submit' class='btn btn-success btn-lg'></button>
            </form>
        </div>
        </div>
        @endsection
        @push('script')
    
        @push('scripts')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
        <script>
        $('.cpf').mask('000.000.000-00');
</script>
@endpush   
 

@emdpush


