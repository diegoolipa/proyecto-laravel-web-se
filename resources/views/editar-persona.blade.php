<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Editar Persona</h1>
                <form action="{{ route('actualizar.persona',$persona->personaID) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombresDiego" value="{{ $persona->nombres }}" id="exampleFormControlInput1" placeholder="Nombres">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" name="paterno" value="{{ $persona->paterno }}" id="exampleFormControlInput1" placeholder="Apellido Paterno">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="materno"  value="{{ $persona->materno }}" id="exampleFormControlInput1" placeholder="Apellido Materno">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Bibliografía</label>
                    <textarea class="form-control" name="bibliografia"  id="exampleFormControlTextarea1" rows="3"> {{ $persona->bibliografia }} </textarea>
                    </div>
                    <input type="text" hidden class="form-control" name="fotoeditar" value="{{ $persona->foto }}" id="exampleFormControlInput1" placeholder="Nombres">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-9">
                                <label for="exampleFormControlInput1" class="form-label">Foto</label>
                                <input type="file" class="form-control" value="{{ $persona->foto }}"  name="foto" id="input" placeholder="Foto">
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <img src="{{asset('storage/'.$persona->foto)}}"  alt="" id="img" height="60">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Número Documento</label>
                    <input type="number" class="form-control" name="documento" value="{{ $persona->documento }}"  id="exampleFormControlInput1" placeholder="Número Documento">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Número Celular</label>
                    <input type="text" class="form-control" name="celular" value="{{ $persona->celular }}" id="exampleFormControlInput1" placeholder="Número Celular">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Datos</button>
                  </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>