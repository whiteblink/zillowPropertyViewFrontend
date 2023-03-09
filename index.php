<?php
require('checksession.php');
include_once 'constants.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Portal</title>
</head>

<body ng-app="myApp" ng-controller="formCtrl" id="angularController" ng-cloak>
<section class="signup-step-container">
        <div class="">
            <div class="row d-flex justify-content-center ml-0 mr-0">
                <div class="col">
                    <div class="wizard">
                        <div class="wizard-inner d-none">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                        aria-expanded="true"><span class="round-tab"> PI <i
                                                class="fa-solid fa-house-user"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled zillow" id="zillowStep">
                                    <a href="#dataZillow" data-toggle="tab" aria-controls="step1" role="tab"
                                        aria-expanded="true"><span class="round-tab"> Zillow <i
                                                class="fa-solid fa-crop-simple"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                        aria-expanded="true"><span class="round-tab">FI <i
                                                class="fa-solid fa-hand-holding-dollar"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                                            class="round-tab">DI <i class="fa-solid fa-circle-info"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span
                                            class="round-tab">AD <i class="fa-solid fa-location-dot"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span
                                            class="round-tab">COD <i class="fa-solid fa-briefcase"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span
                                            class="round-tab">PD <i class="fa-solid fa-people-group"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span
                                            class="round-tab">LA <i class="fa-solid fa-list-ul"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"><span
                                            class="round-tab">NA <i
                                                class="fa-solid fa-magnifying-glass-arrow-right"></i></span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab"><span
                                            class="round-tab">ZOD <i class="fa-solid fa-file-shield"></i></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="button" ng-disabled="disableButton" class="btn btn-outline-danger next-step" value="Not_Interested">😒
                                Not-Interested</button>
                            <button type="button" ng-disabled="disableButton" class="btn btn-outline-secondary next-step" value="Unsure">🤔
                                UnSure</button>
                            <button type="button" ng-disabled="disableButton" class="btn btn-outline-info next-step" value="Needs_too_much_work">😬
                                    Needs too much Work</button>
                            <button type="button" ng-disabled="disableButton" class="btn btn-outline-success next-step" value="Interested">😊
                                Interested</button>
                            <a class="btn btn-outline-primary reset-session-class" href="./logout.php"><i class="fa fa-power-off"></i> Reset Session</a>
                        </div>

                        <form role="form" action="index.html" class="login-box">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div id="images">
                                        <div class="bg">
                                            <div class="bg-product mt-5">
                                                <div class="container product">
                                                    <div class="row" id="ImageInfoContainer">
                                                        <div class="col-lg-6">
                                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                                                            <div class="carousel-inner" id="carousel-innerData" >
                                                              <div class="carousel-item " ng-repeat="image in responseData.zillowImageUrls"
                                                              ng-class="{'active':$index === 0}">
                                                                <img class="d-block w-10 " ng-src="{{image}}" alt="First slide">
                                                              </div>
                                                            </div>
                                                            <a   class="carousel-control-prev fa fa-angle-left " id="left_icon" href="#carouselExampleControls" role="button" data-slide="prev">
                                                              <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a   class="carousel-control-next fa fa-angle-right" href="#carouselExampleControls" role="button" data-slide="next">
                                                              <span class="sr-only">Next</span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="top d-flex justify-content-center">
                                                                <span style="background-color: #E0794F;"
                                                                    id="imageInfo" class="text-white   p-4 mx-3 my-3 text-center">
                                                                    <b>{{responseData.bedrooms}}</b> <br><i
                                                                        class="fa-solid fa-bed"></i></span>
                                                                <span style="background-color: #E0794F;"
                                                                    id="imageInfo" class="text-white   p-4 mx-3 my-3 text-center">
                                                                    <b>{{responseData.bathrooms}}</b> <br> <i
                                                                        class="fa-solid fa-bath"></i></span>
                                                                <span style="background-color: #E0794F;"
                                                                    id="imageInfo" class="text-white   p-4 mx-3 my-3 text-center"><b>{{responseData.livingArea}}</b>
                                                                    <br><i class="fa-solid fa-couch"></i></span>
                                                                <span style="background-color: #E0794F;"
                                                                    id="imageInfo" class="text-white   p-4 mx-3 my-3 text-center"><b>{{responseData.yearBuilt}}</b>
                                                                    <br><i class="fa-solid fa-calendar-days"></i></span>
                                                            </div>
                                                            <!--endtop-->
                                                            <div class="details mx-5 my-3">
                                                                <h2 class="cr3 text-center">${{responseData.price | number}}</h2>
                                                                <p class="cr4 text-center">{{responseData.leadName}}</p>
                                                            </div>
                                                            <!--enddetails-->
                                                        </div>
                                                        <!--endrow-->
                                                    </div>
                                                    <!--endcontainer-->
                                                </div>
                                                <!--endbg-product-->
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="text-center"> Property Information <i class="fa-solid fa-house-user"></i>
                                    </h4>
                                    <div class="row border pt-3 shadow-sm mx-3">
                                        <div class="col">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-signature"></i>&nbsp;<label>Lead Name</label>
                                                    : <span>{{responseData.leadName}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-bed"></i>&nbsp;<label>Bedrooms</label>
                                                    : <span>{{responseData.bedrooms}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-bath"></i>&nbsp;<label>Bathrooms</label>
                                                    : <span>{{responseData.bathrooms}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-couch"></i>&nbsp;<label>Living Area</label>
                                                    : <span>{{responseData.livingArea}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-house-chimney"></i>&nbsp;<label>Home
                                                        Type</label>
                                                    : <span>{{responseData.homeType}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-wave-square"></i>&nbsp;<label>Lot Size</label>
                                                    : <span>{{responseData.lotSize}}</span>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-asterisk"></i>&nbsp;<label>Description</label>
                                                    : <span>{{responseData.description}}</span>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-calendar-days"></i>&nbsp;<label>Year
                                                        Build</label>
                                                    : <span>{{responseData.yearBuilt}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-house-laptop"></i>&nbsp;<label>HomeStatus</label>
                                                    : <span>{{responseData.homeStatus}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-calendar-week"></i>&nbsp;<label>DateListed</label>
                                                    : <span>{{responseData.dateListed}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-brands fa-ideal"></i>&nbsp;<label>Lead Status</label>
                                                    : <span>{{responseData.leadStatus}}</span>
                                                </div>
                                            </div>
<!--                                           coc-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-file-invoice-dollar"></i>&nbsp;<label>ClosingCashonCash</label>
                                                    : <span>{{responseData.closingCashonCash}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-money-check-dollar"></i>&nbsp;<label>FreeCash</label>
                                                    : <span>{{responseData.freeCash}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-money-bills"></i>&nbsp;<label>FreeCashYear2</label>
                                                    : <span>{{responseData.freeCashYear2}}</span>
                                                </div>
                                            </div>
<!--                                            <div class="col-md-12">-->
<!--                                                <div class="form-group">-->
<!--                                                    <i-->
<!--                                                        class="fa-solid fa-wrench"></i>&nbsp;<label>Renovated</label>-->
<!--                                                    : <span>{{responseData.freeCashYear2}}</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-12">-->
<!--                                                <div class="form-group">-->
<!--                                                    <i-->
<!--                                                        class="fa-solid fa-address-card"></i>&nbsp;<label>Package or Portfolio</label>-->
<!--                                                    : <span>{{responseData.freeCashYear2}}</span>-->
<!--                                                </div>-->
<!--                                            </div>-->

                                        </div>

                                        <div class="col">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-dollar-sign"></i>&nbsp;<label>price</label>
                                                    : <span>{{responseData.price | number}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                            class="fa-solid fa-money-bill-1-wave"></i>&nbsp;<label>CashonCash</label>
                                                    : <span>{{responseData.cashonCash}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-sign-hanging"></i>&nbsp;<label>zestimate</label>
                                                    : <span>{{responseData.zestimate}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa-solid fa-landmark"></i>&nbsp;<label>Mortgage</label>
                                                    : <span>{{responseData.mortgage}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-credit-card"></i>&nbsp;<label>DownPayment</label>
                                                    : <span>{{responseData.downPayment}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-file-invoice-dollar"></i>&nbsp;<label>ManagementCost</label>
                                                    : <span>{{responseData.managementCost}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-receipt"></i>&nbsp;<label>MaintenanceReserve</label>
                                                    : <span>{{responseData.maintenanceReserve}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-hand-holding-dollar"></i>&nbsp;<label>TotalMonthlyExpenses</label>
                                                    : <span>{{responseData.totalMonthlyExpenses}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-magnifying-glass-dollar"></i>&nbsp;<label>ProppertyTaxRate</label>
                                                    : <span>{{responseData.proppertyTaxRate}}</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-magnifying-glass-dollar"></i>&nbsp;<label>ProppertyTaxes</label>
                                                    : <span>{{responseData.propertyTaxes}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-money-bill-trend-up"></i>&nbsp;<label>TaxAssessedYear</label>
                                                    : <span>{{responseData.taxAssessedYear}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-money-bill-trend-up"></i>&nbsp;<label>TaxAssessedValue</label>
                                                    : <span>{{responseData.taxAssessedValue}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-truck-ramp-box"></i>&nbsp;<label>HUDRent</label>
                                                    : <span>{{responseData.hudrent}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-cash-register"></i>&nbsp;<label>ZillowRentEstimate</label>
                                                    : <span>{{responseData.zillowRentEstimate}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-barcode"></i>&nbsp;<label>LastSoldPrice</label>
                                                    : <span>{{responseData.lastSoldPrice}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i
                                                        class="fa-solid fa-sheet-plastic"></i>&nbsp;<label>PropertyCalculationSpreedsheet</label>
                                                    : <span class="SpreedSheetText"> <a target="_blank" href="{{responseData.propertyCalculationSpreedsheet}}">{{responseData.propertyCalculationSpreedsheet}}</a> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3">
                                        <a class="btn btn-info mx-3 "  id="zohoBtn" target="_blank"
                                            href="https://crmplus.zoho.com/realestate2326/index.do/cxapp/crm/org768815691/tab/Leads/{{responseData.id}}">Go
                                            to Zoho CRM</a>
                                        <a class="btn btn-info mx-3 pull-right " id="zohoBtn" target="_blank"
                                            href="{{responseData.zillowUrl}}">Go
                                            to Zillow</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="modal fade" id="upload-csv-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <h4 class="modal-title text-white" id="fail-request-modalLabel">Upload a CSV File</h4>
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form name="uploadForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">Select File <span style="color: red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="fileInput" class="custom-file-input" id="inputGroupFile01" ng-model="file" onchange="chagningOperation(this)" accept=".csv">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose a CSV file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button class="btn btn-primary" id="upload_button" ng-click="uploadCSVFile()" ng-disabled="!enableSubmit">Upload</button>
                            </div>
                        </div>
                        <!--                                <button type="button" id="clear-button" ng-click="clear()">Clear</button>-->
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"
        integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/2d8c935d03.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="./index.js"></script>

    <script>

        function chagningOperation(e){
            var scope = angular.element(document.getElementById("angularController")).scope();
            scope.selectedValue = $(e).val();
            scope.file = scope.selectedValue;
            if(scope.selectedValue !== null){
                scope.enableSubmit = true;
                $(e).siblings(".custom-file-label").html(e.files[0].name);

                scope.$apply();
            }else{
                scope.enableSubmit = false;
                scope.$apply();
            }
        }

        var app = angular.module('myApp', []);
        app.controller('formCtrl', function ($scope) {
            $scope.disableButton = false;
            function getData() {
                var settings = {
                    "url": "<?php echo BACKEND_URL;?>/zoho/getNextProperty?zohoLeadsCsvDetailsId="+"<?php echo $_SESSION['fileID'];?>",
                    "method": "GET",
                    "timeout": 0,
                };

                $.ajax(settings).done(function (response) {
                    console.log(response);
                    if (response === "") {
                        $('.signup-step-container').css({
                            "display": "none",
                        });
                        // Create and append the logout button
                        var logoutBtn = $('<a>').addClass('btn btn-outline-primary reset-session-class')
                            .attr('href', './logout.php')
                            .html('<i class="fa fa-power-off"></i> Reset Session');
                        $('body').addClass('text-center').append(logoutBtn); // Add the 'text-center' class to center the button
                        $('<h1>').text('There are no more properties for review. Please check again later.')
                            .css({
                                'text-align': 'center',
                                'font-family': 'sans-serif',
                                'justify-content': 'center',
                                'line-height': '100px',
                                'font-weight': 'bold'
                            })
                            .appendTo('body');
                    }
                    $scope.disableButton = false;
                    $scope.responseData = response;
                    console.log($scope.responseData.zillowUrl);
                    $scope.$apply();
                }).fail(function (err) {
                    console.log(err);
                });
            }
            getData();

            $('.next-step').click(function (e) {
                $scope.disableButton = true;
                toastr.info('Adding Lead Status!','',{timeOut: 500});
                $scope.$apply();
                console.log("In second API");
                let leadStatus = e.target.value;
                console.log(leadStatus);
                var settings = {
                    "url": "<?php echo BACKEND_URL;?>/zoho/disposeProperty?zohoLeadId=" +
                        $scope.responseData.id + "&leadStatus=" + leadStatus +"&zohoLeadsCsvDetailsId="+"<?php echo $_SESSION['fileID'];?>",
                    "method": "GET",
                    "timeout": 0,
                };

                $.ajax(settings).done(function (response) {
                    // console.log(response);
                    toastr.success('Lead Status Added Successfully!','', {timeOut: 500});
                    getData();
                }).fail(function(err){
                    console.log(err);
                });
            });

        })
    </script>
</body>

</html>