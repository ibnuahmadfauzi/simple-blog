@extends('client.layouts.app')

@section('content')
    <div class="row">

        @for ($i = 0; $i < 6; $i++)
            <div class="col-lg-6">

                <a href="#" class="text-decoration-none">
                    <div class="posts">
                        <div class="post p-3">
                            <div class="thumbnail"
                                style="background-image: url('https://static-cse.canva.com/blob/1416911/1600w-wK95f3XNRaM.jpg'); width: 100%; height:200px; background-size: cover;">
                            </div>
                            <small class="text-secondary">
                                <a href="" class="text-decoration-none">
                                    <i class="bi bi-person-gear"></i> Ibnu Ahmad
                                    Fauzi
                                </a> - 12/03/2024
                            </small>
                            <div class="title mt-2">
                                <h6 class="fw-bold text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, vel!
                                </h6>
                            </div>
                            <div class="excerpt">
                                <p class="p-0 m-0 text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam adipisci facilis eius
                                    qui.
                                    Vel dolores animi, a illo numquam nulla.
                                </p>
                            </div>
                            <div class="link">
                                <a href="#" class="text-decoration-none">Read more ...</a>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        @endfor

    </div>
@endsection
