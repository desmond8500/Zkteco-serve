<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Fichiers de sauvegarde</div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($fichiers as $fichier)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ basename($fichier) }}
                            <a href="" download="" class="badge bg-primary rounded-pill">
                                Télécharger
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
