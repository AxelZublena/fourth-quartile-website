<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Relative') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <h1 class="title">Add a relative to your account</h1>
            <h2 class="subtitle is-6"><span style="color: red;">*</span> required fields</h2>

            <form action="{{ route('relatives.store') }}" method="POST">
                @csrf

                <div class="columns">
                    <div class="field column">
                        <label class="label">First name<span style="color: red;">*</span></label>
                        <div class="control">
                            <input name="first_name" id="first_name"
                                class="input @error('first_name') is-danger @enderror" type="text"
                                placeholder="E.g. John" value="{{ old('first_name') }}" />
                        </div>
                        @error('first_name')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field column">
                        <label class="label">Last name<span style="color: red;">*</span></label>
                        <div class="control">
                            <input name="last_name" id="last_name" placeholder="E.g. Deer"
                                class="input @error('last_name') is-danger @enderror" type="text"
                                placeholder="E.g. Deer" value="{{ old('last_name') }}"/>
                        </div>
                        @error('last_name')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field" style="margin-top: -2%;">
                    <label class="label">Email address<span style="color: red;">*</span></label>
                    <div class="control">
                        <input name="email" id="email" class="input @error('email') is-danger @enderror" type="text"
                            placeholder="E.g. john.deer@example.com" value="{{ old('email') }}"/>
                    </div>
                    @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="columns">
                    <div class="field column is-one-third">
                        <label class="label">Age<span style="color: red;">*</span></label>
                        <span class="select @error('age') is-danger @enderror">
                            <select name="age" id="age">
                                <option value="select">Select a number</option>
                                @for ($i = 1; $i < 100; $i++)
                                        <option value="{{ $i }}" @if (old('age') == $i) selected @endif>{{ $i }}</option>
                                @endfor
                            </select>
                            @error('age')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </span>
                    </div>
                    <div class="field column">
                        <div class="field-body">
                            <div class="field is-expanded">
                                <label class="label">Phone number<span style="color: red;">*</span> <span class="subtitle is-7">(Do not enter the first
                                        zero)</span></label>
                                <div class="field has-addons">
                                    <p class="control">
                                        <a class="button is-static"> +31</a>
                                    </p>
                                    <p class="control is-expanded">
                                        <input name="phone_number" id="phone_number"
                                            class="input @error('phone_number') is-danger @enderror" type="tel"
                                            placeholder="E.g. 678123448 (A number with 9 digits)" value="{{ old('phone_number') }}"/>
                                    </p>
                                </div>
                                @error('phone_number')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control">
                    <button class="button is-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
