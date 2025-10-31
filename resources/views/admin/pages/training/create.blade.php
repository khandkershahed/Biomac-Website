<x-admin-app-layout :title="'Training Add'">
    <div class="card card-flash">
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <form class="form" method="POST" action="{{ route('admin.training.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    {{-- Basic Info --}}
                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="name" class="required fw-bold fs-6 mb-2">{{ __('Training Name') }}</x-metronic.label>
                        <x-metronic.input id="name" type="text" name="name" :value="old('name')" class="form-control-solid" placeholder="Enter training name" />
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="slug" class="fw-bold fs-6 mb-2">{{ __('Slug') }}</x-metronic.label>
                        <x-metronic.input id="slug" type="text" name="slug" :value="old('slug')" class="form-control-solid" placeholder="Enter slug (optional)" />
                    </div>

                    {{-- Date & Time --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="start_date" class="fw-bold fs-6 mb-2">{{ __('Start Date') }}</x-metronic.label>
                        <x-metronic.input id="start_date" type="date" name="start_date" :value="old('start_date')" class="form-control-solid" />
                    </div>
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="start_time" class="fw-bold fs-6 mb-2">{{ __('Start Time') }}</x-metronic.label>
                        <x-metronic.input id="start_time" type="time" name="start_time" :value="old('start_time')" class="form-control-solid" />
                    </div>
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="end_date" class="fw-bold fs-6 mb-2">{{ __('End Date') }}</x-metronic.label>
                        <x-metronic.input id="end_date" type="date" name="end_date" :value="old('end_date')" class="form-control-solid" />
                    </div>
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="end_time" class="fw-bold fs-6 mb-2">{{ __('End Time') }}</x-metronic.label>
                        <x-metronic.input id="end_time" type="time" name="end_time" :value="old('end_time')" class="form-control-solid" />
                    </div>

                    {{-- Attendees --}}
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="max_attendees" class="fw-bold fs-6 mb-2">{{ __('Max Attendees') }}</x-metronic.label>
                        <x-metronic.input id="max_attendees" type="number" name="max_attendees" :value="old('max_attendees')" class="form-control-solid" placeholder="Enter maximum attendees" />
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="current_attendees" class="fw-bold fs-6 mb-2">{{ __('Current Attendees') }}</x-metronic.label>
                        <x-metronic.input id="current_attendees" type="number" name="current_attendees" :value="old('current_attendees')" class="form-control-solid" placeholder="Enter current attendees" />
                    </div>

                    {{-- Short Description --}}
                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="event_short_descp" class="fw-bold fs-6 mb-2">{{ __('Short Description') }}</x-metronic.label>
                        <textarea id="event_short_descp" name="event_short_descp" class="form-control form-control-solid" rows="3" placeholder="Enter short description">{{ old('event_short_descp') }}</textarea>
                    </div>

                    {{-- Instructor & Fees --}}
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="instructor" class="fw-bold fs-6 mb-2">{{ __('Instructor') }}</x-metronic.label>
                        <x-metronic.input id="instructor" type="text" name="instructor" :value="old('instructor')" class="form-control-solid" placeholder="Enter instructor name" />
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="registration_fee" class="fw-bold fs-6 mb-2">{{ __('Registration Fee') }}</x-metronic.label>
                        <x-metronic.input id="registration_fee" type="text" name="registration_fee" :value="old('registration_fee')" class="form-control-solid" placeholder="Enter registration fee" />
                    </div>

                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="student_fee" class="fw-bold fs-6 mb-2">{{ __('Student Fee') }}</x-metronic.label>
                        <x-metronic.input id="student_fee" type="number" name="student_fee" :value="old('student_fee')" class="form-control-solid" step="0.01" />
                    </div>

                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="job_holder_fee" class="fw-bold fs-6 mb-2">{{ __('Job Holder Fee') }}</x-metronic.label>
                        <x-metronic.input id="job_holder_fee" type="number" name="job_holder_fee" :value="old('job_holder_fee')" class="form-control-solid" step="0.01" />
                    </div>

                    {{-- Links --}}
                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="whatsapp_link" class="fw-bold fs-6 mb-2">{{ __('WhatsApp Link') }}</x-metronic.label>
                        <x-metronic.input id="whatsapp_link" type="url" name="whatsapp_link" :value="old('whatsapp_link')" class="form-control-solid" placeholder="Enter WhatsApp group link" />
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="facebook_link" class="fw-bold fs-6 mb-2">{{ __('Facebook Link') }}</x-metronic.label>
                        <x-metronic.input id="facebook_link" type="url" name="facebook_link" :value="old('facebook_link')" class="form-control-solid" placeholder="Enter Facebook event link" />
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="linkedin_link" class="fw-bold fs-6 mb-2">{{ __('LinkedIn Link') }}</x-metronic.label>
                        <x-metronic.input id="linkedin_link" type="url" name="linkedin_link" :value="old('linkedin_link')" class="form-control-solid" placeholder="Enter LinkedIn link" />
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="registration_link" class="fw-bold fs-6 mb-2">{{ __('Registration Link') }}</x-metronic.label>
                        <x-metronic.input id="registration_link" type="url" name="registration_link" :value="old('registration_link')" class="form-control-solid" placeholder="Enter registration link" />
                    </div>

                    {{-- Mode, Organizer, Map --}}
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="training_mode" class="fw-bold fs-6 mb-2">{{ __('Training Mode') }}</x-metronic.label>
                        <x-metronic.input id="training_mode" type="text" name="training_mode" :value="old('training_mode')" class="form-control-solid" placeholder="Online / Offline / Hybrid" />
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="organizer_text" class="fw-bold fs-6 mb-2">{{ __('Organizer') }}</x-metronic.label>
                        <x-metronic.input id="organizer_text" type="text" name="organizer_text" :value="old('organizer_text')" class="form-control-solid" placeholder="Enter organizer name" />
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="map_link" class="fw-bold fs-6 mb-2">{{ __('Map Link') }}</x-metronic.label>
                        <x-metronic.input id="map_link" type="url" name="map_link" :value="old('map_link')" class="form-control-solid" placeholder="Google Map link" />
                    </div>

                    {{-- Images --}}
                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="banner_image" class="fw-bold fs-6 mb-2">{{ __('Banner Image') }}</x-metronic.label>
                        <x-metronic.file-input id="banner_image" name="banner_image" class="form-control-solid" />
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="thumbnail_image" class="fw-bold fs-6 mb-2">{{ __('Thumbnail Image') }}</x-metronic.label>
                        <x-metronic.file-input id="thumbnail_image" name="thumbnail_image" class="form-control-solid" />
                    </div>

                    {{-- Status & Type --}}
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status" class="fw-bold fs-6 mb-2">{{ __('Status') }}</x-metronic.label>
                        <select class="form-select" name="status" data-control="select2" data-hide-search="true" data-placeholder="Select status">
                            <option value="">Select</option>
                            <option value="upcoming" {{ old('status') == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                            <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="registration_open" {{ old('status') == 'registration_open' ? 'selected' : '' }}>Registration Open</option>
                            <option value="registration_close" {{ old('status') == 'registration_close' ? 'selected' : '' }}>Registration Close</option>
                            <option value="canceled" {{ old('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="event_type" class="fw-bold fs-6 mb-2">{{ __('Event Type') }}</x-metronic.label>
                        <select class="form-select" name="event_type" data-control="select2" data-hide-search="true" data-placeholder="Select event type">
                            <option value="">Select</option>
                            <option value="workshop" {{ old('event_type') == 'workshop' ? 'selected' : '' }}>Workshop</option>
                            <option value="seminar" {{ old('event_type') == 'seminar' ? 'selected' : '' }}>Seminar</option>
                            <option value="conference" {{ old('event_type') == 'conference' ? 'selected' : '' }}>Conference</option>
                            <option value="webinar" {{ old('event_type') == 'webinar' ? 'selected' : '' }}>Webinar</option>
                        </select>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="payment_type" class="fw-bold fs-6 mb-2">{{ __('Payment Type') }}</x-metronic.label>
                        <select class="form-select" name="payment_type" data-control="select2" data-hide-search="true" data-placeholder="Select payment type">
                            <option value="free" {{ old('payment_type') == 'free' ? 'selected' : '' }}>Free</option>
                            <option value="paid" {{ old('payment_type') == 'paid' ? 'selected' : '' }}>Paid</option>
                        </select>
                    </div>

                    {{-- Pricing --}}
                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="ticket_price" class="fw-bold fs-6 mb-2">{{ __('Ticket Price') }}</x-metronic.label>
                        <x-metronic.input id="ticket_price" type="number" name="ticket_price" step="0.01" :value="old('ticket_price')" class="form-control-solid" placeholder="Enter ticket price if paid" />
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="currency" class="fw-bold fs-6 mb-2">{{ __('Currency') }}</x-metronic.label>
                        <x-metronic.input id="currency" type="text" name="currency" :value="old('currency', 'Taka')" class="form-control-solid" placeholder="Enter currency" />
                    </div>

                    {{-- Location & Contact --}}
                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="location" class="fw-bold fs-6 mb-2">{{ __('Location') }}</x-metronic.label>
                        <x-metronic.input id="location" type="text" name="location" :value="old('location')" class="form-control-solid" placeholder="Enter location" />
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="contact" class="fw-bold fs-6 mb-2">{{ __('Contact Info') }}</x-metronic.label>
                        <x-metronic.input id="contact" type="text" name="contact" :value="old('contact')" class="form-control-solid" placeholder="Enter contact number or email" />
                    </div>

                    {{-- Event Status --}}
                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="event_status" class="fw-bold fs-6 mb-2">{{ __('Event Status (optional)') }}</x-metronic.label>
                        <x-metronic.input id="event_status" type="text" name="event_status" :value="old('event_status')" class="form-control-solid" placeholder="e.g., Published, Draft" />
                    </div>

                </div>

                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Submit') }}
                    </x-metronic.button>
                </div>
            </form>
        </div>
    </div>
</x-admin-app-layout>
