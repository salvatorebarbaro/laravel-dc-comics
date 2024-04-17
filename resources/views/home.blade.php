<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')
<div class="container">
    <div class="row flex-column align-items-center ">
        <h1 class="text-uppercase text-primary text-center my-5">benvenuto nel nostro server di fumetti</h1>
            <div class="col-auto">
                <img class="border rounded-4  " src="https://tse1.mm.bing.net/th/id/OIG2.09P6nOuDQLhuDFoQtiRW?pid=ImgGn" alt="">
            </div>
            
            
                <div class="col-auto my-5">
                    <a href="{{route('comics.index')}}" class="btn btn-primary text-uppercase">Visita elenco fumetti</a>
                </div> 
            
    </div>
    
    
    
</div>

@endsection