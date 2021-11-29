<?= $this->extend('base2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="\css\konsultasi.css">
    <title>Konsultasi</title>
</head>

<body>
    <div class="content-banner">
        <h2>Mulai Rencanakan </h2>
        <h2>Masa Depan Keuangan Anda</h2>
        <a href="#form-regist" class="btn">Yuk! Diskusikan Bersama Kami.</a>
    </div>

    <div class="wrapper">
        <div class="content-title">
            <h3>Solusi Perencanaan Keuangan untuk Anda dan Keluarga</h3>
        </div>
        <div class="container">
            <div class="box first">
                <div class="card">
                    <table>
                        <td>Perencanaan Keuangan</td>
                        <td><img src="\img\money-bag.png" alt="icon money bag" style="width: 30px;"></td>
                    </table>
                </div>
                <div class="card">
                    <table>
                        <td>Perencanaan Dana Hari Tua</td>
                        <td><img src="\img\handshake.png" alt="handshake" style="width: 30px;"></td>
                    </table>
                </div>
            </div>
            <div class="box second">
                <div class="card">
                    <table>
                        <td>Perencanaan Asuransi</td>
                        <td><img src="\img\umbrella.png" alt="umbrella" style="width: 30px;"></td>
                    </table>
                </div>
                <div class="card">
                    <table>
                        <td>Perencanaan Dana Pendidikan</td>
                        <td><img src="\img\student-center.png" alt="Study" style="width: 30px;"></td>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <form action="/konsultasi/save" method="post" class="form" id="form-regist">
        <h3 class="text-center">Jadwalkan Konsultasi dengan Perencana Keuangan</h3>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Layanan"></div>
            <div class="progress-step" data-title="Jam"></div>
            <div class="progress-step" data-title="Detail"></div>
            <div class="progress-step" data-title="Selesai"></div>
        </div>

        <!-- Steps -->
        <div class="form-step form-step-active">
            <div class="input-group">
                <label for="" style="color: #FFFFFF;">Layanan</label>
                <select name="jenis" id="input-layanan" data-child-id='input-perencanaKeuangan' class='dependent-selects__parent' required>
                    <option value="" disabled selected>- pilih -</option>
                    <option value="Perencanaan Keuangan" data-child-options="Lo Kheng Hong,Dimas Kanjeng">Perencanaan Keuangan</option>
                    <option value="Perencanaan Asuransi" data-child-options="Bill Smith,Wildan Hanif M,Rangga Putra,Davio Athallah">Perencanaan Asuransi</option>
                    <option value="Perencanaan Dana Pensiun" data-child-options="Jonathan Victor,Olivia,Ratu Maharani">Perencanaan Dana Pensiun</option>
                    <option value="Perencanaan Dana Pendidikan" data-child-options="Sandiaga Uno,Yasmeen,Nadyn Andriana">Perencanaan Dana Pendidikan</option>
                </select>
            </div>
            <div class="input-group">
                <label for="" style="color: #FFFFFF;">Perencana Keuangan</label>
                <select name="perencana_keuangan" id="input-perencanaKeuangan" class='dependent-selects__child' required>
                    <option value="" disabled selected>- pilih -</option>
                    <option value="Lo Kheng Hong">Lo Kheng Hong (Rp1.000.000)</option>
                    <option value="Dimas Kanjeng">Dimas Kanjeng (Rp1.000.000)</option>
                    <option value="Bill Smith">Bill Smith (Rp1.000.000)</option>
                    <option value="Wildan Hanif M">Wildan Hanif M (Rp1.000.000)</option>
                    <option value="Rangga Putra">Rangga Putra (Rp1.000.000)</option>
                    <option value="Davio Athallah">Davio Athallah (Rp1.000.000)</option>
                    <option value="Jonathan Victor">Jonathan Victor (Rp1.000.000)</option>
                    <option value="Olivia">Olivia (Rp1.000.000)</option>
                    <option value="Ratu Maharani">Ratu Maharani (Rp1.000.000)</option>
                    <option value="Sandiaga Uno">Sandiaga Uno (Rp1.000.000)</option>
                    <option value="Yasmeen">Yasmeen (Rp1.000.000)</option>
                    <option value="Nadyn Andriana">Nadyn Andriana (Rp1.000.000)</option>
                </select>
            </div>
            <div class="input-group">
                <label style="color: #FFFFFF;">Tanggal Konsultasi</label>
                <input type="date" name="date" id="date-input">
            </div>

            <a class="btn btn-next width-25 ml-auto">Next</a>

        </div>
        <div class="form-step">
            <div class="tabel-jam">
                <table>
                    <input type="hidden" name="jam">
                    <tr>
                        <td>08.00-09.00</td>
                        <td><button id="waktu1" class="btn-book btn-next" onclick="booking('08.00-09.00')">Booking</button>
                    
                        </td>
                    </tr>
                    <tr>
                        <td>09.00-10.00</td>
                        <td><button id="waktu2" class="btn-book btn-next" onclick="booking('09.00-10.00')">Booking </button>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>13.00-14.00</td>
                        <td><button id="waktu3" class="btn-book btn-next" onclick="booking('13.00-14.00')">Booking</button>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>15.00-16.00</td>
                        <td><button id="waktu4" class="btn-book btn-next" onclick="booking('15.00-16.00')">Booking</button>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>20.00-21.00</td>
                        <td><button id="waktu5" class="btn-book btn-next" onclick="booking('20.00-21.00')">Booking</button>
                            
                        </td>
                    </tr>
                </table>
            </div>
            <div class="btns-group">
                <a class="btn btn-prev">Back</a>
            </div>
        </div>
        <div class="form-step">
            <div class="container">
                <div class="box first">
                    <label style="color: #FFFFFF;">Nama Lengkap</label>
                    <input type="text" id="input-nama" autocomplete="off" value="<?= $users['nama']; ?>" disabled>

                    <label style="color: #FFFFFF;">Nomor Telepon</label>
                    <input type="tel" id="no-telp" autocomplete="off" value="<?= $users['no_telp']; ?>" disabled>

                    <label style="color: #FFFFFF;">Email</label>
                    <input type="email" name="email" autocomplete="off" value="<?= $users['email']; ?>">

                    <label style="color: #FFFFFF;">Catatan</label>
                    <textarea name="catatan" id="input-catatan" cols="30" rows="5" required></textarea>
                </div>
                <div class="box second">
                    <div class="tabel-tiga">
                        <table>
                            <tr>
                                <td>Waktu</td>
                                <td><span id="consult-date"></span><br><span id="consult-time"></span></td>
                            </tr>
                            <tr>
                                <td><b><span id="nama-layanan"></b></span></td>
                                <td>Rp1.000.000,00</td>
                            </tr>
                            <tr>
                                <td> dengan <b><span id="nama-mentor"></b></span></td>
                                <td><span></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="btns-group">
                <a class="btn btn-prev">Back</a>
                <input type="submit" value="Submit" class="btn btn-next" />
            </div>
        </div>
    </form>
    <div class="form-step">
        <div class="info">
            <p>Thank you! Your booking is successfully booked.</p>
        </div>
        <a href="" class="btn width-25" onclick="reload()" style="margin: 0 auto; margin-bottom: 20px;">Make New Registration</a>
    </div>

    <script>
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let formStepsNum = 0;

        let handle_dependent_selects = function($parent) {
            let $child = document.getElementById($parent.getAttribute('data-child-id')),
                $selected = $parent.options[$parent.selectedIndex],
                parent_val = $selected.value;

            for (let i = 0; i < $child.options.length; i++) {
                let $option = $child.options[i];
                if ($option.value != '') {
                    $option.setAttribute('hidden', true);
                }
            };

            if (parent_val) {
                let child_options = $selected.getAttribute('data-child-options'),
                    child_options_array = child_options.split(',');

                for (i = 0; i < $child.options.length; i++) {
                    let $option = $child.options[i];
                    if ($option.value == "") {
                        $option.innerText = "- pilih -";
                        continue;
                    }
                    if (child_options_array.indexOf($option.value) != -1) {
                        $option.removeAttribute('hidden');
                    }
                };

            } else {
                let show_text = $child.getAttribute('data-text-if-parent-empty');
                if (!show_text) {
                    show_text = ' pilih layanan ';
                }
                for (i = 0; i < $child.options.length; i++) {
                    let $option = $child.options[$child.selectedIndex];
                    if ($option.value == "") {
                        $option.innerText = '- ' + show_text + ' -';
                        break;
                    }
                };
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            let $parents = document.getElementsByClassName('dependent-selects__parent');
            for (let i = 0; i < $parents.length; i++) {
                handle_dependent_selects($parents[i]);
                $parents[i].addEventListener('change', function() {
                    handle_dependent_selects(this)
                })
            }
        }, false);

        function booking(jamKonsul) {
            const service = document.getElementById("input-layanan").value;
            document.getElementById("nama-layanan").innerHTML = service;

            const mentor = document.getElementById("input-perencanaKeuangan").value;
            document.getElementById("nama-mentor").innerHTML = mentor;

            const datePick = document.getElementById("date-input").value;
            document.getElementById("consult-date").innerHTML = datePick;

            document.getElementById("consult-time").innerHTML = jamKonsul;

            document.getElementsByName("jam")[0].value = jamKonsul;
        }

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum--;
                updateFormSteps();
                updateProgressbar();
            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
            });

            formSteps[formStepsNum].classList.add("form-step-active");
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");
                } else {
                    progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }
    </script>
</body>

</html>
<?= $this->endSection('content'); ?>