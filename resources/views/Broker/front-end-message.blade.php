
@include('header.nav_bar_head') 
@include('header.nav_bar_toe')

<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/tables/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/Dated-Double-Result.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
    <div class="content-body">


        <!-- Row grouping -->
        <section id="row-grouping">
            <div class="row">
                <div class="col-12">
                    <div class="card badge-theme-black">
                        <div class="card-header p-4-b">
                            <h5 class="card-title info">Front-End Stactic Messages</h5>
                            <div class="heading-elements">
                                <button class="btn btn-sm btn-info btn-lighten-4 text-black" data-toggle="modal"
                                    data-target="#AddDoubleGameModel">Add Message</button>
                            </div>
                        </div>

                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard p-4px">
                                <div class="table-responsive">
                                    <table
                                        class="table info lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped table-bordered default-ordering text-center p-0">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Location</th>
                                                <th>Message</th>
                                                <th>Edit Message</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Top</td>
                                                <td>कल्याण सिंगल जोड़ी स्कीम दिनांक-22-09-21
                                                    बुधवार के लिए यह ट्रिक,स्कीम जोड़ी के टोटल और क्लोज़ ओपन होने की दशा
                                                    पर आधारित
                                                    है। हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन
                                                    दिखा रहे है चलिए
                                                    आपको दिखाते हैं</td>
                                                <td><button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel"><i
                                                            class=" font-medium-4 la la-edit"></i></button></td>
                                                <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                            class=" font-medium-4 la la-close"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Middle</td>
                                                <td>कल्याण सिंगल जोड़ी स्कीम दिनांक-22-09-21
                                                    बुधवार के लिए यह ट्रिक,स्कीम जोड़ी के टोटल और क्लोज़ ओपन होने की दशा
                                                    पर आधारित
                                                    है। हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन
                                                    दिखा रहे है चलिए
                                                    आपको दिखाते हैं</td>
                                                <td><button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel"><i
                                                            class=" font-medium-4 la la-edit"></i></button></td>
                                                <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                            class=" font-medium-4 la la-close"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Bottom</td>
                                                <td>कल्याण सिंगल जोड़ी स्कीम दिनांक-22-09-21
                                                    बुधवार के लिए यह ट्रिक,स्कीम जोड़ी के टोटल और क्लोज़ ओपन होने की दशा
                                                    पर आधारित
                                                    है। हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन
                                                    दिखा रहे है चलिए
                                                    आपको दिखाते हैं</td>
                                                <td><button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel"><i
                                                            class=" font-medium-4 la la-edit"></i></button></td>
                                                <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                            class=" font-medium-4 la la-close"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Middle</td>
                                                <td>हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन
                                                    दिखा रहे है चलिए
                                                    आपको दिखाते हैं</td>
                                                <td><button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel"><i
                                                            class=" font-medium-4 la la-edit"></i></button></td>
                                                <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                            class=" font-medium-4 la la-close"></i></button></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>Location</th>
                                                <th>Message</th>
                                                <th>Edit Message</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Row grouping -->

        <!-- Start Model Of This Page  -->
        <div class="modal fade" id="AddDoubleGameModel" tabindex="-1" role="dialog"
            aria-labelledby="AddDoubleGameModelTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-directional-pink">
                    <div class="modal-header">
                        <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Update Stactic
                            Message</h5>
                        <button type="button" class="close black font-weight-bolder" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-8-x px-0 px-md-1 px-lg-2">
                        <form class="form form-horizontal">
                            <div class="form-body">

                                <div class="col-12 p-4-x">
                                    <div class="form-group row">

                                        <div class="col-12">
                                            <textarea name="ckeditor h-100" id="ckeditor" class="ckeditor">

                                                <h1>हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन
                                                    दिखा रहे है चलिए
                                                    आपको दिखाते हैं</h1>
                                            
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label
                                                class="col-md-3 label-control white font-weight-bolder">Location</label>
                                            <div class="col-md-9">
                                                <select id="MsLocation" name="MsLocation" class="form-control">
                                                    <option value="" disabled="" selected>Select Location</option>
                                                    <option value="tp">Top</option>
                                                    <option value="md">Middle</option>
                                                    <option value="bt">Bottom</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder">SN</label>
                                            <div class="col-md-9">
                                                <input type="text" id="StacticNo" class="form-control border-warning "
                                                    placeholder="SN" value="2" name="StacticNo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button"
                                        class="btn bg-white blue darken-4 text-uppercase">Update</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ends Model Of This Page  -->


    </div>
</div>
</div>

@include('header.footer_head')
@include('header.footer_toe')

<script type="text/javascript" src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.js')}}" ></script>
<script type="text/javascript" src="{{ asset('public/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/app-assets/vendors/js/editors/ckeditor/ckeditor.js')}}" ></script>