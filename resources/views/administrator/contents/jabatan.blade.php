<!-- template -->
@extends('administrator.layouts.dash')
<!-- judul -->
@section('judul', 'Daftar Anggota')
{{-- isi contents --}}
@section('contents')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-arc icon-gradient bg-tempting-azure"></i>
                </div>
                <div>Daftar Jabatan
                    <div class="page-title-subheading">Terakhir diupdate pada <?= date('l, d F Y') ?></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button class="mb-2 mr-2 btn-icon btn btn-primary" onclick="tambah()" id="tambah"><i
                        class="icon ion-android-add mr-2"> </i>Tambahkan Anggota</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="main-card mb-3 card">
                <div class="card-body table-responsive">
                    <table class="mb-0 table table-bordered" id="table_anggota">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">No. Handphone</th>
                                <th class="text-center">RT/RW</th>
                                <th class="text-center">Ditambahkan</th>
                                {{-- <th class="text-center">Diubah</th> --}}
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ 'assets/js/jquery.dataTables.min.js' }}"></script>
        <script src="{{ 'assets/js/bootstrap.bundle.min.js' }}"></script>
        <script>
            $(document).ready(function() {
                isi();
            })

            function isi() {
                $("#table_anggota").DataTable({
                    serverside: true,
                    responsive: true,
                    ajax: {
                        url: "{{ route('list_member') }}"
                    },
                    columns: [{
                            data: null,
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1
                            }
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        // {
                        //     data: 'email',
                        //     name: 'email'
                        // },
                        {
                            data: 'no_handphone',
                            name: 'no_handphone'
                        },
                        {
                            data: 'address',
                            name: 'address'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        // {data: 'updated_at', name: 'updated_at'},
                        {
                            data: 'aksi',
                            name: 'aksi',
                            sortable: false
                        }
                    ]
                })
            }
        </script>
        <script>
            // script tampil modal tambah
            function tambah() {
                $.LoadingOverlay("show", {
                    image: "",
                    fontawesome: "fa fa-spinner fa-pulse"
                });
                $('#tombol').text('Simpan');
                clear_form_elements('modal-body');
                $('#modal_anggota').modal('show');
                $.LoadingOverlay("hide");
            }
            // script tampil modal tambah

            $('#simpan').on('click', function() {
                $.LoadingOverlay("show", {
                    image: "",
                    fontawesome: "fa fa-spinner fa-pulse"
                });
                $.ajax({
                    url: "{{ route('member.store') }}",
                    type: "post",
                    data: {
                        name: $('#name').val(),
                        no_handphone: $('#no_handphone').val(),
                        address: $('#address').val(),
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        console.log(res);
                        $.LoadingOverlay("hide");
                        Swal.fire({
                            icon: 'success',
                            text: res.text,
                            toast: true,
                            position: 'top-right',
                            showConfirmButton: false,
                            timer: 3000,
                        });
                        $('#modal_anggota').modal('hide');
                        $('#table_anggota').DataTable().ajax.reload();
                    },
                    error: function(xhr) {
                        // alert(xhr.responJson.text);
                        $.LoadingOverlay("hide");
                        Swal.fire({
                            icon: 'success',
                            text: xhr.responJson.text,
                            toast: true,
                            position: 'top-right',
                            showConfirmButton: false,
                            timer: 3000,
                        })
                        $('#modal_anggota').modal('show');
                    }
                })
            })



            // script mengosongkan input
            function clear_form_elements(class_name) {
                $("." + class_name).find(':input').each(function() {
                    switch (this.type) {
                        case 'password':
                        case 'text':
                        case 'textarea':
                        case 'file':
                        case 'select-one':
                        case 'select-multiple':
                        case 'date':
                        case 'number':
                        case 'tel':
                        case 'email':
                            jQuery(this).val('');
                            break;
                        case 'checkbox':
                        case 'radio':
                            this.checked = false;
                            break;
                    }
                });
            }
            // end script mengosongkan input
        </script>
    @endpush
@endsection

@section('modal')
    {{-- modal --}}
    <div class="modal fade" id="modal_anggota" tabindex="-1" role="dialog" aria-labelledby="modal_anggotaLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_anggotaLabel">Tambah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="position-relative form-group">
                        <label for="name" class="">Nama</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="position-relative form-group">
                        <label for="no_handphone" class="">No. Handphone</label>
                        <input id="no_handphone" name="no_handphone" type="number" class="form-control"
                            placeholder="Masukkan No. Handphone Aktif">
                    </div>
                    <div class="position-relative form-group">
                        <label for="address" class="">Alamat</label>
                        <input id="address" name="address" type="text" class="form-control" placeholder="Masukkan Alamat">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="tutup" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
@endsection
