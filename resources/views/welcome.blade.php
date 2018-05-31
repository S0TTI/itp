<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IranTether</title>

        <!-- Fonts -->

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
        <style>
            div{
                /*border: solid white 2px;*/
                /*background-color: #665b2a;*/
                /*opacity: 0.9;*/
            }
            /*a,div{*/
                /*color: white !important;*/
            /*}*/
            .marg70{
                margin-top: 50px;
            }
            .container-fluid{
                position: relative;
            }
            .marg20{
                margin-top: 20px;
            }
            .brd{
                border: 2px solid gold !important;
                border-radius: 9px !important;
                color: white !important;
            }
            .aln{
                text-indent: 20%;
            }
            .minhi{
                min-height: 200px;
            }
           .pad{
               padding: 2% 2% 2% 1%;
           }
            .rtl{
                direction: rtl;
            }
            label{
                padding: 2px 1px 5px 15px;
            }
        </style>
        {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
        <link href="css/background.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/type-it.js"></script>

    </head>
    <body>
    <div id="particles-js"></div>
    <script src="js/particles.min.js"></script>
    <script src="js/background.js"></script>

    <div class="container">
        <div class="row justify-content-center">
            <div  class="col col-lg-8 col-sm-12 marg70">
                {{--tabs--}}
                <nav>
                    <div class="nav nav-tabs nav-justified"  role="tablist">
                        <a class="nav-item nav-link active" id="nav-tabadol-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            <i class="fa fa-refresh fa-lg  amber-text" aria-hidden="true"></i>
                        </a>
                        <a class="nav-item nav-link" id="nav-pro-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <i class="fa fa-user fa-lg  amber-text" aria-hidden="true"></i>
                        </a>
                        <a class="nav-item nav-link" id="nav-accept-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <i class="fa fa-check-circle fa-lg  amber-text" aria-hidden="true"></i>
                        </a>
                        <a class="nav-item nav-link" id="nav-send-tab" data-toggle="tab" href="#nav-send" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <i class="fa fa-send fa-lg  amber-text" aria-hidden="true"></i>
                        </a>
                    </div>
                </nav>
                {{--end tabs--}}
                {{--tab content--}}
                <div class="tab-content mask z-depth-5 minhi" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-tabadol-tab">
                       <form>
                         <div class="row marg70 pad">
                             <div class="col-4">
                               <div class="md-form mt-0">
                                   <input class="form-control brd amber-text" id="inp" type="number">
                                   <label class="amber-text" for="inp">واگذار میکنید</label>
                               </div>
                             </div>
                             <div class="col-3">
                                 <div class="md-form mt-0 text-center">
                                     <select class="form-control bg-white aln" id="select">
                                         <option value="1">تتر-USDT</option>
                                         <option value="2">ریال-IRR</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-1">
                                 <i class="fa fa-arrow-right fa-2x amber-text" aria-hidden="true"></i>
                             </div>
                             <div class="col-4">
                                 <div class="md-form mt-0">
                                     <input class="form-control brd" id="inp2" type="text" disabled>
                                 </div>
                             </div>
                         </div>
                           <div class="row pad">
                               <div class="col-12">
                                   <a class="btn btn-amber col-12 btnNext">مرحله بعد</a>
                               </div>
                           </div>
                       </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-pro-tab">
                        <form>
                            <div class="row marg70 pad">
                                <div class="col-3">
                                    <div class="md-form mt-0 rtl">
                                        <input class="form-control brd amber-text" id="inpname" type="text">
                                        <label class="amber-text" for="inpname">نام </label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="md-form mt-0 rtl">
                                        <input class="form-control brd amber-text" id="inplname" type="text">
                                        <label class="amber-text" for="inplname">نام خانوادگی  </label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="md-form mt-0">
                                        <input class="form-control brd amber-text" id="inpmobile" type="number">
                                        <label class="amber-text rtl" for="inpmobile">موبایل  </label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="md-form mt-0">
                                        <input class="form-control brd amber-text" id="hesab" type="text">
                                        <label class="amber-text rtl" for="hesab">آدرس کیف پول تتر</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row pad">
                                <div class="col-6">
                                    <a class="btn btn-amber col-12 btnPrevious">مرحله قبل</a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-amber col-12 btnNext float-right">مرحله بعد</a>
                                </div>

                            </div>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-accept-tab">
                        <!--Panel-->
                        <div class="col col-12 card border-primary mb-3">
                            <div class="card-header text-center"><h1>فاکتور</h1></div>
                            <div class="card-body text-primary text-right">
                                <p>نام : عباس</p>
                                <p>نام خانوادگی : نگاری</p>
                                <p>شماره همراه : 0912659856</p>
                                <blockquote class="blockquote text-center bq-warning">
                                    <p class="mb-0">
                                        <h2 class="text-warning">آدرس کیف پول مجازی <p>qsdfhgfdsxbnfdd45sdf</p></h2>
                                    </p>
                                    <footer class="blockquote-footer">لطفا توجه نمایید آدرس کیف پول خود را بررسی نمایید</footer>
                                </blockquote>

                                <hr>
                                <p>قیمت هر تتر : 2000ریال</p>
                                <p>تعداد 10 تتر برای خرید|فروش</p>
                                <p>مبلغ کل فاکتور : 8000</p>
                                <div class="col-12">
                                    <div class="md-form mt-0">
                                        <input class="form-control brd amber-text" id="codhov" type="text">
                                        <label class="amber-text rtl" for="codhov">کد احراز هویت را وارد نمایید </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row card-footer border-success">
                                <div class="col-6">
                                    <a class="btn btn-amber col-12 btnPrevious">مرحله قبل</a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-amber col-12 btnNext float-right">مرحله بعد</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel-->
                    </div>
                    <div class="tab-pane fade" id="nav-send" role="tabpanel" aria-labelledby="nav-send-tab">ارسال</div>
                </div>
                {{--end tab content--}}



            </div>
           </div>

    </div>
    </body>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
    <script>
        $("#inp")
                .keyup(function () {
                    var value = $(this).val();
                    var nrkh = 6300;
                    var nrkht = 0.00002;
                    var sval = $("#select").val();
                    if (sval == 1) {
                        $("#inp2").val(value * nrkh + 'ریال');
                    } else {
                        $("#inp2").val(value * nrkht + 'تتر');
                    }
                })
                .keyup();
        $("#select").on('change', function () {
            $("#inp")
                    .keyup(function () {
                        var value = $(this).val();
                        var nrkh = 6300;
                        var nrkht = 0.00002;
                        var sval = $("#select").val();
                        if (sval == 1) {
                            $("#inp2").val(value * nrkh + 'ریال');
                        } else {
                            $("#inp2").val(value * nrkht + 'تتر');
                        }
                    })
                    .keyup();
        });
    </script>
    <script>
        $('.btnNext').click(function(){
            $('.nav-tabs > .active').next('a').trigger('click');
        });

        $('.btnPrevious').click(function(){
            $('.nav-tabs > .active').prev('a').trigger('click');
        });
    </script>
</html>
