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
    <br />
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna arcu, suscipit sed tellus id, consectetur laoreet libero. Maecenas eget varius sem, nec sagittis turpis. Duis dapibus nec nunc sit amet ultrices. Praesent vitae quam vel est blandit placerat at eu arcu. Nulla vitae dolor eu libero gravida tincidunt. Cras aliquet vitae libero eget sodales. Vivamus bibendum nibh vel risus rhoncus fermentum.
    </p>

    <p>
        Suspendisse id ultricies purus, et convallis magna. Mauris luctus, velit a mollis blandit, dui nibh vehicula erat, in faucibus lacus tortor nec velit. Quisque fringilla sed dui sit amet pretium. Maecenas sed mauris tellus. Aenean sit amet nibh in magna tempor gravida vel vitae massa. Donec a molestie tortor. Pellentesque pharetra porta tellus sit amet efficitur. Quisque pretium enim felis, nec accumsan dolor efficitur id. Maecenas sollicitudin lorem vitae placerat interdum. Vestibulum maximus convallis lectus, at aliquam tortor volutpat vitae. Maecenas eu quam turpis. Donec egestas tincidunt felis ut suscipit. Suspendisse quis lobortis diam.
    </p>

    <p>
        Vivamus nec gravida nisi. Morbi egestas mauris at quam blandit faucibus. Morbi pulvinar lectus et dapibus consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam ultrices eleifend enim eu egestas. Mauris at sodales leo. Duis laoreet ipsum vel turpis consequat feugiat quis egestas lectus.
    </p>

    <br />
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/breed.js') }}"></script>
@endsection