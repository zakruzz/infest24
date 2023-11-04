@extends('layouts.main.app')
@section('style')
@endsection
@section('content')

<section class="tf-section project-info pt60 pb60">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                {{-- Formnya NIH BROO --}}
                <form action="{{ route('income.regist') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tipe_pendaftaran" value="umum">
                    <h3 class="my-5 text-center">Register</h3>
                    <div class="project-info-form">
                        <h6 class="title">Masukkan Email & Password</h6>
                        <div class="form-inner">
                            <fieldset>
                                <label>
                                    Email<span class="text-danger">*</span>
                                </label>
                                <input type="email" name="email" placeholder="Masukkan emailmu" required>
                            </fieldset>
                            <fieldset>
                                <label>
                                    Password<span class="text-danger">*</span>
                                </label>
                                <input type="password" name="password" placeholder="Masukkan passwordmu" required>
                            </fieldset> 
                            <fieldset>
                                <label>
                                    Confirm Password<span class="text-danger">*</span>
                                </label>
                                <input type="password" name="confirm_password" placeholder="Masukkan ulang passwordmu" required>
                            </fieldset> 
                        </div>
                    </div>
                    
                    <div class="project-info-form style">
                        <h6 class="title mb30">Pilih Jenis Lomba Yang Mau Diikuti</h6>
                        <div class="form-inner">
                            <label for="pilihan">Jenis Lomba:</label>
                            <select id="pilihan" name="type" onchange="showHideSections()">
                                <option value="-">Pilih Opsi</option>
                                <option value="Inspection">INSPECTION</option>
                                <option value="Inskill">INSKILL</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    
                    <div class="project-info-form style" style="display: none" id="input0_1">
                        <h6 class="title mb30">Pilih Jenis Inspection-mu</h6>
                        <div class="form-inner">
                            <label for="pilihansubtema">Jenis Inspection:</label>
                            <select id="pilihansubtema" onchange="showInput0()">
                                <option value="-">Pilih Opsi</option>
                                <option value="option_a">Gagasan Tertulis (Khusus SMA/MA)</option>
                                <option value="option_b">Hasta Karya (Khusus SMK)</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="project-info-form style" style="display: none" id="input0">
                        <h6 class="title mb30">Pilih Subtema-mu</h6>
                        <div class="form-inner">
                            <label for="pilihansubtema">Subtema:</label>
                            <select id="pilihansubtema" name="tema" onchange="showInput1()">
                                <option value="-">Pilih Opsi</option>
                                <option value="Insfrastruktur kota">Insfrastruktur kota</option>
                                <option value="Transportasi cerdas">Transportasi cerdas</option>
                                <option value="Efisiensi Energi">Efisiensi Energi</option>
                                <option value="Pengelolaan air ramah lingkungan">Pengelolaan air ramah lingkungan</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Manajemen limbah dan daur ulang">Manajemen limbah dan daur ulang</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="project-info-form style" style="display: none" id="input1">
                        <h6 class="title mb30">Masukkan Biodata</h6>
                        <div class="form-inner">
                            <fieldset>
                                <label >
                                    Nama Tim
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Tim Anda..." name="nama_tim" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Anda..." name="no_wa" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Asal Sekolah/Institusi
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Asal Sekolah/Institusi Anda..." name="institusi" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nama Ketua
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama[]" required>
                            </fieldset>
                            <fieldset id="formulirFieldset" style="display: none">
                                <label >
                                    Nama Anggota 2
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama[]">
                            </fieldset>
                            <div style="display: flex;">
                                <a onclick="toggleFormulir()" class="add tf-button style2">Tambah Anggota</a>
                                <a onclick="hideFormulir()" class="remove tf-button style2" style="display: none;">Kurangi Anggota</a>
                            </div>
                        </div>
                    </div>  

                    <div class="wrap-btn">
                        <button type="submit" class="tf-button style2">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(".dropdown img.flag").addClass("flagvisibility");
    $(".dropdown dt a").click(function() {
        $(".dropdown dd ul").toggle();
    });
                
    $(".dropdown dd ul li a").click(function() {
        var text = $(this).html();
        $(".dropdown dt a span").html(text);
        $(".dropdown dd ul").hide(); 
    });
                
    function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (! $clicked.parents().hasClass("dropdown"))
            $(".dropdown dd ul").hide();
    });

    $(".dropdown img.flag").toggleClass("flagvisibility");
</script>
<script>
        var no_link = function(){
            $('a.nolink').on('click', function(e){
            e.preventDefault();
        });
        }
</script> 
{{-- <script>
        function berhasil() {
        Swal.fire({
  iconHtml: '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50" style="fill:#40C057;"> <path d="M 25 2 C 12.317 2 2 12.317 2 25 C 2 37.683 12.317 48 25 48 C 37.683 48 48 37.683 48 25 C 48 20.44 46.660281 16.189328 44.363281 12.611328 L 42.994141 14.228516 C 44.889141 17.382516 46 21.06 46 25 C 46 36.579 36.579 46 25 46 C 13.421 46 4 36.579 4 25 C 4 13.421 13.421 4 25 4 C 30.443 4 35.393906 6.0997656 39.128906 9.5097656 L 40.4375 7.9648438 C 36.3525 4.2598437 30.935 2 25 2 z M 43.236328 7.7539062 L 23.914062 30.554688 L 15.78125 22.96875 L 14.417969 24.431641 L 24.083984 33.447266 L 44.763672 9.046875 L 43.236328 7.7539062 z"></path> </svg>',
  title: 'Berhasil!',
  allowOutsideClick: false,
  showConfirmButton: false,
  html: '<p>Pengiriman Formulir Berhasil! Silahkan Masuk Kedalam Grup WhatsApp</p> <br> <a class="tf-button style2 me-md-2" href="https://chat.whatsapp.com/Cjl087nTIpc8eECZ6G5vI7">Masuk Grup WhatsApp</a>'
})
    }
</script> --}}
<script>
    function toggleFormulir() {
        var formulirFieldset = document.getElementById('formulirFieldset');
        var tambahButton = document.querySelector('.add');
        var kurangiButton = document.querySelector('.remove');

        if (formulirFieldset.style.display === 'none') {
            formulirFieldset.style.display = 'block';
            tambahButton.style.display = 'none';
            kurangiButton.style.display = 'block';
        } else {
            formulirFieldset.style.display = 'none';
            tambahButton.style.display = 'block';
            kurangiButton.style.display = 'none';
        }
    }

    function hideFormulir() {
        var formulirFieldset = document.getElementById('formulirFieldset');
        var tambahButton = document.querySelector('.add');
        var kurangiButton = document.querySelector('.remove');

        formulirFieldset.style.display = 'none';
        tambahButton.style.display = 'block';
        kurangiButton.style.display = 'none';
    }
</script>

<script>
    function showHideSections() {
        var pilihan = document.getElementById('pilihan');
        var tipe = document.getElementById('input0_1');
        var subtema = document.getElementById('input0');
        var biodata = document.getElementById('input1');

        if (pilihan.value === 'Inspection') {
            tipe.style.display = 'block';
            subtema.style.display = 'none';
            biodata.style.display = 'none';
        } else if (pilihan.value === 'Inskill') {
            tipe.style.display = 'none';
            subtema.style.display = 'none';
            biodata.style.display = 'block';
        } else {
            tipe.style.display = 'none';
            subtema.style.display = 'none';
            biodata.style.display = 'none';
        }
    }
    function showInput1() {
            var biodata = document.getElementById('input1');
            biodata.style.display = 'block';
        }
    function showInput0() {
            var subtema = document.getElementById('input0');
            subtema.style.display = 'block';
        }
</script>
 <script src="{{ asset('assets/main/app/js/input-file.js') }}"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>  
@endsection