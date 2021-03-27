<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>InformacionLibro_.pdf</title>
</head>
<body>
<style>
    .font{
        font-family: sans-serif;
    }
    h1{
        font-size: 30px;
        font-family: sans-serif;
        color: black;
        text-align: center;
        font-weight: 700;
        padding-bottom: 25px;
        padding-top: 15px;
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
    span{
        color: #777877;
    }
</style>
    <div style="background: linear-gradient(90deg, rgba(60,60,215,1) 9%, rgba(1,175,210,1) 100%);" align="center">
        <h1>
            <img src="{{ asset('storage/books/logo.jpg') }}" alt="logotipo" width="60px" height="60px">
            Biblioteca Geek
        </h1>
    </div>
    @foreach($data as $book)
        <h2 class="font"><strong>{{ $book->title }}</strong></span></h2><br><br><br><br>
            <div align="center"> 
                <img src="{{ asset('storage/'.$book->image) }}" alt="portada" width="200px" height="300px">        
            </div>
            <br>
        <div align="left"  style=" background-color: #f7f7f7; color:black; " >
            <h4 class="bookData"><strong class="subtitle">Autor: </strong><span>{{ $book->author }}</span></h4>
            <h4 class="bookData" style="text-align: justify;"><strong style="text-align: justify;" class="subtitle">Descripcion: </strong><span>{{ $book->descriptionLong }}</span></h4>
            <h4 class="bookData"><strong class="subtitle">Editorial: </strong><span>{{ $book->publisher }}</span></h4>
        </div>    
        <div class="page-break"></div>
    @endforeach
    
</body>
</html>