@extends('layouts.main')
@section('title', 'Breed')
@section('page', 'page-breed')

@section('content')
<div class="background-image-full" style="background-image: url('../images/corgi.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="col-sm-5">
            <div class="text">
                <div>Find your Perfect Dog Breed</div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna arcu, suscipit sed tellus id, consectetur laoreet libero.</div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="filters">
        <div class="display"><i class="icofont-settings"></i> Filters</div>
        <div class="item">
            <div>Size</div>
            <ul>
                <li>
                    <input type="checkbox" id="size-small" />
                    <label for="size-small">Small</label>
                </li>

                <li>
                    <input type="checkbox" id="size-medium" />
                    <label for="size-medium">Medium</label>
                </li>

                <li>
                    <input type="checkbox" id="size-large" />
                    <label for="size-large">Large</label>
                </li>
            </ul>
        </div>

        <div class="item">
            <div>Friendliness</div>
            <ul>
                <li>
                    <input type="checkbox" id="friendliness-dogs" />
                    <label for="friendliness-dogs">Towards Dogs</label>
                </li>

                <li>
                    <input type="checkbox" id="friendliness-pets" />
                    <label for="friendliness-pets">Towards Other Pets</label>
                </li>
            </ul>
        </div>

        <div class="item">
            <div>Training</div>
        </div>

        <div class="item">
            <div>Grooming</div>
        </div>

        <div class="item">
            <div>Vocality</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row breed-class">
        <div class="col-sm-4">
            <div class="item" style="background-image: url('../images/class1.jpg')">
                <div class="overlay"></div>
                <div class="text">
                    <div>Apartment Dogs</div>
                    <button class="btn btn-light btn-sm">Show all</button>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="item" style="background-image: url('../images/class2.jpg')">
                <div class="overlay"></div>
                <div class="text">
                    <div>Large Dogs</div>
                    <button class="btn btn-light btn-sm">Show all</button>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="item" style="background-image: url('../images/class3.jpg')">
                <div class="overlay"></div>
                <div class="text">
                    <div>Hypoallergenic Dogs</div>
                    <button class="btn btn-light btn-sm">Show all</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/breed.js') }}"></script>
@endsection