@extends('layouts.main')
@section('container')
<div class="container">
    <header>Registration</header>

    <form action="#">
        <div class="form first">
            <div class="details personal">
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

            <div class="details ID">
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

                <button class="nextBtn">
                    <span class="btnText">Next</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
        </div>

        <div class="form second">
            <div class="details address">
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

            <div class="details family">
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

                <div class="buttons">
                    <div class="backBtn">
                        <i class="uil uil-navigator"></i>
                        <span class="btnText">Back</span>
                    </div>

                    <button class="sumbit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection