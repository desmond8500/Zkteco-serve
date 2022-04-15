<div class="row">
    <div class="row">
        @foreach ($fichiers as $fichier)
            <div class="col-md-4 ">
                <div class="border border-secondary rounded p-3 mb-3 ">
                    <a href="{{ asset($fichier) }}" download class=" ">
                        <img src="{{ asset('img/001-sql.png') }}" class="logo" alt="..." >
                        <span class="card-text title">{{ basename($fichier) }}</span>
                    </a>

                </div>
            </div>

        @endforeach
    </div>

    <style>
        .logo{
            /* display: block;
            margin: auto; */
            width: 30px;
        }
        .file{
            width: 100%;
            padding: 15px;
            margin-bottom: 3px;
            border: 1px solid black;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</div>

