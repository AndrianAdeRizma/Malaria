<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title mb-4 py-3">
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
            <div class="card-body">
                <table style="width: 100%;" id="exampl" class="table table-hover table-striped table-bordered">
                    <thead class="bg-plum-plate text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Gol Darah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pasiens as $index => $pasien)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $pasien->nama }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $pasien->tgl_lahir)->format('d/m/Y') }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($pasien->tgl_lahir)->age }}</td>
                                <td>{{ $pasien->gol_darah }}</td>
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
            </div>
        </div>
    </div>
</div>


@section('scripts')
<script type="text/javascript" src="{{ url('assets/js/datatables.js') }}"></script>
{{-- <script>
    const loaderContainer = document.querySelector('.body-block-example-1');
    document.addEventListener("DOMContentLoaded", () => {
   
    })
    $(window).on('load', function() {
        loaderContainer.classList.remove("d-none")
    $('#loading').hide();
});
    </script> --}}
@endSection

