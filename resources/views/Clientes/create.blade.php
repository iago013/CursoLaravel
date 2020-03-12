@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')

    <meta charset="UTF-8"/>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <div class="card stule" style="width:40rem;">
        <div style='text-align:center;'>
            <form action >

               <br> <label>Nome:</label>
                <input type = "text" style='text-align:center;' >

                <label>CPF:</label>
                <input id = 'cpf' type = "text" class = 'cpf-mask'> <br><br>

                <label>Endereço:</label>
                <input type = "text" >

                <br><input type = 'submit' class='btn btn-dark btn-lg'></button>
            </form>
        </div>
        </div>
        @endsection
        @push('script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
        
    <script>
        $(".cpf-mask").mask('000.000.000-00');
</script>

@emdpush


