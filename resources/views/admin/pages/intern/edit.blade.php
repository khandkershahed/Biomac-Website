<x-admin-app-layout :title="'Intern Update'">
    <div class="card card-flash">
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <form class="form" method="POST" action="{{ route('admin.intern.update', $teamMember->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="name"
                            class="required fw-bold fs-6 mb-2">{{ __('Full Name') }}</x-metronic.label>
                        <x-metronic.input id="name" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="name" :value="old('name', $teamMember->name)" placeholder="Enter Full Name"></x-metronic.input>
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="email"
                            class="required fw-bold fs-6 mb-2">{{ __('Email') }}</x-metronic.label>
                        <x-metronic.input id="email" type="email" class="form-control-solid mb-3 mb-lg-0"
                            name="email" :value="old('email', $teamMember->email)" placeholder="example@domain.com"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="phone"
                            class="fw-bold fs-6 mb-2">{{ __('Phone') }}</x-metronic.label>
                        <x-metronic.input id="phone" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="phone" :value="old('phone', $teamMember->phone)" placeholder="Enter Phone Number"></x-metronic.input>
                    </div>


                    <div class="col-lg-8 mb-7">
                        <x-metronic.label for="affiliation"
                            class="fw-bold fs-6 mb-2">{{ __('affiliation') }}</x-metronic.label>
                        <x-metronic.input id="affiliation" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="affiliation" :value="old('affiliation', $teamMember->affiliation)" placeholder="Enter affiliation"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image"
                            class="fw-bold fs-6 mb-2">{{ __('Photo') }}</x-metronic.label>
                        <x-metronic.file-input id="image" class="form-control-solid mb-3 mb-lg-0" :source="asset('storage/' . $teamMember->image)"
                            name="image" placeholder="Upload Photo"></x-metronic.file-input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="linked_in"
                            class="fw-bold fs-6 mb-2">{{ __('LinkedIn') }}</x-metronic.label>
                        <x-metronic.input id="linked_in" type="url" class="form-control-solid mb-3 mb-lg-0"
                            name="linked_in" :value="old('linked_in', $teamMember->linked_in)"
                            placeholder="Enter LinkedIn Profile URL"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="facebook"
                            class="fw-bold fs-6 mb-2">{{ __('Facebook') }}</x-metronic.label>
                        <x-metronic.input id="facebook" type="url" class="form-control-solid mb-3 mb-lg-0"
                            name="facebook" :value="old('facebook', $teamMember->facebook)"
                            placeholder="Enter Facebook Profile URL"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="github"
                            class="fw-bold fs-6 mb-2">{{ __('GitHub') }}</x-metronic.label>
                        <x-metronic.input id="github" type="url" class="form-control-solid mb-3 mb-lg-0"
                            name="github" :value="old('github', $teamMember->github)" placeholder="Enter GitHub Profile URL"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="website"
                            class="fw-bold fs-6 mb-2">{{ __('Website') }}</x-metronic.label>
                        <x-metronic.input id="website" type="url" class="form-control-solid mb-3 mb-lg-0"
                            name="website" :value="old('website', $teamMember->website)"
                            placeholder="Enter Personal Website URL"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="researchgate"
                            class="fw-bold fs-6 mb-2">{{ __('Research Gate') }}</x-metronic.label>
                        <x-metronic.input id="researchgate" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="researchgate" :value="old('researchgate', $teamMember->researchgate)" placeholder="Enter Research Gate"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="gender"
                            class="fw-bold fs-6 mb-2">{{ __('Gender') }}</x-metronic.label>
                        <select class="form-select" name="gender" data-control="select2" data-hide-search="true"
                            data-allow-clear="true" data-placeholder="Select gender">
                            <option value="male" {{ old('gender', $teamMember->gender) == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender', $teamMember->gender) == 'female' ? 'selected' : '' }}>Female
                            </option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status"
                            class="fw-bold fs-6 mb-2">{{ __('Status') }}</x-metronic.label>
                        <select class="form-select" name="status" data-control="select2" data-hide-search="true"
                            data-allow-clear="true" data-placeholder="Select status">
                            <option value="active"
                                {{ old('status', $teamMember->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="on_leave"
                                {{ old('status', $teamMember->status) == 'on_leave' ? 'selected' : '' }}>On Leave
                            </option>
                            <option value="inactive"
                                {{ old('status', $teamMember->status) == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="order"
                            class="fw-bold fs-6 mb-2">{{ __('Display Order') }}</x-metronic.label>
                        <x-metronic.input id="order" type="number" class="form-control-solid mb-3 mb-lg-0"
                            name="order" :value="old('order', $teamMember->order)"
                            placeholder="Enter Display Order (optional)"></x-metronic.input>
                    </div>


                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Update') }}
                    </x-metronic.button>
                </div>
            </form>
        </div>
    </div>
</x-admin-app-layout>
