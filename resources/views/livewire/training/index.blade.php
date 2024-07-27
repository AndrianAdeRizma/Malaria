<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title mb-3 py-3">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-id icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>{{ $section }}
                        <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced
                            dynamic ones.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span> Inbox</span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span> Book</span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span> Picture</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span> File Disabled</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-header">
                <button data-toggle="modal" data-target="#formModal" class="btn-shadow mr-3 btn btn-primary">
                    <i class="fa fa-plus-square"></i>
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table style="width: 100%;" id="exampl" class="table table-hover table-striped">
                        <div class="d-flex justify-content-between mb-1">
                            <div class="p-2 bd-highlight">
                                <div class="dataTables_length" id="example_length">
                                    <label>Show entries</label>
                                    <select name="example_length" aria-controls="example"
                                        class="custom-select custom-select-sm form-control form-control-sm col-6">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="p-2 bd-highlight">Content</div> --}}
                            <div class="p-2 bd-highlight">
                                <div id="example_filter" class="float-end">
                                    <label>Search:
                                        <input type="search" class="form-control form-control-sm float-end"
                                            placeholder="" aria-controls="example"></label>
                                </div>
                            </div>
                        </div>
                        <thead class="bg-plum-plate text-white">
                            <tr>
                                <th  class="text-center">No</th>
                                <th>Demam</th>
                                <th>Sakit Kepala</th>
                                <th>Mengigil</th>
                                <th>Berkeringat</th>
                                <th>Mual</th>
                                <th>Diagnosa</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody wire:poll.5s>
                            @forelse($trainings as $index => $training)
                                <tr>
                                    <td class="text-center"> {{ $trainings->firstItem() + $index }}</td>
                                    <td>{{ $training->demam }}</td>
                                    <td>{{ $training->sakit_kepala }}</td>
                                    <td>{{ $training->mengigil }}</td>
                                    <td>{{ $training->berkeringat }}</td>
                                    <td>{{ $training->mual }}</td>
                                    <td>{{ $training->diagnosa }}</td>
                                    <td class="text-center">
                                        <button data-toggle="modal" data-target="#formModal"
                                            wire:click="edit({{ $training->id }})"
                                            class="btn btn-primary btn-sm mx-1">Edit</button>
                                        <button class="btn btn-sm btn-danger"
                                            @click="deleteConfirmation({{ $training->id }})">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10">
                                        <div class="text-center">
                                            <span class="text-danger"> No Records Found </span>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $trainings->links(data: ['scrollTo' => false]) }}
                </div>
            </div>
        </div>
        @include('livewire.training.form')
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteConfirmation(id) {
            const swall = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-sm btn-primary",
                    cancelButton: "btn btn-sm btn-secondary"
                },
                buttonsStyling: true
            });
            swall.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.dispatch('delete', {
                        id: id
                    });
                }
            });
        }
    </script>
    <!-- jQuery library -->
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('swallAlert', (event) => {
                // $('#formModal').modal('toggle')
                const alert = event
                var Toast = Swal.mixin({
                    width: 350,
                    toast: true,
                    position: "top-right",
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                });
                Toast.fire({
                    icon: alert[0]['icon'],
                    title: alert[0]['title'],
                });
            });
        });
    </script>
    {{-- @script
        <script>
            $wire.on('swallAlert', (e) => {
                alert('hii');
                const alert = e
                var Toast = Swal.mixin({
                    toast: true,
                    position: "top-right",
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                });
                Toast.fire({
                    icon: alert[0]['icon'],
                    title: alert[0]['title'],
                });
            });
        </script>
    @endscript --}}
@endpush
