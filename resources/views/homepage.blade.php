<x-app>
    <x-slot name="styles">
        <style>
            body {
                background: #f2f2f2
            }
        </style>
    </x-slot>

    <div class="container-fluid">
        <div class="row mt-2">
            @foreach ($forms as $form)
                <div class="col-6 col-md-4 my-2 relative text-center d-flex align-content-stretch">
                    <a href="{{ route('forms.show', $form->id) }}" class="cover"></a>
                    <div class="shadow-sm bg-white p-2" style="width: 100%">
                        <img src="{{ $form->images[0] }}" alt="thumbnail" class="home-thumbnail">
                        <h2 class="text-center h6 mt-2 default-text" style="font-size: .85em">{{ $form->name }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app>
