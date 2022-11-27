<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom </th>
      <th scope="col">Prenom </th>
      <th scope="col">Naiss </th>
      <th scope="col">Lieu </th>
      <th scope="col">Sexe </th>
      <th scope="col">Filiere </th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Etudiant as $etudiant)
    <tr>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->prenom}}</td>
      <td>{{$etudiant->naiss}}</td>
      <td>{{$etudiant->lieu}}</td>
      <td>{{$etudiant->sexe}}</td>
      <td>{{$etudiant->filiere_id}}</td>


      <td><a class="btn btn-primary" href="{{route('Etudiant.edit',$etudiant->id)}}">Modifier Entreprise</a>
        </td>
        <td>
            <form action="{{route('Etudiant.destroy',$etudiant->id)}}" method="post">
            @csrf 
            @method('DELETE')
<button class='btn btn-danger'>Delete</button>    </form>    </td>
      @endforeach
  </tbody>
</table>

<a class="btn btn-success" href="{{route('Etudiant.create')}}">Ajouter Entreprise</a>
</body>
</html>
