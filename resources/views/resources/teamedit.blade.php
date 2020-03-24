@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-6">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Applicant Information
          </h3>
          <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Edit Applicant Data
          </p>
        </div>
        <div class="max-w-xl mx-auto px-6 py-6">
            <form class="">
                <x-text-field
                    type="text"
                    label="Full Name"
                    placeholder="Full Name"
                />
                <x-text-field
                    type="email"
                    label="Email Addrress"
                    placeholder="Email Address"
                />
                <x-text-field
                    type="text"
                    label="Phone Number"
                    placeholder="Phone Number"
                />
                <x-text-field
                    type="text"
                    label="Address"
                    placeholder="Address"
                />
                <x-dropdown
                    label="Application For"
                    :items="$applications"
                />
                <x-radio
                    label="Availability"
                    name="availability"
                    :items="$availabilities"
                />
                <x-checkbox
                    label="Working Preference"
                    name="working-preference"
                    :items="$workingPreferences"
                />
                <x-text-field
                    type="number"
                    label="Salary Expectation"
                    placeholder="Salary Expectation"
                />
                <x-textarea
                    label="About"
                    placeholder="Describe your experience"
                />
                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-100">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:mt-0 sm:w-auto">
                        <a href="{{ route('teamedit') }}" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </a>
                    </span>
                    <span class="flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <a href="{{ route('team') }}" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Back
                        </a>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
