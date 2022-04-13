<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-light bg-success">
                <div class="card-title">Fichiers de sauvegarde</div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($fichiers as $fichier)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ basename($fichier) }}
                            <a href="" download="" class="btn btn-success">
                                Télécharger
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
