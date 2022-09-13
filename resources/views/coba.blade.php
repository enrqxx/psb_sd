@extends('layouts.main')
@section('css')
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #e47411;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #e47411;
        }
    </style>
@stop
@section('container')

    <form id="regForm" enctype="multipart/form-data" action="/daftar_siswa">
        {{ csrf_field() }}
        <h1>Register:</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name:
            <span class="title">Pendaftaran Siswa Baru</span>

            <div class="fields">
                <div class="input-field">
                    <label>Nama Lengkap</label>
                    <input type="text" placeholder="Nama Lengkap" required>
                </div>

                <div class="input-field">
                    <label>Tanggal Lahir</label>
                    <input type="date" placeholder="Tanggal Lahir" required>
                </div>

                <div class="input-field">
                    <label>Tempat Lahir</label>
                    <input type="text" placeholder="Tempat Lahir" required>
                </div>

                <div class="input-field">
                    <label>Agama</label>
                    <input type="number" placeholder="Agama" required>
                </div>

                <div class="input-field">
                    <label>Kewarganegaraan</label>
                    <input type="number" placeholder="Kewarganegaraan" required>
                </div>

                <div class="input-field">
                    <label>Jenis Kelamin</label>
                    <select required>
                        <option disabled selected>Pilih Jenis Kelamin</option>
                        <option>laki-laki</option>
                        <option>perempuan</option>
                    </select>
                </div>

                <div class="input-field">
                    <label>Occupation</label>
                    <input type="text" placeholder="Enter your ccupation" required>
                </div>
            </div>
        </div>
        <div class="tab">Contact Info:
            <span class="title">Identity Details</span>

            <div class="fields">
                <div class="input-field">
                    <label>ID Type</label>
                    <input type="text" placeholder="Enter ID type" required>
                </div>

                <div class="input-field">
                    <label>ID Number</label>
                    <input type="number" placeholder="Enter ID number" required>
                </div>

                <div class="input-field">
                    <label>Issued Authority</label>
                    <input type="text" placeholder="Enter issued authority" required>
                </div>

                <div class="input-field">
                    <label>Issued State</label>
                    <input type="text" placeholder="Enter issued state" required>
                </div>

                <div class="input-field">
                    <label>Issued Date</label>
                    <input type="date" placeholder="Enter your issued date" required>
                </div>

                <div class="input-field">
                    <label>Expiry Date</label>
                    <input type="date" placeholder="Enter expiry date" required>
                </div>
            </div>

        </div>
        <div class="tab">Contact Info:
            <span class="title">Address Details</span>

            <div class="fields">
                <div class="input-field">
                    <label>Address Type</label>
                    <input type="text" placeholder="Permanent or Temporary" required>
                </div>

                <div class="input-field">
                    <label>Nationality</label>
                    <input type="text" placeholder="Enter nationality" required>
                </div>

                <div class="input-field">
                    <label>State</label>
                    <input type="text" placeholder="Enter your state" required>
                </div>

                <div class="input-field">
                    <label>District</label>
                    <input type="text" placeholder="Enter your district" required>
                </div>

                <div class="input-field">
                    <label>Block Number</label>
                    <input type="number" placeholder="Enter block number" required>
                </div>

                <div class="input-field">
                    <label>Ward Number</label>
                    <input type="number" placeholder="Enter ward number" required>
                </div>
            </div>
        </div>
        <div class="tab">Contact Info:
            <span class="title">Family Details</span>

            <div class="fields">
                <div class="input-field">
                    <label>Father Name</label>
                    <input type="text" placeholder="Enter father name" required>
                </div>

                <div class="input-field">
                    <label>Mother Name</label>
                    <input type="text" placeholder="Enter mother name" required>
                </div>

                <div class="input-field">
                    <label>Grandfather</label>
                    <input type="text" placeholder="Enter grandfther name" required>
                </div>

                <div class="input-field">
                    <label>Spouse Name</label>
                    <input type="text" placeholder="Enter spouse name" required>
                </div>

                <div class="input-field">
                    <label>Father in Law</label>
                    <input type="text" placeholder="Father in law name" required>
                </div>

                <div class="input-field">
                    <label>Mother in Law</label>
                    <input type="text" placeholder="Mother in law name" required>
                </div>
            </div>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>

        </div>
    </form>
    <span class="title">Data Wali Murid</span>

    <div class="fields">
        <div class="input-field">
            <label>Nama Ayah Kandung</label>
            <input type="text" placeholder="Permanent or Temporary" name="nama_ayah" required>
        </div>

        <div class="input-field">
            <label>Tempat Lahir Ayah Kandung</label>
            <input type="text" placeholder="Enter nationality" name="tempat_lahir_ayah" required>
        </div>

        <div class="input-field">
            <label>Tanggal Lahir Ayah Kandung</label>
            <input type="text" placeholder="Enter your state" name="tanggal_lahir_ayah" required>
        </div>

        <div class="input-field">
            <label>Pendidikan Ayah Kandung</label>
            <select class="form-control form-select" aria-label="Default select example" name="id_pendidikan_ayah"
                id="id_pendidikan_ayah" required>
                <option disabled selected>Pilih Pendidikan Terakhir</option>
                @foreach ($pendidikan as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_pendidikan }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-field">
            <label>Perkejaan Ayah Kandung</label>
            <input type="text" placeholder="Perkejaan Ayah Kandung" name="pekerjaan_ayah" required>
        </div>

        <div class="input-field">
            <label>Nomor Telepon Ayah</label>
            <input type="text" placeholder="Nomor Telepon Ayah" name="no_telp_ayah" required>
        </div>
        <div class="input-field">
            <label>Nama Instansi Ayah Berkerja</label>
            <input type="text" placeholder="Nama Instansi Ayah Berkerja" name="instansi_ayah" required>
        </div>
        <div class="input-field">
            <label>Alamat Pekerjaan Ayah</label>
            <input type="text" placeholder="Alamat Pekerjaan Ayah" name="alamat_kerja_ayah" required>
        </div>
        <div class="input-field">
            <label>Penghasilan Ayah Per Bulan</label>
            <input type="number" placeholder="Penghasilan Ayah Per Bulan" name="penghasilan_ayah" required>
        </div>
        <span class="title">Data Wali Murid</span>


    @stop
    @section('js')
        <script type="text/javascript">
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                    }
                }
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }
        </script>
    @stop
