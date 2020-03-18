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
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="fullname">
                      Full Name
                    </label>
                    <input class="form-input block w-full pr-12 sm:text-sm sm:leading-5" id="fullname" type="text" placeholder="Full Name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="email">
                      Email Address
                    </label>
                    <input class="form-input block w-full pr-12 sm:text-sm sm:leading-5" id="email" type="text" placeholder="Email address">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="phone">
                      Phone Number
                    </label>
                    <input class="form-input block w-full pr-12 sm:text-sm sm:leading-5" id="phone" type="text" placeholder="Phone number">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="address">
                        Address
                    </label>
                    <input class="form-input block w-full pr-12 sm:text-sm sm:leading-5" id="address" type="text" placeholder="Address">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="applicationfor">
                      Application for
                    </label>
                    <div class="relative">
                        <select id="applicationfor" class="form-input block w-full pr-12 sm:text-sm sm:leading-5">
                            <option>Backend Engineer</option>
                            <option>Frontend Engineer</option>
                            <option>QA Engineer</option>
                            <option>DevOps Engineer</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="availability">
                      Availability
                    </label>
                    <input type="radio" id="soon" name="availability" checked><label class="text-gray-700 text-sm px-2" for="soon">Soon</label>
                    <input type="radio" id="month" name="availability"><label class="text-gray-700 text-sm px-2" for="month">1 Month</label>
                    <input type="radio" id="closed" name="availability"><label class="text-gray-700 text-sm px-2" for="closed">Closed</label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="username">
                      Working Preference
                    </label>
                    <input type="checkbox" id="onsite" name="preference" checked><label class="text-gray-700 text-sm px-2" for="onsite">On Site</label>
                    <input type="checkbox" id="remote" name="preference"><label class="text-gray-700 text-sm px-2" for="remote">Remote</label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="salary">
                      Salary Expectation
                    </label>
                    <input class="form-input block w-full pr-12 sm:text-sm sm:leading-5" id="salary" type="text" placeholder="Salary Expectation">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="about">
                      About
                    </label>
                    <textarea class="form-input block w-full pr-12 sm:text-sm sm:leading-5" id="about" placeholder="Candidate description"></textarea>
                </div>
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