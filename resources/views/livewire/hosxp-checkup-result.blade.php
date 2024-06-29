<main class="main-content">
    <div class="container-fluid py-4">
        <!-- START HEAD -->
        <div class="row">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-2 ml-auto mr-2 text-center mt-5 mt-lg-0">
                                <div class="bg-gradient-light border-radius-lg h-100">
                                    <img src="../assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                        <img class="w-80 position-relative z-index-2" src="/assets/img/nrimage/NEW-LOGO-NR-2024.png">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="d-flex flex-column h-100 text-left">
                                    <p class="mb-1 pt-2 text-bold">Health Checkup Report System (HCRS)</p>
                                    <h5 class="font-weight-bolder">รายงานผลการตรวจสุขภาพ โรงพยาบาลนางรอง</h5>
                                    <p class="mb-2">ชื่อ-สกุล นายภาคภูมิ เมฆหมอก
                                        <span class="badge badge-pill bg-gradient-purple">HN 000666999</span>
                                        <span class="badge badge-pill bg-gradient-purple">อายุ 69 ปี</span>
                                        <span class="badge badge-pill bg-gradient-purple">วันที่ตรวจ {{now()}}</span>
                                    </p>
                                    <p class="mb-2">หน่วยงาน : โรงงาน AAAAAAAAAAAA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END HEAD -->
        <div class="row mt-4">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">น้ำหนัก / ส่วนสูง</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        99 กก. / 200 ซม.
                                        {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ดัชนีมวลกาย</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        100 kg/m<sup>2</sup>
                                        <span class="text-success text-sm font-weight-bolder">(BMI)</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ความดันโลหิต</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        100/200 mmHg
                                        {{-- <span class="text-danger text-sm font-weight-bolder">สูง</span> --}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ชีพจร</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        1000 ครั้ง/นาที
                                        <span class="text-success text-sm font-weight-bolder">ดี</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START RESULT ROW1 BLOOD LIVER URINE-->
        <div class="row mt-4">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">ความสมบูรณ์ของเม็ดเลือด</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            Hb (ความเข้มข้นของฮีโมโกลบิน)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            Hct (ค่าเม็ดเลือดแดงอัดแน่น)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            RBC (จำนวนเม็ดเลือดแดง)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            MCV (ขนาดตัวของเม็ดเลือดแดง)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            WBC (จำนวนเม็ดเลือดขาว)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            เม็ดเลือดขาว ชนิด Nuetrophil
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            เม็ดเลือดขาว ชนิด Lymphocyte
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            เม็ดเลือดขาว ชนิด Eosinophil
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            เม็ดเลือดขาว ชนิด Monocyte
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            เม็ดเลือดขาว ชนิด Basophil
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="px-0">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-droplet text-lg text-danger opacity-10 me-2" aria-hidden="true"></i>
                                                            Platelet count (จำนวนกล็ดเลือด)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>



                                            </tbody>


                                        </table>
                                    </div>
                                    <!-- end result -->

                                    {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                                    {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="card  mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">การทำงานของตับ</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-flask text-lg opacity-10 me-2" style="color: #C93756;" aria-hidden="true"></i>
                                                            เอนไซม์จากตับ ชนิด SGOT หรือ AST
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-flask text-lg opacity-10 me-2" style="color: #C93756;" aria-hidden="true"></i>
                                                            เอนไซม์จากตับ ชนิด SGPT หรือ ALT
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-flask text-lg opacity-10 me-2" style="color: #C93756;" aria-hidden="true"></i>
                                                            เอนไซม์จากตับและท่อน้ำดี ชนิด ALP
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>



                                            </tbody>


                                        </table>
                                    </div>
                                    <!-- end result -->

                                    {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                                    {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- END LIVER -->
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">ตรวจปัสสาวะ</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-prescription-bottle text-lg opacity-10 me-2" style="color: #FFB61E;" aria-hidden="true"></i>
                                                            โปรตีนในปัสสาวะ
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-prescription-bottle text-lg opacity-10 me-2" style="color: #FFB61E;" aria-hidden="true"></i>
                                                            น้ำตาลในปัสสาวะ
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-prescription-bottle text-lg opacity-10 me-2" style="color: #FFB61E;" aria-hidden="true"></i>
                                                            เม็ดเลือดขาวในปัสสาวะ
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-prescription-bottle text-lg opacity-10 me-2" style="color: #FFB61E;" aria-hidden="true"></i>
                                                            เม็ดเลือดแดงในปัสสาวะ
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>


                                        </table>
                                    </div>
                                    <!-- end result -->

                                    {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                                    {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- END RESULT ROW1 -->

        <!-- START RESULT ROW2  -->
        <div class="row mt-4">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <!-- START SUGAR SECTION -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">น้ำตาลในเลือด</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-cheese text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            น้ำตาลในเลือด (FBS)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-cheese text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            น้ำตาลเฉลี่ยสะสม (HbA1C)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>


                                        </table>
                                    </div>
                                    <!-- end result -->

                                    {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                                    {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END SUGAR SECTION -->

                <!-- START OIL SECTION -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">ไขมันในเลือด</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-burger text-lg opacity-10 me-2" style="color: #F9690E;" aria-hidden="true"></i>
                                                            ไขมันคอลเลสเตอรอลรวม
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-burger text-lg opacity-10 me-2" style="color: #F9690E;" aria-hidden="true"></i>
                                                            ไขมันไตรกลีเซอไรด์
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-burger text-lg opacity-10 me-2" style="color: #F9690E;" aria-hidden="true"></i>
                                                            ไขมันในเลือดชนิดไม่ดี (LDL)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-burger text-lg opacity-10 me-2" style="color: #F9690E;" aria-hidden="true"></i>
                                                            ไขมันในเลือดชนิดดี (HDL)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </tbody>


                                        </table>
                                    </div>
                                    <!-- end result -->

                                    {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                                    {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END OIL SECTION -->

                <!-- START LUNGS SECTION -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">การทำงานของไต</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-kidneys text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            ค่าของเสียในเลือด ชนิด BUN
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-kidneys text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            ค่าของเสียในเลือด ชนิด Creatinine
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-kidneys text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            อัตราการกรองของไต (eGFR)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </tbody>


                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END LUNGS SECTION -->

                <!-- START URIC -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">กรดยูริค</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-vial text-lg opacity-10 me-2" style="color: #F5AB35;" aria-hidden="true"></i>
                                                            กรดยูริค (Uric acid)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END URIC -->
            </div>

            <div class="col-lg-6">
                <!-- START STOOL -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">ตรวจอุจจาระ</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-poop text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            เม็ดเลือดแดงในอุจจาระ
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-poop text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            เม็ดเลือดขาวในอุจจาระ
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-poop text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            พยาธิในอุจจาระ
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-poop text-lg opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                            การตรวจหาเลือดแผงในอุจจาระ (FIT)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END STOOL -->

                <!-- START Hepatitis -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">การตรวจไวรัสตับอักเสบ</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าปกติ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ค่าที่ได้</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-vial-virus text-lg opacity-10 me-2" style="color: #F9690E;" aria-hidden="true"></i>
                                                            การติดเชื้อไวรัสตับอักเสบบี (HBsAg)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-vial-virus text-lg opacity-10 me-2" style="color: #F9690E;" aria-hidden="true"></i>
                                                            ภูมิคุ้มกันไวรัสตับอักเสบบี (HBsAb)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-vial-virus text-lg opacity-10 me-2" style="color: #F9690E;" aria-hidden="true"></i>
                                                            การติดเชื้อไวรัสตับอักเสบซี (Anti-HCV)
                                                        </h6>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hepatitis -->

                <!-- START X-Ray -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">เอกซเรย์ทรวงอก</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-6">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-x-ray fa-2x opacity-10 me-2" style="color: #59ABE3;" aria-hidden="true"></i>
                                                            ผลการตรวจเอกซเรย์
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-md bg-gradient-success">ปกติ</span>
                                                        <span class="badge badge-pill badge-md bg-gradient-warning">ผิดปกติ</span>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END X-Ray -->

                <!-- START EKG -->
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p>
                                    <h5 class="font-weight-bolder">คลื่นไฟฟ้าหัวใจ</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">รายการตรวจ</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ผลการตรวจ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-6">
                                                        <h6 class="font-weight-bolder mb-0 text-sm">
                                                            <i class="fas fa-solid fa-heart-pulse fa-2x opacity-10 me-2" style="color: #F62459;" aria-hidden="true"></i>
                                                            ผลการตรวจคลื่นไฟฟ้าหัวใจ
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-md bg-gradient-success">ปกติ</span>
                                                        <span class="badge badge-pill badge-md bg-gradient-warning">ผิดปกติ</span>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END EKG-->

            </div>
        </div>

        <!-- START RESULT ROW3  -->
        <div class="row mt-4">
            <!-- START Doctor Text 1  -->
            <div class="col-lg-6 mb-lg-0 mb-4">
                <!-- START RESULT-TEXT SECTION -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    {{-- <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p> --}}
                                    <h5 class="font-weight-bolder">สรุปผลการตรวจสุขภาพ</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">

                                                        {{-- <h6 class="font-weight-bolder mb-0 text-sm"> --}}
                                                            <i class="fas fa-solid fa-file-waveform fa-2x opacity-10 me-2" style="color: #F47983;" aria-hidden="true"></i>
                                                        {{-- </h6> --}}
                                                        <p class="mb-5" style="text-indent: 30px;">ผลการตรวจสุขภาพครั้งนี้พบว่าผู้รับการตรวจมีสุขภาพโดยรวมดี ระดับความดันโลหิตอยู่ในเกณฑ์ปกติ ค่าไขมันในเลือดอยู่ในระดับที่เหมาะสม น้ำตาลในเลือดไม่เกินมาตรฐาน น้ำหนักและดัชนีมวลกาย (BMI) อยู่ในเกณฑ์ปกติ ผลการตรวจคลื่นไฟฟ้าหัวใจ (ECG) ไม่พบความผิดปกติใด ๆ การทำงานของตับและไตเป็นปกติ และผลการตรวจทางโลหิตวิทยาพบว่าระดับฮีโมโกลบินและจำนวนเม็ดเลือดขาวอยู่ในเกณฑ์ปกติ</p>

                                    </div>
                                    <!-- end result -->

                                    {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                                    {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END SUGAR SECTION -->


            </div>
            <!-- END Doctor Text 1  -->

            <!-- START Doctor Text 2  -->
            <div class="col-lg-6 mb-lg-0 mb-4">
                <!-- START RESULT-TEXT SECTION -->
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    {{-- <p class="mb-1 pt-2 text-bold">รายงานผลการตรวจ</p> --}}
                                    <h5 class="font-weight-bolder">ข้อแนะนำจากแพทย์</h5>

                                    <!-- start result -->
                                    <div class="table-responsive">

                                                        {{-- <h6 class="font-weight-bolder mb-0 text-sm"> --}}
                                                            <i class="fas fa-solid fa-user-doctor-message fa-2x opacity-10 me-2" style="color: #26C281;" aria-hidden="true"></i>
                                                        {{-- </h6> --}}
                                                        <p class="mb-5" style="text-indent: 30px;">จากผลการตรวจสุขภาพครั้งนี้ แพทย์ผู้เชี่ยวชาญแนะนำให้ผู้รับการตรวจรักษาวิถีชีวิตที่ดีอย่างเคร่งครัด เพื่อคงสภาพร่างกายที่สมบูรณ์แข็งแรง ควรรับประทานอาหารที่สมดุล ประกอบด้วยผักและผลไม้สดที่หลากหลาย โปรตีนจากแหล่งธรรมชาติ เช่น ปลาและถั่ว และควรหลีกเลี่ยงอาหารที่มีไขมันอิ่มตัวสูงและน้ำตาลสูง การออกกำลังกายอย่างสม่ำเสมอเป็นสิ่งจำเป็น โดยควรออกกำลังกายแบบแอโรบิคอย่างน้อย 150 นาทีต่อสัปดาห์ และควรเสริมการฝึกความแข็งแรงของกล้ามเนื้ออย่างน้อยสองครั้งต่อสัปดาห์

                                                            การนอนหลับที่เพียงพอและมีคุณภาพเป็นปัจจัยสำคัญ โดยควรนอนหลับอย่างน้อย 7-8 ชั่วโมงต่อคืน นอกจากนี้ ควรหลีกเลี่ยงการสูบบุหรี่และการดื่มเครื่องดื่มแอลกอฮอล์ และหากจำเป็นควรปรึกษาแพทย์เพื่อรับคำแนะนำเพิ่มเติม การตรวจสุขภาพประจำปีและการตรวจเลือดตามคำแนะนำของแพทย์จะช่วยเฝ้าระวังและป้องกันโรคต่าง ๆ รวมถึงโรคเรื้อรังที่อาจเกิดขึ้นในอนาคต</p>

                                    </div>
                                    <!-- end result -->

                                    {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                                    {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END SUGAR SECTION -->


            </div>
            <!-- END Doctor Text 2  -->

        </div>
        <!-- END RESULT-TEXT SECTION   -->

    <!-- END OF data -->
    </div>
</main>
