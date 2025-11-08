<x-admin-app-layout :title="'Blog Posts'">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="mb-0 text-info">Manage Your Blog Posts</h1>
            <a href="{{ route('admin.blog-post.create') }}" class="btn btn-light-primary rounded-2">
                <span class="svg-icon svg-icon-3">
                    <i class="fas fa-plus-square"></i>
                </span>
                <span class="pt-2">Add Blogs</span>
            </a>
        </div>
        <div class="card-body py-0">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                <thead class="">
                    <tr class="fw-semibold fs-6 text-gray-800">
                        <th width="5%">Sl</th>
                        <th width="10%" class="text-center">Image</th>
                        <th width="35%">Title</th>
                        <th width="15%">Author</th>
                        <th width="10%">Create date</th>
                        <th width="12%">Status</th>
                        <th width="13%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogPosts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <img class="w-50px h-50px"
                                    src="{{ !empty(optional($post)->logo) ? asset('storage/' . optional($post)->logo) : asset('images/no_image.jpg') }}"
                                    alt="{{ $post->page_name }}">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->created_at->format('d-M-Y') }}</td>
                            <td><span class="badge {{ $post->status == 'publish' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $post->status == 'publish' ? 'Publish' : 'Unpublish' }}</td>
                            <td>
                                {{-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $post->id }}">
                                    <i class="fa-solid fa-expand"></i>
                                </a> --}}
                                <a href="{{ route('admin.blog-post.edit', $post->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="{{ route('admin.blog-post.destroy', $post->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                    data-kt-docs-table-filter="delete_row">
                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Blog Category Create Modal End --}}

</x-admin-app-layout>
