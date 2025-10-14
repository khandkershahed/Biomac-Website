<x-admin-app-layout :title="'Research Papers'">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-dark align-items-center d-flex justify-content-between">
                    <div>
                        <h1 class="mb-0 text-center w-100 text-white">Your Research Papers</h1>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-white rounded-2" data-bs-toggle="modal"
                            data-bs-target="#paperAddModal">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                        fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                        transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            Add Research Paper
                        </a>
                    </div>
                </div>
                <div class="card-body py-0">
                    <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                        <thead class="bg-light-danger">
                            <tr class="fw-semibold fs-6 text-gray-800 text-center">
                                <th width="5%">Sl</th>
                                <th width="55%">Title</th>
                                <th width="10%">Date</th>
                                <th width="10%">Status</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($papers as $paper)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $paper->name }}</td>
                                    <td class="text-center">{{ $paper->date->format('d F, Y') }}</td>
                                    <td class="text-center">
                                        <span
                                            class="badge {{ $paper->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                            {{ ucfirst($paper->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary p-2 me-3"
                                            data-bs-toggle="modal" data-bs-target="#paperEditModal{{ $paper->id }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="{{ route('admin.research-paper.destroy',$paper->id) }}"
                                            class="btn btn-sm btn-danger p-2 delete">
                                            <i class="fa-solid fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Add paper Modal --}}
    <div class="modal fade" id="paperAddModal" tabindex="-1" aria-labelledby="paperAddLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="paperAddLabel">Add paper</h5>
                    <button class="btn btn-white btn-sm ps-4 pe-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.research-paper.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12 mb-7">
                                <x-metronic.label for="name"
                                    class="col-form-label required fw-bold fs-6">{{ __('Title') }}</x-metronic.label>
                                <x-metronic.input id="name" type="text" name="name"
                                    placeholder="Enter the title" :value="old('name')"></x-metronic.input>
                            </div>
                            <div class="col-lg-9 mb-7">
                                <x-metronic.label for="journal_name"
                                    class="col-form-label required fw-bold fs-6">{{ __('Journal Name') }}</x-metronic.label>
                                <x-metronic.input id="journal_name" type="text" name="journal_name"
                                    placeholder="Enter the Journal Name" :value="old('journal_name')"></x-metronic.input>
                            </div>
                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="impact_factor"
                                    class="col-form-label required fw-bold fs-6">{{ __('Impact Factor') }}</x-metronic.label>
                                <x-metronic.input id="impact_factor" type="text" name="impact_factor"
                                    placeholder="Enter the Impact Factor" :value="old('impact_factor')"></x-metronic.input>
                            </div>
                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="date"
                                    class="col-form-label required fw-bold fs-6">{{ __('Date') }}</x-metronic.label>
                                <x-metronic.input id="date" type="date" name="date"
                                    placeholder="Enter the Date" :value="old('date')"></x-metronic.input>
                            </div>
                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="citation"
                                    class="col-form-label required fw-bold fs-6">{{ __('Cited By') }}</x-metronic.label>
                                <x-metronic.input id="citation" type="text" name="citation"
                                    placeholder="Enter the citation" :value="old('citation')"></x-metronic.input>
                            </div>
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="author"
                                    class="col-form-label required fw-bold fs-6">{{ __('Authors') }}</x-metronic.label>
                                <x-metronic.input id="author" type="text" name="author"
                                    placeholder="Enter the Author Name" :value="old('author')"></x-metronic.input>
                            </div>
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="doi"
                                    class="col-form-label required fw-bold fs-6">{{ __('DOI No') }}</x-metronic.label>
                                <x-metronic.input id="doi" type="text" name="doi"
                                    placeholder="Enter the doi" :value="old('doi')"></x-metronic.input>
                            </div>
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="link"
                                    class="col-form-label required fw-bold fs-6">{{ __('Link') }}</x-metronic.label>
                                <x-metronic.input id="link" type="text" name="link"
                                    placeholder="Enter the link" :value="old('link')"></x-metronic.input>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="status"
                                    class="col-form-label fw-bold fs-6">{{ __('Status') }}</x-metronic.label>
                                <select class="form-select" name="status" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>

                            <div class="col-xl-12">
                                <div class="text-end">
                                    <x-metronic.button type="submit" class="dark">
                                        {{ __('Submit') }}
                                    </x-metronic.button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit paper Modals --}}
    @foreach ($papers as $paper)
        <div class="modal fade" id="paperEditModal{{ $paper->id }}" tabindex="-1"
            aria-labelledby="paperEditLabel{{ $paper->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title text-white" id="paperEditLabel{{ $paper->id }}">Edit Paper</h5>
                        <button class="btn btn-white btn-sm ps-4 pe-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('admin.research-paper.update', $paper->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-lg-12 mb-7">
                                    <x-metronic.label for="name"
                                        class="col-form-label required fw-bold fs-6">{{ __('Title') }}</x-metronic.label>
                                    <x-metronic.input id="name" type="text" name="name"
                                        placeholder="Enter the title" :value="old('name',$paper->name)"></x-metronic.input>
                                </div>
                                <div class="col-lg-9 mb-7">
                                    <x-metronic.label for="journal_name"
                                        class="col-form-label required fw-bold fs-6">{{ __('Journal Name') }}</x-metronic.label>
                                    <x-metronic.input id="journal_name" type="text" name="journal_name"
                                        placeholder="Enter the Journal Name" :value="old('journal_name',$paper->journal_name)"></x-metronic.input>
                                </div>
                                <div class="col-lg-3 mb-7">
                                    <x-metronic.label for="impact_factor"
                                        class="col-form-label required fw-bold fs-6">{{ __('Impact Factor') }}</x-metronic.label>
                                    <x-metronic.input id="impact_factor" type="text" name="impact_factor"
                                        placeholder="Enter the Impact Factor" :value="old('impact_factor',$paper->impact_factor)"></x-metronic.input>
                                </div>
                                <div class="col-lg-3 mb-7">
                                    <x-metronic.label for="date"
                                        class="col-form-label required fw-bold fs-6">{{ __('Date') }}</x-metronic.label>
                                    <x-metronic.input id="date" type="date" name="date"
                                        placeholder="Enter the Date" :value="old('date',$paper->date)"></x-metronic.input>
                                </div>
                                <div class="col-lg-3 mb-7">
                                    <x-metronic.label for="citation"
                                        class="col-form-label required fw-bold fs-6">{{ __('Cited By') }}</x-metronic.label>
                                    <x-metronic.input id="citation" type="text" name="citation"
                                        placeholder="Enter the citation" :value="old('citation',$paper->citation)"></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="author"
                                        class="col-form-label required fw-bold fs-6">{{ __('Authors') }}</x-metronic.label>
                                    <x-metronic.input id="author" type="text" name="author"
                                        placeholder="Enter the Author Name" :value="old('author',$paper->author)"></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="doi"
                                        class="col-form-label required fw-bold fs-6">{{ __('DOI No') }}</x-metronic.label>
                                    <x-metronic.input id="doi" type="text" name="doi"
                                        placeholder="Enter the doi" :value="old('doi',$paper->doi)"></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="link"
                                        class="col-form-label required fw-bold fs-6">{{ __('Link') }}</x-metronic.label>
                                    <x-metronic.input id="link" type="text" name="link"
                                        placeholder="Enter the link" :value="old('link',$paper->link)"></x-metronic.input>
                                </div>
                                <div class="col-lg-4 mb-7">
                                    <x-metronic.label for="status"
                                        class="col-form-label fw-bold fs-6">{{ __('Status') }}</x-metronic.label>
                                    <select class="form-select" name="status" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="active" @selected($paper->status == "active")>Active</option>
                                        <option value="inactive" @selected($paper->status == "inactive")>Inactive</option>
                                    </select>
                                </div>

                                <div class="col-xl-12">
                                    <div class="text-end">
                                        <x-metronic.button type="submit" class="dark">
                                            {{ __('Submit') }}
                                        </x-metronic.button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-admin-app-layout>
