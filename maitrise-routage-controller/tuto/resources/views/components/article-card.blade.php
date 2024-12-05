<div class="article-card bg-dark me-3">
    <h3 class="text-white-50 h1">{{$article['title']}}</h3>
    <div class="d-flex ">
        <a href="{{Route('articles.show',$article)}}" class="btn btn-primary me-3">Lire la suite</a>
        <a href="{{Route('articles.destroy',$article)}}" class="btn btn-primary">Supprimer</a>
    </div>   
</div>