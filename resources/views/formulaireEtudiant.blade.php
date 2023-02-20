<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body >
        <div class="card mt-2 col-md-7 container mb-4 ">
            <div class="card-header  text-white text-center" >
                <h4>AJOUT CANDIDAT</h4>
            </div> 
            <div class="card-body">
                <form action="{{route('candidats.store')}}" method="post">
                    @csrf
                    <div class="row">  
                        <div class="col-md-6">
                            <label for="" class="h6">Prenom</label>
                            <input type="text" name="prenom" id="" class="form-control">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="h6">Nom</label>
                            <input type="text" name="nom" id="" class="form-control">
                        </div>
                    </div> 
                    <div class="row">    
                        <div class="col-md-6">
                            <label for="" class="h6">Age</label>
                            <input type="number" name="age" id="" class="form-control">
                        </div>    
                    </div>
                    <div class="row">  
                        <div class="col-md-6">
                            <label for="" class="h6">Email</label>
                            <input type="text" name="email" id="" class="form-control">
                        </div>
                    </div>        
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="h6">Niveau d'Etude</label>
                            <input type="text" name="niveauEtude" id="" class="form-control">
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label for="" class="h6">Sexe</label><br>
                            <select name="sexe" id="">
                                <option  class="mt-2" value="Masculin">Masculin</option>
                                <option  class="mt-2" value="Feminin">Feminin</option>          
                            </select>
                        </div>
                    </div>
                   
                        <div class="row mt-2">
                            <div class="col-md-6 mt-2">
                                <label for="" class="h6">Formation</label><br>
                                <select name="formations" id="" style="border-radius:5px; border:1px solid lightblue; width:320px; height:40px;">
                                    <option  class="mt-2" value="">Faite votre choix</option>
                                    @foreach ($formations as $form)
                                            <option value="{{$form->id}}">
                                                {{$form->nomFormation}}
                                            </option>    
                                        @endforeach         
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 mt-2">
                                <label for="" class="h6">Duree</label>
                                <input type="number" name="duree" id="" class="form-control">
                            </div>
                        </div> 
                        <div class="row mt-2">  
                            <div class="col-md-6 mt-2 ">
                                <label for="" class="h6">Description</label>
                            <textarea name="description" id="" cols="40" rows="4"></textarea>
                            </div>
                        </div> 

                        <div class="row mt-2">  
                            <div class="col-md-6 mt-2">
                                <label for="" class="h6">is Started</label><br>
                                <select name="isStarted" id="">
                                    <option value="0">Vrai</option>
                                    <option value="1">Faux</option>
                                </select>
                            </div>
                        </div>  

                        <div class="row mt-2">    
                            <div class="col-md-6 mt-2">
                                <label for="" class="h6">Date Debut</label>
                                <input type="date" name="dateDebut" id="" class="form-control">
                            </div>    
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 ">
                                <label for="" class="h6">Reference</label><br>
                                <input type="text" name="libelle" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">  
                            <div class="col-md-6">
                                <label for="" class="h6">Validated</label>
                                <select name="validated" id="" style="border-radius:5px; border:1px solid lightblue; width:320px; height:40px;">
                                    <option value="1">Vrai</option>
                                    <option value="0">Faux</option>
                                </select>
                            </div>
                        </div>  

                        <div class="row mt-2">    
                            <div class="col-md-6">
                                <label for="" class="h6">Horaire</label>
                                <input type="number" name="horaire" id="" class="form-control">
                            </div>    
                        </div>
                            
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="" class="h6">Type de Reference</label>
                                <select name="types" id="" style="border-radius:5px; border:1px solid lightblue; width:320px; height:40px;">
                                    <option value="">Faite votre choix</option>
                                    @foreach ($types as $type)
                                            <option value="{{$type->id}}">
                                              {{$type->libelleType}}
                                            </option>
                                                
                                    @endforeach  
                                </select>
                            </div>
                            <div>
                               
                            </div>
                            
                        </div>
                    <div class="modal-footer">
                         <button type="submit" class="btn btn-secondary">Enregistrer</button>
                    </div>

                </form>
            </div>
        </div> 
</body>
</html>