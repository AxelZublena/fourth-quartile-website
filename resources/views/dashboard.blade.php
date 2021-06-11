<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Dashboard") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form action="/relatives/create">
                <button type="submit" class="button is-link">
                    Add new relative
                </button>
            </form>
            <div class="py-12 columns is-multiline ">
                @foreach($relatives as $relative)
                <div class="m-2 card column is-one-quarter">
                    <div class="card-image">
                        <figure class="image is-square">
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                                alt="Placeholder image"
                            />
                        </figure>
                    </div>
                    <div class="card-content">
                        <p>
                            {{ "Name: " . $relative->first_name . " " . $relative->last_name }}
                        </p>
                        <p>{{ "Email: " . $relative->email }}</p>
                        <p>{{ "Age: " . $relative->age }}</p>
                        <p>{{ "Phone: " . $relative->phone_number }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
