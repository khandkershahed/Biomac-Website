 <x-admin-app-layout :title="'Training Lists'">
     <div class="card">
         <div class="card-header bg-info d-flex justify-content-between align-items-center">
             <h1 class="mb-0 text-white">Manage Your Trainings</h1>
             <a href="{{ route('admin.training.create') }}" class="btn btn-light-primary rounded-2">
                 <span class="svg-icon svg-icon-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none">
                         <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                             fill="currentColor" />
                         <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                             transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                         <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                             fill="currentColor" />
                     </svg>
                 </span>
                 <span class="pt-2">Add Training</span>
             </a>
         </div>
         <div class="card-body py-0">
             <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                 <thead class="">
                     <tr class="fw-semibold fs-6 text-gray-800">
                         <th width="5%">SL.</th>
                         <th width="50%">Title</th>
                         <th width="13%">Start Date</th>
                         <th width="12%">Registration Fee</th>
                         <th width="10%">Status</th>
                         <th width="10%">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($trainings as $intern)
                         <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>
                                 <img class="w-65px" src="{{ asset('storage/' . $intern->image) }}" alt="">
                             </td>
                             <td>{{ $intern->name }}</td>
                             <td>{{ $intern->affiliation }}</td>
                             <td>{{ $intern->order }}</td>
                             <td>
                                 <span class="badge {{ $intern->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                     {{ $intern->status == 'active' ? 'Active' : 'InActive' }}</span>
                             </td>
                             <td>
                                 <a href="{{ route('admin.intern.edit', $intern->id) }}"
                                     class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                     <i class="fa-solid fa-pen"></i>
                                 </a>
                                 <a href="{{ route('admin.intern.destroy', $intern->id) }}"
                                     class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete">
                                     <i class="fa-solid fa-trash-alt"></i>
                                 </a>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>

     @push('scripts')
     @endpush
 </x-admin-app-layout>
