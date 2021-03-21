<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>InformacionLibro_{{ $isbn }}.pdf</title>
</head>
<body>
<style>
    .font{
        font-family: sans-serif;
    }
    .subtitle{
        margin-left: 5px;
        margin-top: 5px;
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .bookData{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    .page-break {
    page-break-after: always;
    }
</style>

    <h2 class="font" ><strong>Informacion del libro:</strong> {{ $title }}</h2><br><br><br><br>
        <div align="center"> 
            <img src="{{ asset('storage/'.$image) }}" alt="portada" width="400px" height="600px">        
        </div>
        <br>
        <div class="page-break"></div>
    <div align="left"  style=" background-color: #E7E0DD; color:black; " >
        <h4 class="bookData"><strong class="subtitle">Autor: </strong>{{ $author }}</h4>
        <h4 class="bookData" style="text-align: justify;"><strong style="text-align: justify;" class="subtitle">Descripcion: </strong>{{ $description }}</h4>
        <h4 class="bookData"><strong class="subtitle">ISBN: </strong>{{ $isbn }}</h4>
        <h4 class="bookData"><strong class="subtitle">Editorial: </strong>{{ $publisher }}</h4>
        <h4 class="bookData"><strong class="subtitle">Paginas: </strong>{{ $pages }}</h4>
        <h4 class="bookData"><strong class="subtitle">Edicion: </strong>{{ $edition }}</h4>
        <h4 class="bookData"><strong class="subtitle">Pais: </strong>{{ $country }}</h4>
        <h4 class="bookData"><strong class="subtitle">Fecha: </strong>{{ $year }}</h4>
    </div>    
</body>
</html>