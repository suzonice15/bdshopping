@extends('website.master')
@section('mainContent')


    <span class="product_search"></span>

    <div class="breadcrumb" style="display:none"  >
        <div class="container-fluid">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <?php if(isset($category_name_first)) { ?>
                    <li><a href="{{url('/category/')}}/{{$category_name_first}}" >{{$category_title_first}}</a></li>
                    <?php } ?>
                    <?php if(isset($category_name_middle)) { ?>
                    <li><a href="{{url('/category/')}}/{{$category_name_middle}}" >{{$category_title_middle}}</a></li>
                    <?php } ?>
                    <li  class='active'><a href="{{url('/category/')}}/{{$category_name_last}}" >{{$category_title_last}}</a></li>

                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="container remove_class">
        <div class="row row5 mt30">
            <div id="load_data">


                                            <span id="post-data">
                                                 <ul class="products row row5 mt30">
                                                     <div class="col-sm-12">
                                                  @include('website.category_ajax')
                                                </div>
                                                 </ul>
                                            </span>


            </div>

        </div>
    </div>
    <input type="hidden"  id="category_name" name="category_name" value="{{$category_name}}">

    <script type="text/javascript">

        var page = 1;
        //jQuery('.ajax-load').show();
        jQuery(window).scroll(function() {


                page++;

                loadMoreData(page);



        });


        function loadMoreData(page){
   var category_name=$('#category_name').val();
            jQuery.ajax(

                {

                    url:"{{url('/ajax_category')}}?page="+page+"&category_name="+category_name,

                    type: "get",

                    beforeSend: function()

                    {

                        //jQuery('.ajax-load').show();

                    }

                })

                .done(function(data)

                {
                // console.log(data.html)
                    if(data.html == " "){

                        jQuery('.ajax-load').html("No more records found");

                        return;

                    }

                    jQuery('.ajax-load').hide();

                    jQuery("#post-data").append(data.html);

                })

                .fail(function(jqXHR, ajaxOptions, thrownError)

                {

                   // alert('server not responding...');

                });

        }

    </script>


@endsection
